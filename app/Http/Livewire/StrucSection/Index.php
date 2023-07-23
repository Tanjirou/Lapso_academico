<?php

namespace App\Http\Livewire\StrucSection;

use App\Models\Section;
use App\Models\Subject;
use App\Models\Teacher;
use Livewire\Component;
use App\Models\Department;
use Livewire\WithPagination;
use App\Models\StructureSection;
use App\Models\DepartmentSection;
use App\Models\DetailSection;
use Illuminate\Support\Facades\DB;
// use App\Models\AcademicCurriculum as AcademicCurriculumModel;

class Index extends Component
{
    public $department, $teacher, $department_sections, $subjectCode, $selectedSubject,
        $subjects, $selectedDepartmentSection = null;
    public Subject $subject;
    public StructureSection $struc_section;
    protected $rules = [
        'struc_section.subjectid' => 'required|unique:structure_sections,subjectid',
        'selectedDepartmentSection' => 'required',
        'struc_section.average_students' => 'required',
        'struc_section.number_section' => 'required'
    ];
    public function mount()
    {
        $this->teacher = Teacher::where('userid', auth()->user()->id)->first();
        $this->department = Department::where('id', $this->teacher->ndepartament)->first();
        $this->subject = new Subject();
        if (auth()->user()->user_type == 3) {
            $this->department_sections = DepartmentSection::where('departmentid', $this->department->id)
                ->where('id', '=', $this->teacher->nmention)
                ->get();
            $this->selectedDepartmentSection = $this->teacher->nmention;
            $this->subjects = Subject::where('departmentsectionid', $this->teacher->nmention)->get();
        } else {
            $this->department_sections = DepartmentSection::where('departmentid', $this->department->id)->get();
            $this->selectedDepartmentSection = null;
        }
        $this->struc_section = new StructureSection();
    }

    public function messages()
    {
        return [
            'struc_section.number_section.required' => 'El campo número de la sección es obligatorio.',
            'struc_section.subjectid.unique' => 'Esa asignatura ya se encuetra registrado.',
            'struc_section.subjectid.required' => 'El campo asignatura es obligatorio.',
            'struc_section.average_students.required' => 'El campo cantidad de estudiantes es obligatorio.',
            'selectedDepartmentSection.required' => 'El campo sección académica es obligatorio.'
        ];
    }
    public function updatedSelectedDepartmentSection($department_sectionId)
    {
        if ($department_sectionId != 'Seleccione' && !is_null($department_sectionId)) {
            $this->subjects = Subject::where('departmentsectionid', $department_sectionId)->get();
        } else {
            $this->selectedDepartmentSection = null;
            $this->subject->name = null;
            $this->selectedSubject = null;
            $this->subjectCode = null;
        }
    }
    public function updatedSelectedSubject($subjectId)
    {
        if ($subjectId != 'Seleccione' && $subjectId && $this->selectedSubject) {
            $subjectCode = Subject::where('id', $subjectId)
                ->select('code')->first();
            $this->subjectCode = $subjectCode->code;
        } else {
            $this->subjectCode = null;
        }
    }
    public function save()
    {
        $this->struc_section->subjectid = $this->selectedSubject;
        if (is_null($this->struc_section->id)) {
            $this->rules = [
                'struc_section.subjectid' => 'required|unique:structure_sections,subjectid',
                'selectedDepartmentSection' => 'required',
                'struc_section.average_students' => 'required',
                'struc_section.number_section' => 'required'
            ];
        } else {
            $this->rules = [
                'struc_section.subjectid' => 'required|unique:structure_sections,subjectid,' . $this->struc_section->id,
                'selectedDepartmentSection' => 'required',
                'struc_section.average_students' => 'required',
                'struc_section.number_section' => 'required'
            ];
            Section::where('structure_sectionid', $this->struc_section->id)
                ->where('subjectid', $this->struc_section->subjectid)
                ->delete();
        }
        $this->validate();
        $this->struc_section->department_sectionid = $this->selectedDepartmentSection;
        $this->struc_section->save();
        $structure = StructureSection::orderByDesc('id')->first();
        for ($i = 1; $i <= $this->struc_section->number_section; $i++) {
            Section::create([
                'structure_sectionid' => $structure->id,
                'subjectid' => $structure->subjectid,
                'section_number' => $i,
            ]);
        }
        session()->flash('mens', 'Estructura guardada correctamente.');
        $this->reset('selectedDepartmentSection', 'selectedSubject', 'subjectCode');
        $this->mount();
    }
    public function edit(StructureSection $struc_section)
    {
        $this->selectedDepartmentSection = $struc_section->department_sectionid;
        $this->struc_section = $struc_section;
        $detailSection = DetailSection::join('sections', 'detail_sections.sectionid', '=', 'sections.id')
            ->where('sections.structure_sectionid', '=', $this->struc_section->id)
            ->first();
        if (!is_null($detailSection)) {
            session()->flash('mens-error', 'No se puede editar la estructura.');
            $this->reset('selectedDepartmentSection', 'selectedSubject', 'subjectCode');
            $this->mount();
        }else{
            $this->selectedSubject = $struc_section->subjectid;
            $this->updatedSelectedSubject($struc_section->subjectid);
            $this->subjects = Subject::where('departmentsectionid', $this->selectedDepartmentSection)->get();
        }

    }
    public function delete(StructureSection $struc_section)
    {
        $this->struc_section = $struc_section;
        $detailSection = DetailSection::join('sections', 'detail_sections.sectionid', '=', 'sections.id')
            ->where('sections.structure_sectionid', '=', $this->struc_section->id)
            ->first();
        if (!is_null($detailSection)) {
            session()->flash('mens-error', 'No se puede eliminar la estructura.');
            $this->reset('selectedDepartmentSection', 'selectedSubject', 'subjectCode');
            $this->mount();
        } else {
            $driverName = DB::getDriverName();
            $nextId = Section::max('id') + 1;
            $nextIdStruc = StructureSection::max('id') + 1;
            if($driverName =='pgsql'){
                DB::statement("ALTER SEQUENCE sections_id_seq RESTART WITH $nextId");
                DB::statement("ALTER SEQUENCE structure_sections_id_seq RESTART WITH $nextIdStruc");
            }else{
                DB::statement("ALTER TABLE sections AUTO_INCREMENT = $nextId");
                DB::statement("ALTER TABLE structure_sections AUTO_INCREMENT = $nextIdStruc");
            }
            Section::where('structure_sectionid', $this->struc_section->id)
                ->where('subjectid', $this->struc_section->subjectid)
                ->delete();
            $this->struc_section->delete();
            session()->flash('mens', 'Estructura eliminada correctamente.');
            $this->reset('selectedDepartmentSection', 'selectedSubject', 'subjectCode');
            $this->mount();
        }
    }
    public function render()
    {
        $teacher = Teacher::where('userid', '=', auth()->user()->id)->first();
        if (auth()->user()->user_type == 3) {
            $struc_sections = DB::table('structure_sections')
                ->join('department_sections', 'structure_sections.department_sectionid', '=', 'department_sections.id')
                ->join('subjects', 'structure_sections.subjectid', '=', 'subjects.id')
                ->where('structure_sections.status', '=', 'A')
                ->where('department_sections.id', '=', $teacher->nmention)
                ->select(
                    'department_sections.description as department_section',
                    'subjects.name as subject',
                    'structure_sections.*'
                )
                ->simplePaginate(10);
        } else {
            $struc_sections = DB::table('structure_sections')
                ->join('department_sections', 'structure_sections.department_sectionid', '=', 'department_sections.id')
                ->join('departments','department_sections.departmentid','=','departments.id')
                ->join('subjects', 'structure_sections.subjectid', '=', 'subjects.id')
                ->where('structure_sections.status', '=', 'A')
                ->where('departments.id','=',$this->department->id)
                ->select(
                    'department_sections.description as department_section',
                    'subjects.name as subject',
                    'structure_sections.*'
                )
                ->orderByDesc('structure_sections.updated_at')
                ->simplePaginate(10);
        }

        return view('livewire.struc-section.index', [
            'struc_sections' => $struc_sections
        ]);
    }
}

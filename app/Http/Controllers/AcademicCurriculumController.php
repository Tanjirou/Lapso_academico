<?php

namespace App\Http\Controllers;

use App\Models\academic_curriculum;
use Illuminate\Http\Request;

class AcademicCurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('academic_curriculum.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\academic_curriculum  $academic_curriculum
     * @return \Illuminate\Http\Response
     */
    public function show(academic_curriculum $academic_curriculum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\academic_curriculum  $academic_curriculum
     * @return \Illuminate\Http\Response
     */
    public function edit(academic_curriculum $academic_curriculum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\academic_curriculum  $academic_curriculum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, academic_curriculum $academic_curriculum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\academic_curriculum  $academic_curriculum
     * @return \Illuminate\Http\Response
     */
    public function destroy(academic_curriculum $academic_curriculum)
    {
        //
    }
}

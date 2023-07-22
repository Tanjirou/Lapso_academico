<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('users')->select('id','user_type','dni','password','names','last_names',
        'email','email_verified_at','remember_token','current_team_id','profile_photo_path',
        'photo','telephone','status','created_at','updated_at','two_factor_secret',
        'two_factor_recovery_codes')->get();
    }
    public function headings(): array
    {
        return [
            'ID',
            'Tipo de usuario',
            'Cedula',
            'Contraseña',
            'Nombres',
            'Apellidos',
            'Correo electrónico',
            'Verificación de correo',
            'Token',
            'ID Grupo',
            'Foto path',
            'Foto',
            'Teléfono',
            'Estatus',
            'Creado en',
            'Actualizado en',
            'Dos factores',
            'Recuperacion dos factores'
        ];
    }
}

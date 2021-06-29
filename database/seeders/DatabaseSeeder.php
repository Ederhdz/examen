<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empleado;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $empleado = new Empleado
        $empleado = new Empleado();
        $empleado->name = 'Maria';
        $empleado->apellidos = 'Resendiz';
        $empleado->email = 'mari@hotmail.com';
        $empleado->salarioDia = '900';
        $empleado->puesto = 'recepcionista de dirección';
        $empleado->estatus = 1;
        $empleado->save();

        $empleado = new Empleado();
        $empleado->name = 'Laura';
        $empleado->apellidos = 'Rodrigez Jimenez';
        $empleado->email = 'lrodriguez@hotmail.com';
        $empleado->salarioDia = '1040';
        $empleado->puesto = 'diseñadora';
        $empleado->estatus = 1;

        $empleado->save();

        $empleado = new Empleado();
        $empleado->name = 'Pablo';
        $empleado->apellidos = 'Hernández';
        $empleado->email = 'pablo@gmail.com';
        $empleado->salarioDia = '400';
        $empleado->puesto = 'desarrollador front end';
        $empleado->estatus = 1;

        $empleado->save();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Competencia;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UsersCompetenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users_competencias')->truncate();

        // Obtener todos los usuarios
        $users = User::all();

        // Iterar sobre cada usuario
        foreach ($users as $user) {

            // Seleccionar de 0 a 2 competencias de manera aleatoria
            $competenciasAleatorias = Competencia::inRandomOrder()
                ->limit(rand(0, 2))
                ->get();

            $datosRelacion = [];

            foreach ($competenciasAleatorias as $competencia) {
                // Generar el valor aleatorio para el campo adicional
                $docenteValidador = rand(1, 10);

                // Meter en el array los datos competencia por competencia
                $datosRelacion[$competencia->id] = [
                    'docente_validador' => $docenteValidador,
                ];
            }

            // Asignar las competencias al usuario en la tabla intermedia
            $user->competencias()->attach($datosRelacion);
        }
    }
}

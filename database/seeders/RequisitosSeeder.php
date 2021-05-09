<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RequisitosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('requisitosos')->insert([
            [
                'id'=>'1',
                'Concepto'=>'OBJETIVO',
                'Descripcion'=>'QUE HACE TU TESIS 93',
                'Opciones_id'=>'4',
                'created_at'=>null,
                'updated_at'=>null,
            ],
            [
                'id'=>'2',
                'Concepto'=>'INDICE',
                'Descripcion'=>'DE QUE TRATARA 93',
                'Opciones_id'=>'4',
                'created_at'=>null,
                'updated_at'=>null,
            ],
            [
                'id'=>'3',
                'Concepto'=>'BIBLIOGRAFIA',
                'Descripcion'=>'QUE CONSULTARAS 93....',
                'Opciones_id'=>'4',
                'created_at'=>null,
                'updated_at'=>null,
            ],
            [
                'id'=>'8',
                'Concepto'=>'OBJETIVO',
                'Descripcion'=>'XXX',
                'Opciones_id'=>'5',
                'created_at'=>null,
                'updated_at'=>null,
            ],
            [
                'id'=>'9',
                'Concepto'=>'OBJETIVO',
                'Descripcion'=>'QUE HACE TU PROYECTO DE INVESTIGACION',
                'Opciones_id'=>'6',
                'created_at'=>null,
                'updated_at'=>null,
            ],
            [
                'id'=>'10',
                'Concepto'=>'INDICE',
                'Descripcion'=>'INDICE DE QUE TRATA TU PROYECTO DE INVESTIGACION',
                'Opciones_id'=>'6',
                'created_at'=>null,
                'updated_at'=>null,
            ],
            [
                'id'=>'11',
                'Concepto'=>'BIBLIOGRAFIA',
                'Descripcion'=>'QUE CONSULTASTE PARA TU PROYECTO DE INVETIGACION',
                'Opciones_id'=>'6',
                'created_at'=>null,
                'updated_at'=>null,
            ],
            [
                'id'=>'12',
                'Concepto'=>'BIBLIOGRAFIA',
                'Descripcion'=>'obj de la tesis del 2004',
                'Opciones_id'=>'7',
                'created_at'=>null,
                'updated_at'=>null,
            ],
            [
                'id'=>'13',
                'Concepto'=>'INDICE',
                'Descripcion'=>'ind de la tesis 2004',
                'Opciones_id'=>'7',
                'created_at'=>null,
                'updated_at'=>null,
            ],
            
            ]);
    }
}

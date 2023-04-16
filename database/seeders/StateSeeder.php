<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        State::create([
            'key'=>'01', 
            'name'=>'Aguascalientes', 
            'abrev'=>'Ags.', 
            'active'=>1,
        ]);
        State::create([
            'key'=>'02', 
            'name'=>'Baja California',
            'abrev'=>'BC',
            'active'=>1
        ]);

        State::create([
            'key'=>'03', 
            'name'=>'Baja California Sur',
            'abrev'=>'BCS', 
            'active'=>1
        ]);

 
        State::create([
            'key'=>'04', 
            'name'=>'Campeche', 
            'abrev'=>'Camp.', 
            'active'=>1
        ]);

        State::create([
            'key'=>'05', 
            'name'=>'Coahuila de Zaragoza',
            'abrev'=>'Coah.', 
            'active'=>1

        ]);
        State::create([
            'key'=>'06', 
            'name'=>'Colima', 
            'abrev'=>'Col.', 
            'active'=>1
        ]);

        State::create([
            'key'=>'07',
            'name'=>'Chiapas', 
            'abrev'=>'Chis.', 
            'active'=>1
        ]);

        State::create([
            'key'=>'08', 
            'name'=>'Chihuahua', 
            'abrev'=>'Chih', 
            'active'=>1
        ]);

        State::create([
            'key'=>'09', 
            'name'=>'Ciudad de México', 
            'abrev'=>'CDMX', 
            'active'=>1
        ]);

        State::create([
            'key'=>'10', 
            'name'=>'Durango', 
            'abrev'=>'Dgo.', 
            'active'=>1
        ]);

        State::create([
            'key'=>'11', 
            'name'=>'Guanajuato', 
            'abrev'=>'Gto.', 
            'active'=>1
        ]);
        State::create([
            'key'=>'12', 
            'name'=>'Guerrero', 
            'abrev'=>'Gro.', 
            'active'=>1
        ]);
        State::create([
            'key'=>'13', 
            'name'=>'Hidalgo', 
            'abrev'=>'Hgo.', 
            'active'=>1
        ]);
        State::create([
            'key'=>'14', 
            'name'=>'Jalisco', 
            'abrev'=>'Jal.', 
            'active'=>1
        ]);
        State::create([
            'key'=>'15', 
            'name'=>'México', 
            'abrev'=>'Mex.', 
            'active'=>1
        ]);
        State::create([
            'key'=>'16', 
            'name'=>'Michoacán de Ocampo', 
            'abrev'=>'Mich.', 
            'active'=>1
        ]);
        State::create([
            'key'=>'17', 
            'name'=>'Morelos', 
            'abrev'=>'Mor.', 
            'active'=>1
        ]);
        State::create([
            'key'=>'18', 
            'name'=>'Nayarit', 
            'abrev'=>'Nay.', 
            'active'=>1
        ]);
        State::create([
            'key'=>'19', 
            'name'=>'Nuevo León',
            'abrev'=>'NL',
            'active'=>1
        ]);
        State::create([
            'key'=>'20', 
            'name'=>'Oaxaca', 
            'abrev'=>'Oax.', 
            'active'=>1
        ]);
        State::create([
            'key'=>'21', 
            'name'=>'Puebla', 
            'abrev'=>'Pue.', 
            'active'=>1
        ]);
        State::create([
            'key'=>'22', 
            'name'=>'Querétaro', 
            'abrev'=>'Qro.', 
            'active'=>1
        ]);
        State::create([
            'key'=>'23', 
            'name'=>'Quintana Roo',
            'abrev' =>'Q. Roo',
            'active'=> 1
        ]);
        State::create([
            'key'=>'24', 
            'name'=>'San Luis Potosí',
            'abrev' =>'SLP', 
            'active'=>1
        ]);
        State::create([
            'key'=>'25', 
            'name'=>'Sinaloa', 
            'abrev'=>'Sin.', 
            'active'=>1
        ]);
        State::create([
            'key'=>'26', 
            'name'=>'Sonora', 
            'abrev'=>'Son.', 
            'active'=>1
        ]);
        State::create([
            'key'=>'27', 
            'name'=>'Tabasco', 
            'abrev'=>'Tab.', 
            'active'=>1
        ]);
        State::create([
            'key'=>'28', 
            'name'=>'Tamaulipas', 
            'abrev'=>'Tamps.', 
            'active'=>1
        ]);
        State::create([
            'key'=>'29', 
            'name'=>'Tlaxcala', 
            'abrev'=>'Tlax.', 
            'active'=>1
        ]);
        State::create([
            'key'=>'30', 
            'name'=>'Veracruz de Ignacio de la Llave',
            'abrev'=>'Ver.',
            'active'=>1
        ]);
        State::create([
            'key'=>'31', 
            'name'=>'Yucatán', 
            'abrev'=>'Yuc.', 
            'active'=>1
        ]);
        State::create([
            'key'=>'32', 
            'name'=>'Zacatecas', 
            'abrev'=>'Zac.', 
            'active'=>1
        ]);
    }
}

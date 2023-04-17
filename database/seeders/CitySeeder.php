<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //INSERT INTO `municipios` (`id`, `estado_id`, `clave`, `nombre`, `activo`) VALUES
        City::create([
            'state_id' => 1,
            'key' => '001',
            'name' => 'Aguascalientes',
            'active' => 1
        ]);
        City::create([
            'state_id'=>1, 
            'key'=>'002', 
            'name'=>'Asientos', 
            'active'=>1
        ]);
        City::create([
            'state_id'=>1, 
            'key'=>'003', 
            'name'=>'Calvillo', 
            'active'=>1
        ]);
        City::create([
            'state_id'=>1, 
            'key'=>'004', 
            'name'=>'Cosío', 
            'active'=>1
        ]);
        City::create([

            'state_id'=>1, 
            'key'=>'005', 
            'name'=>'Jesús María', 
            'active'=>1
        ]);
        City::create([
            'state_id'=>1, 
            'key'=>'006', 
            'name'=>'Pabellón de Arteaga',
            'active'=>1
        ]);
        City::create([
            'state_id'=>1, 
            'key'=>'007', 
            'name'=>'Rincón de Romos',
            'active'=>1
        ]);
        
        City::create([

            'state_id'=>1, 
            'key'=>'008', 
            'name'=>'San José de Gracia', 
            'active'=>1
        ]);
        City::create([
            'state_id'=>1, 
            'key'=>'009', 
            'name'=>'Tepezalá', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>1, 
            'key'=>'010', 
            'name'=>'El Llano',
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>1, 
            'key'=>'011', 
            'name'=>'San Francisco de los Romo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>2, 
            'key'=>'001', 
            'name'=>'Ensenada', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>2, 
            'key'=>'002', 
            'name'=>'Mexicali', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>2, 
            'key'=>'003', 
            'name'=>'Tecate', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>2, 
            'key'=>'004', 
            'name'=>'Tijuana', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>2, 
            'key'=>'005', 
            'name'=>'Playas de Rosarito', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>3, 
            'key'=>'001', 
            'name'=>'Comondú', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>3, 
            'key'=>'002', 
            'name'=>'Mulegé', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>3, 
            'key'=>'003', 
            'name'=>'La Paz', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>3, 
            'key'=>'008', 
            'name'=>'Los Cabos', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>3, 
            'key'=>'009', 
            'name'=>'Loreto', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>4, 
            'key'=>'001', 
            'name'=>'Calkiní', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>4, 
            'key'=>'002', 
            'name'=>'Campeche', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>4, 
            'key'=>'003', 
            'name'=>'Carmen', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>4, 
            'key'=>'004', 
            'name'=>'Champotón', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>4, 
            'key'=>'005', 
            'name'=>'Hecelchakán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>4, 
            'key'=>'006', 
            'name'=>'Hopelchén', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>4, 
            'key'=>'007', 
            'name'=>'Palizada', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>4, 
            'key'=>'008', 
            'name'=>'Tenabo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>4, 
            'key'=>'009', 
            'name'=>'Escárcega', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>4, 
            'key'=>'010', 
            'name'=>'Calakmul', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>4, 
            'key'=>'011', 
            'name'=>'Candelaria', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'001', 
            'name'=>'Abasolo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'002', 
            'name'=>'Acuña', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'003', 
            'name'=>'Allende', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'004', 
            'name'=>'Arteaga', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'005', 
            'name'=>'Candela', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'006', 
            'name'=>'Castaños', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'007', 
            'name'=>'Cuatro Ciénegas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'008', 
            'name'=>'Escobedo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'009', 
            'name'=>'Francisco I. Madero', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'010', 
            'name'=>'Frontera', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'011', 
            'name'=>'General Cepeda', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'012', 
            'name'=>'Guerrero', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'013', 
            'name'=>'Hidalgo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'014', 
            'name'=>'Jiménez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'015', 
            'name'=>'Juárez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'016', 
            'name'=>'Lamadrid', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'017', 
            'name'=>'Matamoros', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'018', 
            'name'=>'Monclova', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'019', 
            'name'=>'Morelos', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'020', 
            'name'=>'Múzquiz', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'021', 
            'name'=>'Nadadores', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'022', 
            'name'=>'Nava', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'023', 
            'name'=>'Ocampo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'024', 
            'name'=>'Parras', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'025', 
            'name'=>'Piedras Negras', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'026', 
            'name'=>'Progreso', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'027', 
            'name'=>'Ramos Arizpe', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'028', 
            'name'=>'Sabinas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'029', 
            'name'=>'Sacramento', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'030', 
            'name'=>'Saltillo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'031', 
            'name'=>'San Buenaventura', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'032', 
            'name'=>'San Juan de Sabinas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'033', 
            'name'=>'San Pedro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'034', 
            'name'=>'Sierra Mojada', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'035', 
            'name'=>'Torreón', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'036', 
            'name'=>'Viesca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'037', 
            'name'=>'Villa Unión', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>5, 
            'key'=>'038', 
            'name'=>'Zaragoza', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>6, 
            'key'=>'001', 
            'name'=>'Armería', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>6, 
            'key'=>'002', 
            'name'=>'Colima', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>6, 
            'key'=>'003', 
            'name'=>'Comala', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>6, 
            'key'=>'004', 
            'name'=>'Coquimatlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>6, 
            'key'=>'005', 
            'name'=>'Cuauhtémoc', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>6, 
            'key'=>'006', 
            'name'=>'Ixtlahuacán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>6, 
            'key'=>'007', 
            'name'=>'Manzanillo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>6, 
            'key'=>'008', 
            'name'=>'Minatitlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>6, 
            'key'=>'009', 
            'name'=>'Tecomán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>6, 
            'key'=>'010', 
            'name'=>'Villa de Álvarez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'001', 
            'name'=>'Acacoyagua', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'002', 
            'name'=>'Acala', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'003', 
            'name'=>'Acapetahua', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'004', 
            'name'=>'Altamirano', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'005', 
            'name'=>'Amatán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'006', 
            'name'=>'Amatenango de la Frontera', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'007', 
            'name'=>'Amatenango del Valle', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'008', 
            'name'=>'Angel Albino Corzo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'009', 
            'name'=>'Arriaga', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'010', 
            'name'=>'Bejucal de Ocampo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'011', 
            'name'=>'Bella Vista', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'012', 
            'name'=>'Berriozábal', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'013', 
            'name'=>'Bochil', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'014', 
            'name'=>'El Bosque', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'015', 
            'name'=>'Cacahoatán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'016', 
            'name'=>'Catazajá', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'017', 
            'name'=>'Cintalapa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'018', 
            'name'=>'Coapilla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'019', 
            'name'=>'Comitán de Domínguez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'020', 
            'name'=>'La Concordia', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'021', 
            'name'=>'Copainalá', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'022', 
            'name'=>'Chalchihuitán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'023', 
            'name'=>'Chamula', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'024', 
            'name'=>'Chanal', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'025', 
            'name'=>'Chapultenango', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'026', 
            'name'=>'Chenalhó', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'027', 
            'name'=>'Chiapa de Corzo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'028', 
            'name'=>'Chiapilla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'029', 
            'name'=>'Chicoasén', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'030', 
            'name'=>'Chicomuselo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'031', 
            'name'=>'Chilón', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'032', 
            'name'=>'Escuintla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'033', 
            'name'=>'Francisco León', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'034', 
            'name'=>'Frontera Comalapa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'035', 
            'name'=>'Frontera Hidalgo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'036', 
            'name'=>'La Grandeza', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'037', 
            'name'=>'Huehuetán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'038', 
            'name'=>'Huixtán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'039', 
            'name'=>'Huitiupán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'040', 
            'name'=>'Huixtla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'041', 
            'name'=>'La Independencia', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'042', 
            'name'=>'Ixhuatán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'043', 
            'name'=>'Ixtacomitán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'044', 
            'name'=>'Ixtapa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'045', 
            'name'=>'Ixtapangajoya', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'046', 
            'name'=>'Jiquipilas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'047', 
            'name'=>'Jitotol', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'048', 
            'name'=>'Juárez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'049', 
            'name'=>'Larráinzar', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'050', 
            'name'=>'La Libertad', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'051', 
            'name'=>'Mapastepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'052', 
            'name'=>'Las Margaritas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'053', 
            'name'=>'Mazapa de Madero', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'054', 
            'name'=>'Mazatán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'055', 
            'name'=>'Metapa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'056', 
            'name'=>'Mitontic', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'057', 
            'name'=>'Motozintla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'058', 
            'name'=>'Nicolás Ruíz', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'059', 
            'name'=>'Ocosingo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'060', 
            'name'=>'Ocotepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'061', 
            'name'=>'Ocozocoautla de Espinosa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'062', 
            'name'=>'Ostuacán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'063', 
            'name'=>'Osumacinta', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'064', 
            'name'=>'Oxchuc', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'065', 
            'name'=>'Palenque', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'066', 
            'name'=>'Pantelhó', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'067', 
            'name'=>'Pantepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'068', 
            'name'=>'Pichucalco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'069', 
            'name'=>'Pijijiapan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'070', 
            'name'=>'El Porvenir', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'071', 
            'name'=>'Villa Comaltitlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'072', 
            'name'=>'Pueblo Nuevo Solistahuacán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'073', 
            'name'=>'Rayón', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'074', 
            'name'=>'Reforma', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'075', 
            'name'=>'Las Rosas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'076', 
            'name'=>'Sabanilla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'077', 
            'name'=>'Salto de Agua', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'078', 
            'name'=>'San Cristóbal de las Casas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'079', 
            'name'=>'San Fernando', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'080', 
            'name'=>'Siltepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'081', 
            'name'=>'Simojovel', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'082', 
            'name'=>'Sitalá', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'083', 
            'name'=>'Socoltenango', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'084', 
            'name'=>'Solosuchiapa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'085', 
            'name'=>'Soyaló', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'086', 
            'name'=>'Suchiapa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'087', 
            'name'=>'Suchiate', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'088', 
            'name'=>'Sunuapa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'089', 
            'name'=>'Tapachula', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'090', 
            'name'=>'Tapalapa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'091', 
            'name'=>'Tapilula', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'092', 
            'name'=>'Tecpatán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'093', 
            'name'=>'Tenejapa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'094', 
            'name'=>'Teopisca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'096', 
            'name'=>'Tila', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'097', 
            'name'=>'Tonalá', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'098', 
            'name'=>'Totolapa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'099', 
            'name'=>'La Trinitaria', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'100', 
            'name'=>'Tumbalá', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'101', 
            'name'=>'Tuxtla Gutiérrez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'102', 
            'name'=>'Tuxtla Chico', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'103', 
            'name'=>'Tuzantán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'104', 
            'name'=>'Tzimol', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'105', 
            'name'=>'Unión Juárez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'106', 
            'name'=>'Venustiano Carranza', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'107', 
            'name'=>'Villa Corzo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'108', 
            'name'=>'Villaflores', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'109', 
            'name'=>'Yajalón', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'110', 
            'name'=>'San Lucas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'111', 
            'name'=>'Zinacantán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'112', 
            'name'=>'San Juan Cancuc', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'113', 
            'name'=>'Aldama', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'114', 
            'name'=>'Benemérito de las Américas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'115', 
            'name'=>'Maravilla Tenejapa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'116', 
            'name'=>'Marqués de Comillas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'117', 
            'name'=>'Montecristo de Guerrero', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'118', 
            'name'=>'San Andrés Duraznal', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'119', 
            'name'=>'Santiago el Pinar', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'120', 
            'name'=>'Capitán Luis Ángel Vidal', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'121', 
            'name'=>'Rincón Chamula San Pedro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'122', 
            'name'=>'El Parral', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'123', 
            'name'=>'Emiliano Zapata', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>7, 
            'key'=>'124', 
            'name'=>'Mezcalapa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'001', 
            'name'=>'Ahumada', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'002', 
            'name'=>'Aldama', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'003', 
            'name'=>'Allende', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'004', 
            'name'=>'Aquiles Serdán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'005', 
            'name'=>'Ascensión', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'006', 
            'name'=>'Bachíniva', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'007', 
            'name'=>'Balleza', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'008', 
            'name'=>'Batopilas de Manuel Gómez Morín', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'009', 
            'name'=>'Bocoyna', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'010', 
            'name'=>'Buenaventura', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'011', 
            'name'=>'Camargo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'012', 
            'name'=>'Carichí', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'013', 
            'name'=>'Casas Grandes', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'014', 
            'name'=>'Coronado', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'015', 
            'name'=>'Coyame del Sotol', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'016', 
            'name'=>'La Cruz', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'017', 
            'name'=>'Cuauhtémoc', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'018', 
            'name'=>'Cusihuiriachi', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'019', 
            'name'=>'Chihuahua', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'020', 
            'name'=>'Chínipas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'021', 
            'name'=>'Delicias', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'022', 
            'name'=>'Dr. Belisario Domínguez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'023', 
            'name'=>'Galeana', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'024', 
            'name'=>'Santa Isabel', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'025', 
            'name'=>'Gómez Farías', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'026', 
            'name'=>'Gran Morelos', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'027', 
            'name'=>'Guachochi', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'028', 
            'name'=>'Guadalupe', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'029', 
            'name'=>'Guadalupe y Calvo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'030', 
            'name'=>'Guazapares', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'031', 
            'name'=>'Guerrero', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'032', 
            'name'=>'Hidalgo del Parral', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'033', 
            'name'=>'Huejotitán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'034', 
            'name'=>'Ignacio Zaragoza', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'035', 
            'name'=>'Janos', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'036', 
            'name'=>'Jiménez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'037', 
            'name'=>'Juárez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'038', 
            'name'=>'Julimes', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'039', 
            'name'=>'López', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'040', 
            'name'=>'Madera', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'041', 
            'name'=>'Maguarichi', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'042', 
            'name'=>'Manuel Benavides', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'043', 
            'name'=>'Matachí', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'044', 
            'name'=>'Matamoros', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'045', 
            'name'=>'Meoqui', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'046', 
            'name'=>'Morelos', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'047', 
            'name'=>'Moris', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'048', 
            'name'=>'Namiquipa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'049', 
            'name'=>'Nonoava', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'050', 
            'name'=>'Nuevo Casas Grandes', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'051', 
            'name'=>'Ocampo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'052', 
            'name'=>'Ojinaga', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'053', 
            'name'=>'Praxedis G. Guerrero', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'054', 
            'name'=>'Riva Palacio', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'055', 
            'name'=>'Rosales', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'056', 
            'name'=>'Rosario', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'057', 
            'name'=>'San Francisco de Borja', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'058', 
            'name'=>'San Francisco de Conchos', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'059', 
            'name'=>'San Francisco del Oro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'060', 
            'name'=>'Santa Bárbara', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'061', 
            'name'=>'Satevó', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'062', 
            'name'=>'Saucillo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'063', 
            'name'=>'Temósachic', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'064', 
            'name'=>'El Tule', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'065', 
            'name'=>'Urique', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'066', 
            'name'=>'Uruachi', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>8, 
            'key'=>'067', 
            'name'=>'Valle de Zaragoza', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>9, 
            'key'=>'002', 
            'name'=>'Azcapotzalco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>9, 
            'key'=>'003', 
            'name'=>'Coyoacán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>9, 
            'key'=>'004', 
            'name'=>'Cuajimalpa de Morelos', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>9, 
            'key'=>'005', 
            'name'=>'Gustavo A. Madero', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>9, 
            'key'=>'006', 
            'name'=>'Iztacalco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>9, 
            'key'=>'007', 
            'name'=>'Iztapalapa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>9, 
            'key'=>'008', 
            'name'=>'La Magdalena Contreras', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>9, 
            'key'=>'009', 
            'name'=>'Milpa Alta', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>9, 
            'key'=>'010', 
            'name'=>'Álvaro Obregón', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>9, 
            'key'=>'011', 
            'name'=>'Tláhuac', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>9, 
            'key'=>'012', 
            'name'=>'Tlalpan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>9, 
            'key'=>'013', 
            'name'=>'Xochimilco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>9, 
            'key'=>'014', 
            'name'=>'Benito Juárez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>9, 
            'key'=>'015', 
            'name'=>'Cuauhtémoc', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>9, 
            'key'=>'016', 
            'name'=>'Miguel Hidalgo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>9, 
            'key'=>'017', 
            'name'=>'Venustiano Carranza', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'001', 
            'name'=>'Canatlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'002', 
            'name'=>'Canelas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'003', 
            'name'=>'Coneto de Comonfort', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'004', 
            'name'=>'Cuencamé', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'005', 
            'name'=>'Durango', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'006', 
            'name'=>'General Simón Bolívar', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'007', 
            'name'=>'Gómez Palacio', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'008', 
            'name'=>'Guadalupe Victoria', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'009', 
            'name'=>'Guanaceví', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'010', 
            'name'=>'Hidalgo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'011', 
            'name'=>'Indé', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'012', 
            'name'=>'Lerdo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'013', 
            'name'=>'Mapimí', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'014', 
            'name'=>'Mezquital', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'015', 
            'name'=>'Nazas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'016', 
            'name'=>'Nombre de Dios', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'017', 
            'name'=>'Ocampo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'018', 
            'name'=>'El Oro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'019', 
            'name'=>'Otáez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'020', 
            'name'=>'Pánuco de Coronado', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'021', 
            'name'=>'Peñón Blanco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'022', 
            'name'=>'Poanas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'023', 
            'name'=>'Pueblo Nuevo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'024', 
            'name'=>'Rodeo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'025', 
            'name'=>'San Bernardo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'026', 
            'name'=>'San Dimas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'027', 
            'name'=>'San Juan de Guadalupe', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'028', 
            'name'=>'San Juan del Río', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'029', 
            'name'=>'San Luis del Cordero', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'030', 
            'name'=>'San Pedro del Gallo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'031', 
            'name'=>'Santa Clara', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'032', 
            'name'=>'Santiago Papasquiaro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'033', 
            'name'=>'Súchil', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'034', 
            'name'=>'Tamazula', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'035', 
            'name'=>'Tepehuanes', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'036', 
            'name'=>'Tlahualilo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'037', 
            'name'=>'Topia', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'038', 
            'name'=>'Vicente Guerrero', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>10, 
            'key'=>'039', 
            'name'=>'Nuevo Ideal', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'001', 
            'name'=>'Abasolo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'002', 
            'name'=>'Acámbaro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'003', 
            'name'=>'San Miguel de Allende', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'004', 
            'name'=>'Apaseo el Alto', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'005', 
            'name'=>'Apaseo el Grande', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'006', 
            'name'=>'Atarjea', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'007', 
            'name'=>'Celaya', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'008', 
            'name'=>'Manuel Doblado', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'009', 
            'name'=>'Comonfort', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'010', 
            'name'=>'Coroneo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'011', 
            'name'=>'Cortazar', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'012', 
            'name'=>'Cuerámaro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'013', 
            'name'=>'Doctor Mora', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'014', 
            'name'=>'Dolores Hidalgo Cuna de la Independencia Nacional', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'015', 
            'name'=>'Guanajuato', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'016', 
            'name'=>'Huanímaro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'017', 
            'name'=>'Irapuato', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'018', 
            'name'=>'Jaral del Progreso', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'019', 
            'name'=>'Jerécuaro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'020', 
            'name'=>'León', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'021', 
            'name'=>'Moroleón', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'022', 
            'name'=>'Ocampo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'023', 
            'name'=>'Pénjamo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'024', 
            'name'=>'Pueblo Nuevo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'025', 
            'name'=>'Purísima del Rincón', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'026', 
            'name'=>'Romita', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'027', 
            'name'=>'Salamanca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'028', 
            'name'=>'Salvatierra', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'029', 
            'name'=>'San Diego de la Unión', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'030', 
            'name'=>'San Felipe', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'031', 
            'name'=>'San Francisco del Rincón', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'032', 
            'name'=>'San José Iturbide', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'033', 
            'name'=>'San Luis de la Paz', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'034', 
            'name'=>'Santa Catarina', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'035', 
            'name'=>'Santa Cruz de Juventino Rosas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'036', 
            'name'=>'Santiago Maravatío', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'037', 
            'name'=>'Silao de la Victoria', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'038', 
            'name'=>'Tarandacuao', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'039', 
            'name'=>'Tarimoro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'040', 
            'name'=>'Tierra Blanca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'041', 
            'name'=>'Uriangato', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'042', 
            'name'=>'Valle de Santiago', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'043', 
            'name'=>'Victoria', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'044', 
            'name'=>'Villagrán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'045', 
            'name'=>'Xichú', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>11, 
            'key'=>'046', 
            'name'=>'Yuriria', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'001', 
            'name'=>'Acapulco de Juárez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'002', 
            'name'=>'Ahuacuotzingo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'003', 
            'name'=>'Ajuchitlán del Progreso', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'004', 
            'name'=>'Alcozauca de Guerrero', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'005', 
            'name'=>'Alpoyeca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'006', 
            'name'=>'Apaxtla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'007', 
            'name'=>'Arcelia', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'008', 
            'name'=>'Atenango del Río', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'009', 
            'name'=>'Atlamajalcingo del Monte', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'010', 
            'name'=>'Atlixtac', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'011', 
            'name'=>'Atoyac de Álvarez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'012', 
            'name'=>'Ayutla de los Libres', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'013', 
            'name'=>'Azoyú', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'014', 
            'name'=>'Benito Juárez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'015', 
            'name'=>'Buenavista de Cuéllar', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'016', 
            'name'=>'Coahuayutla de José María Izazaga', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'017', 
            'name'=>'Cocula', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'018', 
            'name'=>'Copala', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'019', 
            'name'=>'Copalillo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'020', 
            'name'=>'Copanatoyac', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'021', 
            'name'=>'Coyuca de Benítez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'022', 
            'name'=>'Coyuca de Catalán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'023', 
            'name'=>'Cuajinicuilapa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'024', 
            'name'=>'Cualác', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'025', 
            'name'=>'Cuautepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'026', 
            'name'=>'Cuetzala del Progreso', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'027', 
            'name'=>'Cutzamala de Pinzón', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'028', 
            'name'=>'Chilapa de Álvarez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'029', 
            'name'=>'Chilpancingo de los Bravo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'030', 
            'name'=>'Florencio Villarreal', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'031', 
            'name'=>'General Canuto A. Neri', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'032', 
            'name'=>'General Heliodoro Castillo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'033', 
            'name'=>'Huamuxtitlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'034', 
            'name'=>'Huitzuco de los Figueroa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'035', 
            'name'=>'Iguala de la Independencia', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'036', 
            'name'=>'Igualapa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'037', 
            'name'=>'Ixcateopan de Cuauhtémoc', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'038', 
            'name'=>'Zihuatanejo de Azueta', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'039', 
            'name'=>'Juan R. Escudero', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'040', 
            'name'=>'Leonardo Bravo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'041', 
            'name'=>'Malinaltepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'042', 
            'name'=>'Mártir de Cuilapan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'043', 
            'name'=>'Metlatónoc', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'044', 
            'name'=>'Mochitlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'045', 
            'name'=>'Olinalá', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'046', 
            'name'=>'Ometepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'047', 
            'name'=>'Pedro Ascencio Alquisiras', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'048', 
            'name'=>'Petatlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'049', 
            'name'=>'Pilcaya', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'050', 
            'name'=>'Pungarabato', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'051', 
            'name'=>'Quechultenango', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'052', 
            'name'=>'San Luis Acatlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'053', 
            'name'=>'San Marcos', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'054', 
            'name'=>'San Miguel Totolapan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'055', 
            'name'=>'Taxco de Alarcón', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'056', 
            'name'=>'Tecoanapa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'057', 
            'name'=>'Técpan de Galeana', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'058', 
            'name'=>'Teloloapan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'059', 
            'name'=>'Tepecoacuilco de Trujano', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'060', 
            'name'=>'Tetipac', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'061', 
            'name'=>'Tixtla de Guerrero', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'062', 
            'name'=>'Tlacoachistlahuaca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'063', 
            'name'=>'Tlacoapa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'064', 
            'name'=>'Tlalchapa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'065', 
            'name'=>'Tlalixtaquilla de Maldonado', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'066', 
            'name'=>'Tlapa de Comonfort', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'067', 
            'name'=>'Tlapehuala', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'068', 
            'name'=>'La Unión de Isidoro Montes de Oca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'069', 
            'name'=>'Xalpatláhuac', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'070', 
            'name'=>'Xochihuehuetlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'071', 
            'name'=>'Xochistlahuaca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'072', 
            'name'=>'Zapotitlán Tablas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'073', 
            'name'=>'Zirándaro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'074', 
            'name'=>'Zitlala', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'075', 
            'name'=>'Eduardo Neri', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'076', 
            'name'=>'Acatepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'077', 
            'name'=>'Marquelia', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'078', 
            'name'=>'Cochoapa el Grande', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'079', 
            'name'=>'José Joaquín de Herrera', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'080', 
            'name'=>'Juchitán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>12, 
            'key'=>'081', 
            'name'=>'Iliatenco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'001', 
            'name'=>'Acatlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'002', 
            'name'=>'Acaxochitlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'003', 
            'name'=>'Actopan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'004', 
            'name'=>'Agua Blanca de Iturbide', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'005', 
            'name'=>'Ajacuba', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'006', 
            'name'=>'Alfajayucan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'007', 
            'name'=>'Almoloya', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'008', 
            'name'=>'Apan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'009', 
            'name'=>'El Arenal', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'010', 
            'name'=>'Atitalaquia', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'011', 
            'name'=>'Atlapexco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'012', 
            'name'=>'Atotonilco el Grande', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'013', 
            'name'=>'Atotonilco de Tula', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'014', 
            'name'=>'Calnali', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'015', 
            'name'=>'Cardonal', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'016', 
            'name'=>'Cuautepec de Hinojosa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'017', 
            'name'=>'Chapantongo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'018', 
            'name'=>'Chapulhuacán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'019', 
            'name'=>'Chilcuautla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'020', 
            'name'=>'Eloxochitlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'021', 
            'name'=>'Emiliano Zapata', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'022', 
            'name'=>'Epazoyucan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'023', 
            'name'=>'Francisco I. Madero', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'024', 
            'name'=>'Huasca de Ocampo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'025', 
            'name'=>'Huautla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'026', 
            'name'=>'Huazalingo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'027', 
            'name'=>'Huehuetla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'028', 
            'name'=>'Huejutla de Reyes', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'029', 
            'name'=>'Huichapan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'030', 
            'name'=>'Ixmiquilpan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'031', 
            'name'=>'Jacala de Ledezma', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'032', 
            'name'=>'Jaltocán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'033', 
            'name'=>'Juárez Hidalgo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'034', 
            'name'=>'Lolotla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'035', 
            'name'=>'Metepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'036', 
            'name'=>'San Agustín Metzquititlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'037', 
            'name'=>'Metztitlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'038', 
            'name'=>'Mineral del Chico', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'039', 
            'name'=>'Mineral del Monte', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'040', 
            'name'=>'La Misión', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'041', 
            'name'=>'Mixquiahuala de Juárez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'042', 
            'name'=>'Molango de Escamilla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'043', 
            'name'=>'Nicolás Flores', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'044', 
            'name'=>'Nopala de Villagrán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'045', 
            'name'=>'Omitlán de Juárez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'046', 
            'name'=>'San Felipe Orizatlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'047', 
            'name'=>'Pacula', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'048', 
            'name'=>'Pachuca de Soto', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'049', 
            'name'=>'Pisaflores', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'050', 
            'name'=>'Progreso de Obregón', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'051', 
            'name'=>'Mineral de la Reforma', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'052', 
            'name'=>'San Agustín Tlaxiaca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'053', 
            'name'=>'San Bartolo Tutotepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'054', 
            'name'=>'San Salvador', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'055', 
            'name'=>'Santiago de Anaya', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'056', 
            'name'=>'Santiago Tulantepec de Lugo Guerrero', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'057', 
            'name'=>'Singuilucan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'058', 
            'name'=>'Tasquillo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'059', 
            'name'=>'Tecozautla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'060', 
            'name'=>'Tenango de Doria', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'061', 
            'name'=>'Tepeapulco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'062', 
            'name'=>'Tepehuacán de Guerrero', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'063', 
            'name'=>'Tepeji del Río de Ocampo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'064', 
            'name'=>'Tepetitlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'065', 
            'name'=>'Tetepango', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'066', 
            'name'=>'Villa de Tezontepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'067', 
            'name'=>'Tezontepec de Aldama', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'068', 
            'name'=>'Tianguistengo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'069', 
            'name'=>'Tizayuca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'070', 
            'name'=>'Tlahuelilpan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'071', 
            'name'=>'Tlahuiltepa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'072', 
            'name'=>'Tlanalapa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'073', 
            'name'=>'Tlanchinol', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'074', 
            'name'=>'Tlaxcoapan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'075', 
            'name'=>'Tolcayuca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'076', 
            'name'=>'Tula de Allende', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'077', 
            'name'=>'Tulancingo de Bravo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'078', 
            'name'=>'Xochiatipan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'079', 
            'name'=>'Xochicoatlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'080', 
            'name'=>'Yahualica', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'081', 
            'name'=>'Zacualtipán de Ángeles', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'082', 
            'name'=>'Zapotlán de Juárez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'083', 
            'name'=>'Zempoala', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>13, 
            'key'=>'084', 
            'name'=>'Zimapán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'001', 
            'name'=>'Acatic', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'002', 
            'name'=>'Acatlán de Juárez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'003', 
            'name'=>'Ahualulco de Mercado', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'004', 
            'name'=>'Amacueca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'005', 
            'name'=>'Amatitán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'006', 
            'name'=>'Ameca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'007', 
            'name'=>'San Juanito de Escobedo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'008', 
            'name'=>'Arandas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'009', 
            'name'=>'El Arenal', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'010', 
            'name'=>'Atemajac de Brizuela', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'011', 
            'name'=>'Atengo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'012', 
            'name'=>'Atenguillo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'013', 
            'name'=>'Atotonilco el Alto', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'014', 
            'name'=>'Atoyac', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'015', 
            'name'=>'Autlán de Navarro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'016', 
            'name'=>'Ayotlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'017', 
            'name'=>'Ayutla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'018', 
            'name'=>'La Barca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'019', 
            'name'=>'Bolaños', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'020', 
            'name'=>'Cabo Corrientes', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'021', 
            'name'=>'Casimiro Castillo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'022', 
            'name'=>'Cihuatlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'023', 
            'name'=>'Zapotlán el Grande', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'024', 
            'name'=>'Cocula', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'025', 
            'name'=>'Colotlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'026', 
            'name'=>'Concepción de Buenos Aires', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'027', 
            'name'=>'Cuautitlán de García Barragán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'028', 
            'name'=>'Cuautla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'029', 
            'name'=>'Cuquío', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'030', 
            'name'=>'Chapala', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'031', 
            'name'=>'Chimaltitán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'032', 
            'name'=>'Chiquilistlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'033', 
            'name'=>'Degollado', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'034', 
            'name'=>'Ejutla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'035', 
            'name'=>'Encarnación de Díaz', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'036', 
            'name'=>'Etzatlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'037', 
            'name'=>'El Grullo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'038', 
            'name'=>'Guachinango', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'039', 
            'name'=>'Guadalajara', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'040', 
            'name'=>'Hostotipaquillo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'041', 
            'name'=>'Huejúcar', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'042', 
            'name'=>'Huejuquilla el Alto', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'043', 
            'name'=>'La Huerta', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'044', 
            'name'=>'Ixtlahuacán de los Membrillos', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'045', 
            'name'=>'Ixtlahuacán del Río', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'046', 
            'name'=>'Jalostotitlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'047', 
            'name'=>'Jamay', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'048', 
            'name'=>'Jesús María', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'049', 
            'name'=>'Jilotlán de los Dolores', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'050', 
            'name'=>'Jocotepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'051', 
            'name'=>'Juanacatlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'052', 
            'name'=>'Juchitlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'053', 
            'name'=>'Lagos de Moreno', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'054', 
            'name'=>'El Limón', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'055', 
            'name'=>'Magdalena', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'056', 
            'name'=>'Santa María del Oro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'057', 
            'name'=>'La Manzanilla de la Paz', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'058', 
            'name'=>'Mascota', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'059', 
            'name'=>'Mazamitla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'060', 
            'name'=>'Mexticacán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'061', 
            'name'=>'Mezquitic', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'062', 
            'name'=>'Mixtlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'063', 
            'name'=>'Ocotlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'064', 
            'name'=>'Ojuelos de Jalisco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'065', 
            'name'=>'Pihuamo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'066', 
            'name'=>'Poncitlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'067', 
            'name'=>'Puerto Vallarta', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'068', 
            'name'=>'Villa Purificación', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'069', 
            'name'=>'Quitupan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'070', 
            'name'=>'El Salto', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'071', 
            'name'=>'San Cristóbal de la Barranca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'072', 
            'name'=>'San Diego de Alejandría', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'073', 
            'name'=>'San Juan de los Lagos', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'074', 
            'name'=>'San Julián', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'075', 
            'name'=>'San Marcos', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'076', 
            'name'=>'San Martín de Bolaños', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'077', 
            'name'=>'San Martín Hidalgo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'078', 
            'name'=>'San Miguel el Alto', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'079', 
            'name'=>'Gómez Farías', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'080', 
            'name'=>'San Sebastián del Oeste', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'081', 
            'name'=>'Santa María de los Ángeles', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'082', 
            'name'=>'Sayula', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'083', 
            'name'=>'Tala', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'084', 
            'name'=>'Talpa de Allende', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'085', 
            'name'=>'Tamazula de Gordiano', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'086', 
            'name'=>'Tapalpa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'087', 
            'name'=>'Tecalitlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'088', 
            'name'=>'Tecolotlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'089', 
            'name'=>'Techaluta de Montenegro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'090', 
            'name'=>'Tenamaxtlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'091', 
            'name'=>'Teocaltiche', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'092', 
            'name'=>'Teocuitatlán de Corona', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'093', 
            'name'=>'Tepatitlán de Morelos', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'094', 
            'name'=>'Tequila', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'095', 
            'name'=>'Teuchitlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'096', 
            'name'=>'Tizapán el Alto', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'097', 
            'name'=>'Tlajomulco de Zúñiga', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'098', 
            'name'=>'San Pedro Tlaquepaque', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'099', 
            'name'=>'Tolimán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'100', 
            'name'=>'Tomatlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'101', 
            'name'=>'Tonalá', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'102', 
            'name'=>'Tonaya', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'103', 
            'name'=>'Tonila', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'104', 
            'name'=>'Totatiche', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'105', 
            'name'=>'Tototlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'106', 
            'name'=>'Tuxcacuesco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'107', 
            'name'=>'Tuxcueca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'108', 
            'name'=>'Tuxpan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'109', 
            'name'=>'Unión de San Antonio', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'110', 
            'name'=>'Unión de Tula', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'111', 
            'name'=>'Valle de Guadalupe', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'112', 
            'name'=>'Valle de Juárez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'113', 
            'name'=>'San Gabriel', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'114', 
            'name'=>'Villa Corona', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'115', 
            'name'=>'Villa Guerrero', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'116', 
            'name'=>'Villa Hidalgo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'117', 
            'name'=>'Cañadas de Obregón', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'118', 
            'name'=>'Yahualica de González Gallo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'119', 
            'name'=>'Zacoalco de Torres', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'120', 
            'name'=>'Zapopan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'121', 
            'name'=>'Zapotiltic', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'122', 
            'name'=>'Zapotitlán de Vadillo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'123', 
            'name'=>'Zapotlán del Rey', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'124', 
            'name'=>'Zapotlanejo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>14, 
            'key'=>'125', 
            'name'=>'San Ignacio Cerro Gordo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'001', 
            'name'=>'Acambay de Ruíz Castañeda', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'002', 
            'name'=>'Acolman', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'003', 
            'name'=>'Aculco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'004', 
            'name'=>'Almoloya de Alquisiras', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'005', 
            'name'=>'Almoloya de Juárez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'006', 
            'name'=>'Almoloya del Río', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'007', 
            'name'=>'Amanalco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'008', 
            'name'=>'Amatepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'009', 
            'name'=>'Amecameca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'010', 
            'name'=>'Apaxco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'011', 
            'name'=>'Atenco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'012', 
            'name'=>'Atizapán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'013', 
            'name'=>'Atizapán de Zaragoza', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'014', 
            'name'=>'Atlacomulco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'015', 
            'name'=>'Atlautla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'016', 
            'name'=>'Axapusco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'017', 
            'name'=>'Ayapango', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'018', 
            'name'=>'Calimaya', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'019', 
            'name'=>'Capulhuac', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'020', 
            'name'=>'Coacalco de Berriozábal', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'021', 
            'name'=>'Coatepec Harinas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'022', 
            'name'=>'Cocotitlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'023', 
            'name'=>'Coyotepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'024', 
            'name'=>'Cuautitlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'025', 
            'name'=>'Chalco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'026', 
            'name'=>'Chapa de Mota', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'027', 
            'name'=>'Chapultepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'028', 
            'name'=>'Chiautla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'029', 
            'name'=>'Chicoloapan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'030', 
            'name'=>'Chiconcuac', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'031', 
            'name'=>'Chimalhuacán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'032', 
            'name'=>'Donato Guerra', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'033', 
            'name'=>'Ecatepec de Morelos', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'034', 
            'name'=>'Ecatzingo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'035', 
            'name'=>'Huehuetoca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'036', 
            'name'=>'Hueypoxtla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'037', 
            'name'=>'Huixquilucan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'038', 
            'name'=>'Isidro Fabela', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'039', 
            'name'=>'Ixtapaluca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'040', 
            'name'=>'Ixtapan de la Sal', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'041', 
            'name'=>'Ixtapan del Oro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'042', 
            'name'=>'Ixtlahuaca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'043', 
            'name'=>'Xalatlaco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'044', 
            'name'=>'Jaltenco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'045', 
            'name'=>'Jilotepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'046', 
            'name'=>'Jilotzingo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'047', 
            'name'=>'Jiquipilco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'048', 
            'name'=>'Jocotitlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'049', 
            'name'=>'Joquicingo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'050', 
            'name'=>'Juchitepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'051', 
            'name'=>'Lerma', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'052', 
            'name'=>'Malinalco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'053', 
            'name'=>'Melchor Ocampo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'054', 
            'name'=>'Metepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'055', 
            'name'=>'Mexicaltzingo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'056', 
            'name'=>'Morelos', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'057', 
            'name'=>'Naucalpan de Juárez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'058', 
            'name'=>'Nezahualcóyotl', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'059', 
            'name'=>'Nextlalpan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'060', 
            'name'=>'Nicolás Romero', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'061', 
            'name'=>'Nopaltepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'062', 
            'name'=>'Ocoyoacac', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'063', 
            'name'=>'Ocuilan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'064', 
            'name'=>'El Oro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'065', 
            'name'=>'Otumba', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'066', 
            'name'=>'Otzoloapan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'067', 
            'name'=>'Otzolotepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'068', 
            'name'=>'Ozumba', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'069', 
            'name'=>'Papalotla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'070', 
            'name'=>'La Paz', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'071', 
            'name'=>'Polotitlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'072', 
            'name'=>'Rayón', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'073', 
            'name'=>'San Antonio la Isla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'074', 
            'name'=>'San Felipe del Progreso', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'075', 
            'name'=>'San Martín de las Pirámides', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'076', 
            'name'=>'San Mateo Atenco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'077', 
            'name'=>'San Simón de Guerrero', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'078', 
            'name'=>'Santo Tomás', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'079', 
            'name'=>'Soyaniquilpan de Juárez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'080', 
            'name'=>'Sultepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'081', 
            'name'=>'Tecámac', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'082', 
            'name'=>'Tejupilco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'083', 
            'name'=>'Temamatla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'084', 
            'name'=>'Temascalapa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'085', 
            'name'=>'Temascalcingo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'086', 
            'name'=>'Temascaltepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'087', 
            'name'=>'Temoaya', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'088', 
            'name'=>'Tenancingo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'089', 
            'name'=>'Tenango del Aire', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'090', 
            'name'=>'Tenango del Valle', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'091', 
            'name'=>'Teoloyucan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'092', 
            'name'=>'Teotihuacán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'093', 
            'name'=>'Tepetlaoxtoc', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'094', 
            'name'=>'Tepetlixpa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'095', 
            'name'=>'Tepotzotlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'096', 
            'name'=>'Tequixquiac', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'097', 
            'name'=>'Texcaltitlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'098', 
            'name'=>'Texcalyacac', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'099', 
            'name'=>'Texcoco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'100', 
            'name'=>'Tezoyuca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'101', 
            'name'=>'Tianguistenco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'102', 
            'name'=>'Timilpan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'103', 
            'name'=>'Tlalmanalco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'104', 
            'name'=>'Tlalnepantla de Baz', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'105', 
            'name'=>'Tlatlaya', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'106', 
            'name'=>'Toluca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'107', 
            'name'=>'Tonatico', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'108', 
            'name'=>'Tultepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'109', 
            'name'=>'Tultitlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'110', 
            'name'=>'Valle de Bravo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'111', 
            'name'=>'Villa de Allende', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'112', 
            'name'=>'Villa del Carbón', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'113', 
            'name'=>'Villa Guerrero', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'114', 
            'name'=>'Villa Victoria', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'115', 
            'name'=>'Xonacatlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'116', 
            'name'=>'Zacazonapan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'117', 
            'name'=>'Zacualpan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'118', 
            'name'=>'Zinacantepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'119', 
            'name'=>'Zumpahuacán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'120', 
            'name'=>'Zumpango', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'121', 
            'name'=>'Cuautitlán Izcalli', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'122', 
            'name'=>'Valle de Chalco Solidaridad', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'123', 
            'name'=>'Luvianos', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'124', 
            'name'=>'San José del Rincón', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>15, 
            'key'=>'125', 
            'name'=>'Tonanitla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'001', 
            'name'=>'Acuitzio', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'002', 
            'name'=>'Aguililla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'003', 
            'name'=>'Álvaro Obregón', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'004', 
            'name'=>'Angamacutiro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'005', 
            'name'=>'Angangueo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'006', 
            'name'=>'Apatzingán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'007', 
            'name'=>'Aporo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'008', 
            'name'=>'Aquila', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'009', 
            'name'=>'Ario', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'010', 
            'name'=>'Arteaga', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'011', 
            'name'=>'Briseñas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'012', 
            'name'=>'Buenavista', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'013', 
            'name'=>'Carácuaro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'014', 
            'name'=>'Coahuayana', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'015', 
            'name'=>'Coalcomán de Vázquez Pallares', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'016', 
            'name'=>'Coeneo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'017', 
            'name'=>'Contepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'018', 
            'name'=>'Copándaro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'019', 
            'name'=>'Cotija', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'020', 
            'name'=>'Cuitzeo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'021', 
            'name'=>'Charapan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'022', 
            'name'=>'Charo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'023', 
            'name'=>'Chavinda', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'024', 
            'name'=>'Cherán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'025', 
            'name'=>'Chilchota', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'026', 
            'name'=>'Chinicuila', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'027', 
            'name'=>'Chucándiro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'028', 
            'name'=>'Churintzio', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'029', 
            'name'=>'Churumuco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'030', 
            'name'=>'Ecuandureo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'031', 
            'name'=>'Epitacio Huerta', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'032', 
            'name'=>'Erongarícuaro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'033', 
            'name'=>'Gabriel Zamora', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'034', 
            'name'=>'Hidalgo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'035', 
            'name'=>'La Huacana', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'036', 
            'name'=>'Huandacareo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'037', 
            'name'=>'Huaniqueo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'038', 
            'name'=>'Huetamo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'039', 
            'name'=>'Huiramba', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'040', 
            'name'=>'Indaparapeo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'041', 
            'name'=>'Irimbo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'042', 
            'name'=>'Ixtlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'043', 
            'name'=>'Jacona', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'044', 
            'name'=>'Jiménez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'045', 
            'name'=>'Jiquilpan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'046', 
            'name'=>'Juárez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'047', 
            'name'=>'Jungapeo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'048', 
            'name'=>'Lagunillas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'049', 
            'name'=>'Madero', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'050', 
            'name'=>'Maravatío', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'051', 
            'name'=>'Marcos Castellanos', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'052', 
            'name'=>'Lázaro Cárdenas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'053', 
            'name'=>'Morelia', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'054', 
            'name'=>'Morelos', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'055', 
            'name'=>'Múgica', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'056', 
            'name'=>'Nahuatzen', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'057', 
            'name'=>'Nocupétaro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'058', 
            'name'=>'Nuevo Parangaricutiro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'059', 
            'name'=>'Nuevo Urecho', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'060', 
            'name'=>'Numarán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'061', 
            'name'=>'Ocampo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'062', 
            'name'=>'Pajacuarán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'063', 
            'name'=>'Panindícuaro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'064', 
            'name'=>'Parácuaro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'065', 
            'name'=>'Paracho', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'066', 
            'name'=>'Pátzcuaro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'067', 
            'name'=>'Penjamillo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'068', 
            'name'=>'Peribán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'069', 
            'name'=>'La Piedad', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'070', 
            'name'=>'Purépero', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'071', 
            'name'=>'Puruándiro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'072', 
            'name'=>'Queréndaro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'073', 
            'name'=>'Quiroga', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'074', 
            'name'=>'Cojumatlán de Régules', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'075', 
            'name'=>'Los Reyes', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'076', 
            'name'=>'Sahuayo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'077', 
            'name'=>'San Lucas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'078', 
            'name'=>'Santa Ana Maya', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'079', 
            'name'=>'Salvador Escalante', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'080', 
            'name'=>'Senguio', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'081', 
            'name'=>'Susupuato', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'082', 
            'name'=>'Tacámbaro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'083', 
            'name'=>'Tancítaro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'084', 
            'name'=>'Tangamandapio', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'085', 
            'name'=>'Tangancícuaro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'086', 
            'name'=>'Tanhuato', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'087', 
            'name'=>'Taretan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'088', 
            'name'=>'Tarímbaro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'089', 
            'name'=>'Tepalcatepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'090', 
            'name'=>'Tingambato', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'091', 
            'name'=>'Tingüindín', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'092', 
            'name'=>'Tiquicheo de Nicolás Romero', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'093', 
            'name'=>'Tlalpujahua', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'094', 
            'name'=>'Tlazazalca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'095', 
            'name'=>'Tocumbo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'096', 
            'name'=>'Tumbiscatío', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'097', 
            'name'=>'Turicato', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'098', 
            'name'=>'Tuxpan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'099', 
            'name'=>'Tuzantla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'100', 
            'name'=>'Tzintzuntzan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'101', 
            'name'=>'Tzitzio', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'102', 
            'name'=>'Uruapan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'103', 
            'name'=>'Venustiano Carranza', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'104', 
            'name'=>'Villamar', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'105', 
            'name'=>'Vista Hermosa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'106', 
            'name'=>'Yurécuaro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'107', 
            'name'=>'Zacapu', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'108', 
            'name'=>'Zamora', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'109', 
            'name'=>'Zináparo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'110', 
            'name'=>'Zinapécuaro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'111', 
            'name'=>'Ziracuaretiro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'112', 
            'name'=>'Zitácuaro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>16, 
            'key'=>'113', 
            'name'=>'José Sixto Verduzco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'001', 
            'name'=>'Amacuzac', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'002', 
            'name'=>'Atlatlahucan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'003', 
            'name'=>'Axochiapan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'004', 
            'name'=>'Ayala', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'005', 
            'name'=>'Coatlán del Río', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'006', 
            'name'=>'Cuautla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'007', 
            'name'=>'Cuernavaca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'008', 
            'name'=>'Emiliano Zapata', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'009', 
            'name'=>'Huitzilac', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'010', 
            'name'=>'Jantetelco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'011', 
            'name'=>'Jiutepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'012', 
            'name'=>'Jojutla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'013', 
            'name'=>'Jonacatepec de Leandro Valle', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'014', 
            'name'=>'Mazatepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'015', 
            'name'=>'Miacatlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'016', 
            'name'=>'Ocuituco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'017', 
            'name'=>'Puente de Ixtla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'018', 
            'name'=>'Temixco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'019', 
            'name'=>'Tepalcingo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'020', 
            'name'=>'Tepoztlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'021', 
            'name'=>'Tetecala', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'022', 
            'name'=>'Tetela del Volcán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'023', 
            'name'=>'Tlalnepantla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'024', 
            'name'=>'Tlaltizapán de Zapata', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'025', 
            'name'=>'Tlaquiltenango', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'026', 
            'name'=>'Tlayacapan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'027', 
            'name'=>'Totolapan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'028', 
            'name'=>'Xochitepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'029', 
            'name'=>'Yautepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'030', 
            'name'=>'Yecapixtla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'031', 
            'name'=>'Zacatepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'032', 
            'name'=>'Zacualpan de Amilpas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>17, 
            'key'=>'033', 
            'name'=>'Temoac', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>18, 
            'key'=>'001', 
            'name'=>'Acaponeta', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>18, 
            'key'=>'002', 
            'name'=>'Ahuacatlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>18, 
            'key'=>'003', 
            'name'=>'Amatlán de Cañas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>18, 
            'key'=>'004', 
            'name'=>'Compostela', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>18, 
            'key'=>'005', 
            'name'=>'Huajicori', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>18, 
            'key'=>'006', 
            'name'=>'Ixtlán del Río', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>18, 
            'key'=>'007', 
            'name'=>'Jala', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>18, 
            'key'=>'008', 
            'name'=>'Xalisco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>18, 
            'key'=>'009', 
            'name'=>'Del Nayar', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>18, 
            'key'=>'010', 
            'name'=>'Rosamorada', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>18, 
            'key'=>'011', 
            'name'=>'Ruíz', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>18, 
            'key'=>'012', 
            'name'=>'San Blas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>18, 
            'key'=>'013', 
            'name'=>'San Pedro Lagunillas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>18, 
            'key'=>'014', 
            'name'=>'Santa María del Oro', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>18, 
            'key'=>'015', 
            'name'=>'Santiago Ixcuintla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>18, 
            'key'=>'016', 
            'name'=>'Tecuala', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>18, 
            'key'=>'017', 
            'name'=>'Tepic', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>18, 
            'key'=>'018', 
            'name'=>'Tuxpan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>18, 
            'key'=>'019', 
            'name'=>'La Yesca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>18, 
            'key'=>'020', 
            'name'=>'Bahía de Banderas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'001', 
            'name'=>'Abasolo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'002', 
            'name'=>'Agualeguas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'003', 
            'name'=>'Los Aldamas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'004', 
            'name'=>'Allende', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'005', 
            'name'=>'Anáhuac', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'006', 
            'name'=>'Apodaca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'007', 
            'name'=>'Aramberri', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'008', 
            'name'=>'Bustamante', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'009', 
            'name'=>'Cadereyta Jiménez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'010', 
            'name'=>'El Carmen', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'011', 
            'name'=>'Cerralvo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'012', 
            'name'=>'Ciénega de Flores', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'013', 
            'name'=>'China', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'014', 
            'name'=>'Doctor Arroyo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'015', 
            'name'=>'Doctor Coss', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'016', 
            'name'=>'Doctor González', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'017', 
            'name'=>'Galeana', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'018', 
            'name'=>'García', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'019', 
            'name'=>'San Pedro Garza García', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'020', 
            'name'=>'General Bravo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'021', 
            'name'=>'General Escobedo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'022', 
            'name'=>'General Terán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'023', 
            'name'=>'General Treviño', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'024', 
            'name'=>'General Zaragoza', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'025', 
            'name'=>'General Zuazua', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'026', 
            'name'=>'Guadalupe', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'027', 
            'name'=>'Los Herreras', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'028', 
            'name'=>'Higueras', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'029', 
            'name'=>'Hualahuises', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'030', 
            'name'=>'Iturbide', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'031', 
            'name'=>'Juárez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'032', 
            'name'=>'Lampazos de Naranjo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'033', 
            'name'=>'Linares', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'034', 
            'name'=>'Marín', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'035', 
            'name'=>'Melchor Ocampo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'036', 
            'name'=>'Mier y Noriega', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'037', 
            'name'=>'Mina', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'038', 
            'name'=>'Montemorelos', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'039', 
            'name'=>'Monterrey', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'040', 
            'name'=>'Parás', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'041', 
            'name'=>'Pesquería', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'042', 
            'name'=>'Los Ramones', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'043', 
            'name'=>'Rayones', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'044', 
            'name'=>'Sabinas Hidalgo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'045', 
            'name'=>'Salinas Victoria', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'046', 
            'name'=>'San Nicolás de los Garza', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'047', 
            'name'=>'Hidalgo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'048', 
            'name'=>'Santa Catarina', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'049', 
            'name'=>'Santiago', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'050', 
            'name'=>'Vallecillo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>19, 
            'key'=>'051', 
            'name'=>'Villaldama', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'001', 
            'name'=>'Abejones', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'002', 
            'name'=>'Acatlán de Pérez Figueroa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'003', 
            'name'=>'Asunción Cacalotepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'004', 
            'name'=>'Asunción Cuyotepeji', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'005', 
            'name'=>'Asunción Ixtaltepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'006', 
            'name'=>'Asunción Nochixtlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'007', 
            'name'=>'Asunción Ocotlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'008', 
            'name'=>'Asunción Tlacolulita', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'009', 
            'name'=>'Ayotzintepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'010', 
            'name'=>'El Barrio de la Soledad', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'011', 
            'name'=>'Calihualá', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'012', 
            'name'=>'Candelaria Loxicha', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'013', 
            'name'=>'Ciénega de Zimatlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'014', 
            'name'=>'Ciudad Ixtepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'015', 
            'name'=>'Coatecas Altas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'016', 
            'name'=>'Coicoyán de las Flores', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'017', 
            'name'=>'La Compañía', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'018', 
            'name'=>'Concepción Buenavista', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'019', 
            'name'=>'Concepción Pápalo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'020', 
            'name'=>'Constancia del Rosario', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'021', 
            'name'=>'Cosolapa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'022', 
            'name'=>'Cosoltepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'023', 
            'name'=>'Cuilápam de Guerrero', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'024', 
            'name'=>'Cuyamecalco Villa de Zaragoza', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'025', 
            'name'=>'Chahuites', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'026', 
            'name'=>'Chalcatongo de Hidalgo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'027', 
            'name'=>'Chiquihuitlán de Benito Juárez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'028', 
            'name'=>'Heroica Ciudad de Ejutla de Crespo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'029', 
            'name'=>'Eloxochitlán de Flores Magón', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'030', 
            'name'=>'El Espinal', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'031', 
            'name'=>'Tamazulápam del Espíritu Santo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'032', 
            'name'=>'Fresnillo de Trujano', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'033', 
            'name'=>'Guadalupe Etla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'034', 
            'name'=>'Guadalupe de Ramírez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'035', 
            'name'=>'Guelatao de Juárez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'036', 
            'name'=>'Guevea de Humboldt', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'037', 
            'name'=>'Mesones Hidalgo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'038', 
            'name'=>'Villa Hidalgo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'039', 
            'name'=>'Heroica Ciudad de Huajuapan de León', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'040', 
            'name'=>'Huautepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'041', 
            'name'=>'Huautla de Jiménez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'042', 
            'name'=>'Ixtlán de Juárez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'043', 
            'name'=>'Heroica Ciudad de Juchitán de Zaragoza', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'044', 
            'name'=>'Loma Bonita', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'045', 
            'name'=>'Magdalena Apasco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'046', 
            'name'=>'Magdalena Jaltepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'047', 
            'name'=>'Santa Magdalena Jicotlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'048', 
            'name'=>'Magdalena Mixtepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'049', 
            'name'=>'Magdalena Ocotlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'050', 
            'name'=>'Magdalena Peñasco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'051', 
            'name'=>'Magdalena Teitipac', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'052', 
            'name'=>'Magdalena Tequisistlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'053', 
            'name'=>'Magdalena Tlacotepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'054', 
            'name'=>'Magdalena Zahuatlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'055', 
            'name'=>'Mariscala de Juárez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'056', 
            'name'=>'Mártires de Tacubaya', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'057', 
            'name'=>'Matías Romero Avendaño', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'058', 
            'name'=>'Mazatlán Villa de Flores', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'059', 
            'name'=>'Miahuatlán de Porfirio Díaz', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'060', 
            'name'=>'Mixistlán de la Reforma', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'061', 
            'name'=>'Monjas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'062', 
            'name'=>'Natividad', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'063', 
            'name'=>'Nazareno Etla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'064', 
            'name'=>'Nejapa de Madero', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'065', 
            'name'=>'Ixpantepec Nieves', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'066', 
            'name'=>'Santiago Niltepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'067', 
            'name'=>'Oaxaca de Juárez', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'068', 
            'name'=>'Ocotlán de Morelos', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'069', 
            'name'=>'La Pe', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'070', 
            'name'=>'Pinotepa de Don Luis', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'071', 
            'name'=>'Pluma Hidalgo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'072', 
            'name'=>'San José del Progreso', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'073', 
            'name'=>'Putla Villa de Guerrero', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'074', 
            'name'=>'Santa Catarina Quioquitani', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'075', 
            'name'=>'Reforma de Pineda', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'076', 
            'name'=>'La Reforma', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'077', 
            'name'=>'Reyes Etla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'078', 
            'name'=>'Rojas de Cuauhtémoc', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'079', 
            'name'=>'Salina Cruz', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'080', 
            'name'=>'San Agustín Amatengo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'081', 
            'name'=>'San Agustín Atenango', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'082', 
            'name'=>'San Agustín Chayuco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'083', 
            'name'=>'San Agustín de las Juntas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'084', 
            'name'=>'San Agustín Etla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'085', 
            'name'=>'San Agustín Loxicha', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'086', 
            'name'=>'San Agustín Tlacotepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'087', 
            'name'=>'San Agustín Yatareni', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'088', 
            'name'=>'San Andrés Cabecera Nueva', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'089', 
            'name'=>'San Andrés Dinicuiti', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'090', 
            'name'=>'San Andrés Huaxpaltepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'091', 
            'name'=>'San Andrés Huayápam', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'092', 
            'name'=>'San Andrés Ixtlahuaca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'093', 
            'name'=>'San Andrés Lagunas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'094', 
            'name'=>'San Andrés Nuxiño', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'095', 
            'name'=>'San Andrés Paxtlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'096', 
            'name'=>'San Andrés Sinaxtla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'097', 
            'name'=>'San Andrés Solaga', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'098', 
            'name'=>'San Andrés Teotilálpam', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'099', 
            'name'=>'San Andrés Tepetlapa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'100', 
            'name'=>'San Andrés Yaá', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'101', 
            'name'=>'San Andrés Zabache', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'102', 
            'name'=>'San Andrés Zautla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'103', 
            'name'=>'San Antonino Castillo Velasco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'104', 
            'name'=>'San Antonino el Alto', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'105', 
            'name'=>'San Antonino Monte Verde', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'106', 
            'name'=>'San Antonio Acutla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'107', 
            'name'=>'San Antonio de la Cal', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'108', 
            'name'=>'San Antonio Huitepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'109', 
            'name'=>'San Antonio Nanahuatípam', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'110', 
            'name'=>'San Antonio Sinicahua', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'111', 
            'name'=>'San Antonio Tepetlapa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'112', 
            'name'=>'San Baltazar Chichicápam', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'113', 
            'name'=>'San Baltazar Loxicha', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'114', 
            'name'=>'San Baltazar Yatzachi el Bajo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'115', 
            'name'=>'San Bartolo Coyotepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'116', 
            'name'=>'San Bartolomé Ayautla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'117', 
            'name'=>'San Bartolomé Loxicha', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'118', 
            'name'=>'San Bartolomé Quialana', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'119', 
            'name'=>'San Bartolomé Yucuañe', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'120', 
            'name'=>'San Bartolomé Zoogocho', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'121', 
            'name'=>'San Bartolo Soyaltepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'122', 
            'name'=>'San Bartolo Yautepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'123', 
            'name'=>'San Bernardo Mixtepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'124', 
            'name'=>'San Blas Atempa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'125', 
            'name'=>'San Carlos Yautepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'126', 
            'name'=>'San Cristóbal Amatlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'127', 
            'name'=>'San Cristóbal Amoltepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'128', 
            'name'=>'San Cristóbal Lachirioag', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'129', 
            'name'=>'San Cristóbal Suchixtlahuaca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'130', 
            'name'=>'San Dionisio del Mar', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'131', 
            'name'=>'San Dionisio Ocotepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'132', 
            'name'=>'San Dionisio Ocotlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'133', 
            'name'=>'San Esteban Atatlahuca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'134', 
            'name'=>'San Felipe Jalapa de Díaz', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'135', 
            'name'=>'San Felipe Tejalápam', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'136', 
            'name'=>'San Felipe Usila', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'137', 
            'name'=>'San Francisco Cahuacuá', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'138', 
            'name'=>'San Francisco Cajonos', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'139', 
            'name'=>'San Francisco Chapulapa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'140', 
            'name'=>'San Francisco Chindúa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'141', 
            'name'=>'San Francisco del Mar', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'142', 
            'name'=>'San Francisco Huehuetlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'143', 
            'name'=>'San Francisco Ixhuatán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'144', 
            'name'=>'San Francisco Jaltepetongo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'145', 
            'name'=>'San Francisco Lachigoló', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'146', 
            'name'=>'San Francisco Logueche', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'147', 
            'name'=>'San Francisco Nuxaño', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'148', 
            'name'=>'San Francisco Ozolotepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'149', 
            'name'=>'San Francisco Sola', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'150', 
            'name'=>'San Francisco Telixtlahuaca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'151', 
            'name'=>'San Francisco Teopan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'152', 
            'name'=>'San Francisco Tlapancingo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'153', 
            'name'=>'San Gabriel Mixtepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'154', 
            'name'=>'San Ildefonso Amatlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'155', 
            'name'=>'San Ildefonso Sola', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'156', 
            'name'=>'San Ildefonso Villa Alta', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'157', 
            'name'=>'San Jacinto Amilpas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'158', 
            'name'=>'San Jacinto Tlacotepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'159', 
            'name'=>'San Jerónimo Coatlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'160', 
            'name'=>'San Jerónimo Silacayoapilla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'161', 
            'name'=>'San Jerónimo Sosola', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'162', 
            'name'=>'San Jerónimo Taviche', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'163', 
            'name'=>'San Jerónimo Tecóatl', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'164', 
            'name'=>'San Jorge Nuchita', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'165', 
            'name'=>'San José Ayuquila', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'166', 
            'name'=>'San José Chiltepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'167', 
            'name'=>'San José del Peñasco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'168', 
            'name'=>'San José Estancia Grande', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'169', 
            'name'=>'San José Independencia', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'170', 
            'name'=>'San José Lachiguiri', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'171', 
            'name'=>'San José Tenango', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'172', 
            'name'=>'San Juan Achiutla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'173', 
            'name'=>'San Juan Atepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'174', 
            'name'=>'Ánimas Trujano', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'175', 
            'name'=>'San Juan Bautista Atatlahuca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'176', 
            'name'=>'San Juan Bautista Coixtlahuaca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'177', 
            'name'=>'San Juan Bautista Cuicatlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'178', 
            'name'=>'San Juan Bautista Guelache', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'179', 
            'name'=>'San Juan Bautista Jayacatlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'180', 
            'name'=>'San Juan Bautista Lo de Soto', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'181', 
            'name'=>'San Juan Bautista Suchitepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'182', 
            'name'=>'San Juan Bautista Tlacoatzintepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'183', 
            'name'=>'San Juan Bautista Tlachichilco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'184', 
            'name'=>'San Juan Bautista Tuxtepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'185', 
            'name'=>'San Juan Cacahuatepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'186', 
            'name'=>'San Juan Cieneguilla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'187', 
            'name'=>'San Juan Coatzóspam', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'188', 
            'name'=>'San Juan Colorado', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'189', 
            'name'=>'San Juan Comaltepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'190', 
            'name'=>'San Juan Cotzocón', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'191', 
            'name'=>'San Juan Chicomezúchil', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'192', 
            'name'=>'San Juan Chilateca', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'193', 
            'name'=>'San Juan del Estado', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'194', 
            'name'=>'San Juan del Río', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'195', 
            'name'=>'San Juan Diuxi', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'196', 
            'name'=>'San Juan Evangelista Analco', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'197', 
            'name'=>'San Juan Guelavía', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'198', 
            'name'=>'San Juan Guichicovi', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'199', 
            'name'=>'San Juan Ihualtepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'200', 
            'name'=>'San Juan Juquila Mixes', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'201', 
            'name'=>'San Juan Juquila Vijanos', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'202', 
            'name'=>'San Juan Lachao', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'203', 
            'name'=>'San Juan Lachigalla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'204', 
            'name'=>'San Juan Lajarcia', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'205', 
            'name'=>'San Juan Lalana', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'206', 
            'name'=>'San Juan de los Cués', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'207', 
            'name'=>'San Juan Mazatlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'208', 
            'name'=>'San Juan Mixtepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'209', 
            'name'=>'San Juan Mixtepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'210', 
            'name'=>'San Juan Ñumí', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'211', 
            'name'=>'San Juan Ozolotepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'212', 
            'name'=>'San Juan Petlapa', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'213', 
            'name'=>'San Juan Quiahije', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'214', 
            'name'=>'San Juan Quiotepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'215', 
            'name'=>'San Juan Sayultepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'216', 
            'name'=>'San Juan Tabaá', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'217', 
            'name'=>'San Juan Tamazola', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'218', 
            'name'=>'San Juan Teita', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'219', 
            'name'=>'San Juan Teitipac', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'220', 
            'name'=>'San Juan Tepeuxila', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'221', 
            'name'=>'San Juan Teposcolula', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'222', 
            'name'=>'San Juan Yaeé', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'223', 
            'name'=>'San Juan Yatzona', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'224', 
            'name'=>'San Juan Yucuita', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'225', 
            'name'=>'San Lorenzo', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'226', 
            'name'=>'San Lorenzo Albarradas', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'227', 
            'name'=>'San Lorenzo Cacaotepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'228', 
            'name'=>'San Lorenzo Cuaunecuiltitla', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'229', 
            'name'=>'San Lorenzo Texmelúcan', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'230', 
            'name'=>'San Lorenzo Victoria', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'231', 
            'name'=>'San Lucas Camotlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'232', 
            'name'=>'San Lucas Ojitlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'233', 
            'name'=>'San Lucas Quiaviní', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'234', 
            'name'=>'San Lucas Zoquiápam', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'235', 
            'name'=>'San Luis Amatlán', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'236', 
            'name'=>'San Marcial Ozolotepec', 
            'active'=>1
        ]) ;
       City::create([

        'state_id'=>20, 
            'key'=>'237', 
            'name'=>'San Marcos Arteaga', 
            'active'=>1
        ]) ;
       City::create([
        'state_id'=>20, 
            'key'=>'238', 
            'name'=>'San Martín de los Cansecos', 
            'active'=>1
       ]);
        City::create([

            'state_id'=>20, 
            'key'=>'239', 
            'name'=>'San Martín Huamelúlpam', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'240', 
            'name'=>'San Martín Itunyoso', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'241', 
            'name'=>'San Martín Lachilá', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'242', 
            'name'=>'San Martín Peras', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'243', 
            'name'=>'San Martín Tilcajete', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'244', 
            'name'=>'San Martín Toxpalan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'245', 
            'name'=>'San Martín Zacatepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'246', 
            'name'=>'San Mateo Cajonos', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'247', 
            'name'=>'Capulálpam de Méndez', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'248', 
            'name'=>'San Mateo del Mar', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'249', 
            'name'=>'San Mateo Yoloxochitlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'250', 
            'name'=>'San Mateo Etlatongo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'251', 
            'name'=>'San Mateo Nejápam', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'252', 
            'name'=>'San Mateo Peñasco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'253', 
            'name'=>'San Mateo Piñas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'254', 
            'name'=>'San Mateo Río Hondo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'255', 
            'name'=>'San Mateo Sindihui', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'256', 
            'name'=>'San Mateo Tlapiltepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'257', 
            'name'=>'San Melchor Betaza', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'258', 
            'name'=>'San Miguel Achiutla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'259', 
            'name'=>'San Miguel Ahuehuetitlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'260', 
            'name'=>'San Miguel Aloápam', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'261', 
            'name'=>'San Miguel Amatitlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'262', 
            'name'=>'San Miguel Amatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'263', 
            'name'=>'San Miguel Coatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'264', 
            'name'=>'San Miguel Chicahua', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'265', 
            'name'=>'San Miguel Chimalapa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'266', 
            'name'=>'San Miguel del Puerto', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'267', 
            'name'=>'San Miguel del Río', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'268', 
            'name'=>'San Miguel Ejutla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'269', 
            'name'=>'San Miguel el Grande', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'270', 
            'name'=>'San Miguel Huautla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'271', 
            'name'=>'San Miguel Mixtepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'272', 
            'name'=>'San Miguel Panixtlahuaca', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'273', 
            'name'=>'San Miguel Peras', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'274', 
            'name'=>'San Miguel Piedras', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'275', 
            'name'=>'San Miguel Quetzaltepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'276', 
            'name'=>'San Miguel Santa Flor', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'277', 
            'name'=>'Villa Sola de Vega', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'278', 
            'name'=>'San Miguel Soyaltepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'279', 
            'name'=>'San Miguel Suchixtepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'280', 
            'name'=>'Villa Talea de Castro', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'281', 
            'name'=>'San Miguel Tecomatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'282', 
            'name'=>'San Miguel Tenango', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'283', 
            'name'=>'San Miguel Tequixtepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'284', 
            'name'=>'San Miguel Tilquiápam', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'285', 
            'name'=>'San Miguel Tlacamama', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'286', 
            'name'=>'San Miguel Tlacotepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'287', 
            'name'=>'San Miguel Tulancingo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'288', 
            'name'=>'San Miguel Yotao', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'289', 
            'name'=>'San Nicolás', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'290', 
            'name'=>'San Nicolás Hidalgo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'291', 
            'name'=>'San Pablo Coatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'292', 
            'name'=>'San Pablo Cuatro Venados', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'293', 
            'name'=>'San Pablo Etla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'294', 
            'name'=>'San Pablo Huitzo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'295', 
            'name'=>'San Pablo Huixtepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'296', 
            'name'=>'San Pablo Macuiltianguis', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'297', 
            'name'=>'San Pablo Tijaltepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'298', 
            'name'=>'San Pablo Villa de Mitla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'299', 
            'name'=>'San Pablo Yaganiza', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'300', 
            'name'=>'San Pedro Amuzgos', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'301', 
            'name'=>'San Pedro Apóstol', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'302', 
            'name'=>'San Pedro Atoyac', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'303', 
            'name'=>'San Pedro Cajonos', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'304', 
            'name'=>'San Pedro Coxcaltepec Cántaros', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'305', 
            'name'=>'San Pedro Comitancillo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'306', 
            'name'=>'San Pedro el Alto', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'307', 
            'name'=>'San Pedro Huamelula', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'308', 
            'name'=>'San Pedro Huilotepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'309', 
            'name'=>'San Pedro Ixcatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'310', 
            'name'=>'San Pedro Ixtlahuaca', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'311', 
            'name'=>'San Pedro Jaltepetongo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'312', 
            'name'=>'San Pedro Jicayán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'313', 
            'name'=>'San Pedro Jocotipac', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'314', 
            'name'=>'San Pedro Juchatengo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'315', 
            'name'=>'San Pedro Mártir', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'316', 
            'name'=>'San Pedro Mártir Quiechapa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'317', 
            'name'=>'San Pedro Mártir Yucuxaco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'318', 
            'name'=>'San Pedro Mixtepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'319', 
            'name'=>'San Pedro Mixtepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'320', 
            'name'=>'San Pedro Molinos', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'321', 
            'name'=>'San Pedro Nopala', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'322', 
            'name'=>'San Pedro Ocopetatillo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'323', 
            'name'=>'San Pedro Ocotepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'324', 
            'name'=>'San Pedro Pochutla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'325', 
            'name'=>'San Pedro Quiatoni', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'326', 
            'name'=>'San Pedro Sochiápam', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'327', 
            'name'=>'San Pedro Tapanatepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'328', 
            'name'=>'San Pedro Taviche', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'329', 
            'name'=>'San Pedro Teozacoalco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'330', 
            'name'=>'San Pedro Teutila', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'331', 
            'name'=>'San Pedro Tidaá', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'332', 
            'name'=>'San Pedro Topiltepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'333', 
            'name'=>'San Pedro Totolápam', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'334', 
            'name'=>'Villa de Tututepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'335', 
            'name'=>'San Pedro Yaneri', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'336', 
            'name'=>'San Pedro Yólox', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'337', 
            'name'=>'San Pedro y San Pablo Ayutla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'338', 
            'name'=>'Villa de Etla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'339', 
            'name'=>'San Pedro y San Pablo Teposcolula', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'340', 
            'name'=>'San Pedro y San Pablo Tequixtepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'341', 
            'name'=>'San Pedro Yucunama', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'342', 
            'name'=>'San Raymundo Jalpan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'343', 
            'name'=>'San Sebastián Abasolo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'344', 
            'name'=>'San Sebastián Coatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'345', 
            'name'=>'San Sebastián Ixcapa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'346', 
            'name'=>'San Sebastián Nicananduta', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'347', 
            'name'=>'San Sebastián Río Hondo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'348', 
            'name'=>'San Sebastián Tecomaxtlahuaca', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'349', 
            'name'=>'San Sebastián Teitipac', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'350', 
            'name'=>'San Sebastián Tutla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'351', 
            'name'=>'San Simón Almolongas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'352', 
            'name'=>'San Simón Zahuatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'353', 
            'name'=>'Santa Ana', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'354', 
            'name'=>'Santa Ana Ateixtlahuaca', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'355', 
            'name'=>'Santa Ana Cuauhtémoc', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'356', 
            'name'=>'Santa Ana del Valle', 
            'active'=>1
        ]);

City::create([

        'state_id'=>20, 
            'key'=>'357', 
            'name'=>'Santa Ana Tavela', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'358', 
            'name'=>'Santa Ana Tlapacoyan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'359', 
            'name'=>'Santa Ana Yareni', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'360', 
            'name'=>'Santa Ana Zegache', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'361', 
            'name'=>'Santa Catalina Quierí', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'362', 
            'name'=>'Santa Catarina Cuixtla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'363', 
            'name'=>'Santa Catarina Ixtepeji', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'364', 
            'name'=>'Santa Catarina Juquila', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'365', 
            'name'=>'Santa Catarina Lachatao', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'366', 
            'name'=>'Santa Catarina Loxicha', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'367', 
            'name'=>'Santa Catarina Mechoacán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'368', 
            'name'=>'Santa Catarina Minas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'369', 
            'name'=>'Santa Catarina Quiané', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'370', 
            'name'=>'Santa Catarina Tayata', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'371', 
            'name'=>'Santa Catarina Ticuá', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'372', 
            'name'=>'Santa Catarina Yosonotú', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'373', 
            'name'=>'Santa Catarina Zapoquila', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'374', 
            'name'=>'Santa Cruz Acatepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'375', 
            'name'=>'Santa Cruz Amilpas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'376', 
            'name'=>'Santa Cruz de Bravo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'377', 
            'name'=>'Santa Cruz Itundujia', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'378', 
            'name'=>'Santa Cruz Mixtepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'379', 
            'name'=>'Santa Cruz Nundaco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'380', 
            'name'=>'Santa Cruz Papalutla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'381', 
            'name'=>'Santa Cruz Tacache de Mina', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'382', 
            'name'=>'Santa Cruz Tacahua', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'383', 
            'name'=>'Santa Cruz Tayata', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'384', 
            'name'=>'Santa Cruz Xitla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'385', 
            'name'=>'Santa Cruz Xoxocotlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'386', 
            'name'=>'Santa Cruz Zenzontepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'387', 
            'name'=>'Santa Gertrudis', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'388', 
            'name'=>'Santa Inés del Monte', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'389', 
            'name'=>'Santa Inés Yatzeche', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'390', 
            'name'=>'Santa Lucía del Camino', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'391', 
            'name'=>'Santa Lucía Miahuatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'392', 
            'name'=>'Santa Lucía Monteverde', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'393', 
            'name'=>'Santa Lucía Ocotlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'394', 
            'name'=>'Santa María Alotepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'395', 
            'name'=>'Santa María Apazco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'396', 
            'name'=>'Santa María la Asunción', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'397', 
            'name'=>'Heroica Ciudad de Tlaxiaco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'398', 
            'name'=>'Ayoquezco de Aldama', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'399', 
            'name'=>'Santa María Atzompa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'400', 
            'name'=>'Santa María Camotlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'401', 
            'name'=>'Santa María Colotepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'402', 
            'name'=>'Santa María Cortijo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'403', 
            'name'=>'Santa María Coyotepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'404', 
            'name'=>'Santa María Chachoápam', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'405', 
            'name'=>'Villa de Chilapa de Díaz', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'406', 
            'name'=>'Santa María Chilchotla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'407', 
            'name'=>'Santa María Chimalapa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'408', 
            'name'=>'Santa María del Rosario', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'409', 
            'name'=>'Santa María del Tule', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'410', 
            'name'=>'Santa María Ecatepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'411', 
            'name'=>'Santa María Guelacé', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'412', 
            'name'=>'Santa María Guienagati', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'413', 
            'name'=>'Santa María Huatulco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'414', 
            'name'=>'Santa María Huazolotitlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'415', 
            'name'=>'Santa María Ipalapa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'416', 
            'name'=>'Santa María Ixcatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'417', 
            'name'=>'Santa María Jacatepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'418', 
            'name'=>'Santa María Jalapa del Marqués', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'419', 
            'name'=>'Santa María Jaltianguis', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'420', 
            'name'=>'Santa María Lachixío', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'421', 
            'name'=>'Santa María Mixtequilla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'422', 
            'name'=>'Santa María Nativitas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'423', 
            'name'=>'Santa María Nduayaco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'424', 
            'name'=>'Santa María Ozolotepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'425', 
            'name'=>'Santa María Pápalo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'426', 
            'name'=>'Santa María Peñoles', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'427', 
            'name'=>'Santa María Petapa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'428', 
            'name'=>'Santa María Quiegolani', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'429', 
            'name'=>'Santa María Sola', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'430', 
            'name'=>'Santa María Tataltepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'431', 
            'name'=>'Santa María Tecomavaca', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'432', 
            'name'=>'Santa María Temaxcalapa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'433', 
            'name'=>'Santa María Temaxcaltepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'434', 
            'name'=>'Santa María Teopoxco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'435', 
            'name'=>'Santa María Tepantlali', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'436', 
            'name'=>'Santa María Texcatitlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'437', 
            'name'=>'Santa María Tlahuitoltepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'438', 
            'name'=>'Santa María Tlalixtac', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'439', 
            'name'=>'Santa María Tonameca', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'440', 
            'name'=>'Santa María Totolapilla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'441', 
            'name'=>'Santa María Xadani', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'442', 
            'name'=>'Santa María Yalina', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'443', 
            'name'=>'Santa María Yavesía', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'444', 
            'name'=>'Santa María Yolotepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'445', 
            'name'=>'Santa María Yosoyúa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'446', 
            'name'=>'Santa María Yucuhiti', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'447', 
            'name'=>'Santa María Zacatepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'448', 
            'name'=>'Santa María Zaniza', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'449', 
            'name'=>'Santa María Zoquitlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'450', 
            'name'=>'Santiago Amoltepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'451', 
            'name'=>'Santiago Apoala', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'452', 
            'name'=>'Santiago Apóstol', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'453', 
            'name'=>'Santiago Astata', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'454', 
            'name'=>'Santiago Atitlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'455', 
            'name'=>'Santiago Ayuquililla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'456', 
            'name'=>'Santiago Cacaloxtepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'457', 
            'name'=>'Santiago Camotlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'458', 
            'name'=>'Santiago Comaltepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'459', 
            'name'=>'Santiago Chazumba', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'460', 
            'name'=>'Santiago Choápam', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'461', 
            'name'=>'Santiago del Río', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'462', 
            'name'=>'Santiago Huajolotitlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'463', 
            'name'=>'Santiago Huauclilla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'464', 
            'name'=>'Santiago Ihuitlán Plumas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'465', 
            'name'=>'Santiago Ixcuintepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'466', 
            'name'=>'Santiago Ixtayutla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'467', 
            'name'=>'Santiago Jamiltepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'468', 
            'name'=>'Santiago Jocotepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'469', 
            'name'=>'Santiago Juxtlahuaca', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'470', 
            'name'=>'Santiago Lachiguiri', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'471', 
            'name'=>'Santiago Lalopa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'472', 
            'name'=>'Santiago Laollaga', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'473', 
            'name'=>'Santiago Laxopa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'474', 
            'name'=>'Santiago Llano Grande', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'475', 
            'name'=>'Santiago Matatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'476', 
            'name'=>'Santiago Miltepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'477', 
            'name'=>'Santiago Minas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'478', 
            'name'=>'Santiago Nacaltepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'479', 
            'name'=>'Santiago Nejapilla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'480', 
            'name'=>'Santiago Nundiche', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'481', 
            'name'=>'Santiago Nuyoó', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'482', 
            'name'=>'Santiago Pinotepa Nacional', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'483', 
            'name'=>'Santiago Suchilquitongo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'484', 
            'name'=>'Santiago Tamazola', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'485', 
            'name'=>'Santiago Tapextla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'486', 
            'name'=>'Villa Tejúpam de la Unión', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'487', 
            'name'=>'Santiago Tenango', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'488', 
            'name'=>'Santiago Tepetlapa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'489', 
            'name'=>'Santiago Tetepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'490', 
            'name'=>'Santiago Texcalcingo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'491', 
            'name'=>'Santiago Textitlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'492', 
            'name'=>'Santiago Tilantongo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'493', 
            'name'=>'Santiago Tillo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'494', 
            'name'=>'Santiago Tlazoyaltepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'495', 
            'name'=>'Santiago Xanica', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'496', 
            'name'=>'Santiago Xiacuí', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'497', 
            'name'=>'Santiago Yaitepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'498', 
            'name'=>'Santiago Yaveo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'499', 
            'name'=>'Santiago Yolomécatl', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'500', 
            'name'=>'Santiago Yosondúa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'501', 
            'name'=>'Santiago Yucuyachi', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'502', 
            'name'=>'Santiago Zacatepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'503', 
            'name'=>'Santiago Zoochila', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'504', 
            'name'=>'Nuevo Zoquiápam', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'505', 
            'name'=>'Santo Domingo Ingenio', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'506', 
            'name'=>'Santo Domingo Albarradas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'507', 
            'name'=>'Santo Domingo Armenta', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'508', 
            'name'=>'Santo Domingo Chihuitán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'509', 
            'name'=>'Santo Domingo de Morelos', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'510', 
            'name'=>'Santo Domingo Ixcatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'511', 
            'name'=>'Santo Domingo Nuxaá', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'512', 
            'name'=>'Santo Domingo Ozolotepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'513', 
            'name'=>'Santo Domingo Petapa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'514', 
            'name'=>'Santo Domingo Roayaga', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'515', 
            'name'=>'Santo Domingo Tehuantepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'516', 
            'name'=>'Santo Domingo Teojomulco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'517', 
            'name'=>'Santo Domingo Tepuxtepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'518', 
            'name'=>'Santo Domingo Tlatayápam', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'519', 
            'name'=>'Santo Domingo Tomaltepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'520', 
            'name'=>'Santo Domingo Tonalá', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'521', 
            'name'=>'Santo Domingo Tonaltepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'522', 
            'name'=>'Santo Domingo Xagacía', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'523', 
            'name'=>'Santo Domingo Yanhuitlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'524', 
            'name'=>'Santo Domingo Yodohino', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'525', 
            'name'=>'Santo Domingo Zanatepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'526', 
            'name'=>'Santos Reyes Nopala', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'527', 
            'name'=>'Santos Reyes Pápalo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'528', 
            'name'=>'Santos Reyes Tepejillo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'529', 
            'name'=>'Santos Reyes Yucuná', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'530', 
            'name'=>'Santo Tomás Jalieza', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'531', 
            'name'=>'Santo Tomás Mazaltepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'532', 
            'name'=>'Santo Tomás Ocotepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'533', 
            'name'=>'Santo Tomás Tamazulapan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'534', 
            'name'=>'San Vicente Coatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'535', 
            'name'=>'San Vicente Lachixío', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'536', 
            'name'=>'San Vicente Nuñú', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'537', 
            'name'=>'Silacayoápam', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'538', 
            'name'=>'Sitio de Xitlapehua', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'539', 
            'name'=>'Soledad Etla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'540', 
            'name'=>'Villa de Tamazulápam del Progreso', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'541', 
            'name'=>'Tanetze de Zaragoza', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'542', 
            'name'=>'Taniche', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'543', 
            'name'=>'Tataltepec de Valdés', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'544', 
            'name'=>'Teococuilco de Marcos Pérez', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'545', 
            'name'=>'Teotitlán de Flores Magón', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'546', 
            'name'=>'Teotitlán del Valle', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'547', 
            'name'=>'Teotongo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'548', 
            'name'=>'Tepelmeme Villa de Morelos', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'549', 
            'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de la Independencia de Oaxaca',
            'active'=> 1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'550', 
            'name'=>'San Jerónimo Tlacochahuaya', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'551', 
            'name'=>'Tlacolula de Matamoros', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'552', 
            'name'=>'Tlacotepec Plumas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'553', 
            'name'=>'Tlalixtac de Cabrera', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'554', 
            'name'=>'Totontepec Villa de Morelos', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'555', 
            'name'=>'Trinidad Zaachila', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'556', 
            'name'=>'La Trinidad Vista Hermosa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'557', 
            'name'=>'Unión Hidalgo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'558', 
            'name'=>'Valerio Trujano', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'559', 
            'name'=>'San Juan Bautista Valle Nacional', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'560', 
            'name'=>'Villa Díaz Ordaz', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'561', 
            'name'=>'Yaxe', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'562', 
            'name'=>'Magdalena Yodocono de Porfirio Díaz', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'563', 
            'name'=>'Yogana', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'564', 
            'name'=>'Yutanduchi de Guerrero', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'565', 
            'name'=>'Villa de Zaachila', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'566', 
            'name'=>'San Mateo Yucutindoo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'567', 
            'name'=>'Zapotitlán Lagunas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'568', 
            'name'=>'Zapotitlán Palmas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'569', 
            'name'=>'Santa Inés de Zaragoza', 
            'active'=>1
        ]);
City::create([

        'state_id'=>20, 
            'key'=>'570', 
            'name'=>'Zimatlán de Álvarez', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'001', 
            'name'=>'Acajete', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'002', 
            'name'=>'Acateno', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'003', 
            'name'=>'Acatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'004', 
            'name'=>'Acatzingo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'005', 
            'name'=>'Acteopan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'006', 
            'name'=>'Ahuacatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'007', 
            'name'=>'Ahuatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'008', 
            'name'=>'Ahuazotepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'009', 
            'name'=>'Ahuehuetitla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'010', 
            'name'=>'Ajalpan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'011', 
            'name'=>'Albino Zertuche', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'012', 
            'name'=>'Aljojuca', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'013', 
            'name'=>'Altepexi', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'014', 
            'name'=>'Amixtlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'015', 
            'name'=>'Amozoc', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'016', 
            'name'=>'Aquixtla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'017', 
            'name'=>'Atempan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'018', 
            'name'=>'Atexcal', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'019', 
            'name'=>'Atlixco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'020', 
            'name'=>'Atoyatempan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'021', 
            'name'=>'Atzala', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'022', 
            'name'=>'Atzitzihuacán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'023', 
            'name'=>'Atzitzintla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'024', 
            'name'=>'Axutla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'025', 
            'name'=>'Ayotoxco de Guerrero', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'026', 
            'name'=>'Calpan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'027', 
            'name'=>'Caltepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'028', 
            'name'=>'Camocuautla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'029', 
            'name'=>'Caxhuacan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'030', 
            'name'=>'Coatepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'031', 
            'name'=>'Coatzingo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'032', 
            'name'=>'Cohetzala', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'033', 
            'name'=>'Cohuecan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'034', 
            'name'=>'Coronango', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'035', 
            'name'=>'Coxcatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'036', 
            'name'=>'Coyomeapan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'037', 
            'name'=>'Coyotepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'038', 
            'name'=>'Cuapiaxtla de Madero', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'039', 
            'name'=>'Cuautempan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'040', 
            'name'=>'Cuautinchán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'041', 
            'name'=>'Cuautlancingo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'042', 
            'name'=>'Cuayuca de Andrade', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'043', 
            'name'=>'Cuetzalan del Progreso', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'044', 
            'name'=>'Cuyoaco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'045', 
            'name'=>'Chalchicomula de Sesma', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'046', 
            'name'=>'Chapulco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'047', 
            'name'=>'Chiautla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'048', 
            'name'=>'Chiautzingo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'049', 
            'name'=>'Chiconcuautla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'050', 
            'name'=>'Chichiquila', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'051', 
            'name'=>'Chietla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'052', 
            'name'=>'Chigmecatitlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'053', 
            'name'=>'Chignahuapan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'054', 
            'name'=>'Chignautla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'055', 
            'name'=>'Chila', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'056', 
            'name'=>'Chila de la Sal', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'057', 
            'name'=>'Honey', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'058', 
            'name'=>'Chilchotla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'059', 
            'name'=>'Chinantla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'060', 
            'name'=>'Domingo Arenas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'061', 
            'name'=>'Eloxochitlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'062', 
            'name'=>'Epatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'063', 
            'name'=>'Esperanza', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'064', 
            'name'=>'Francisco Z. Mena', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'065', 
            'name'=>'General Felipe Ángeles', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'066', 
            'name'=>'Guadalupe', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'067', 
            'name'=>'Guadalupe Victoria', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'068', 
            'name'=>'Hermenegildo Galeana', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'069', 
            'name'=>'Huaquechula', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'070', 
            'name'=>'Huatlatlauca', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'071', 
            'name'=>'Huauchinango', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'072', 
            'name'=>'Huehuetla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'073', 
            'name'=>'Huehuetlán el Chico', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'074', 
            'name'=>'Huejotzingo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'075', 
            'name'=>'Hueyapan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'076', 
            'name'=>'Hueytamalco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'077', 
            'name'=>'Hueytlalpan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'078', 
            'name'=>'Huitzilan de Serdán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'079', 
            'name'=>'Huitziltepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'080', 
            'name'=>'Atlequizayan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'081', 
            'name'=>'Ixcamilpa de Guerrero', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'082', 
            'name'=>'Ixcaquixtla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'083', 
            'name'=>'Ixtacamaxtitlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'084', 
            'name'=>'Ixtepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'085', 
            'name'=>'Izúcar de Matamoros', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'086', 
            'name'=>'Jalpan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'087', 
            'name'=>'Jolalpan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'088', 
            'name'=>'Jonotla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'089', 
            'name'=>'Jopala', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'090', 
            'name'=>'Juan C. Bonilla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'091', 
            'name'=>'Juan Galindo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'092', 
            'name'=>'Juan N. Méndez', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'093', 
            'name'=>'Lafragua', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'094', 
            'name'=>'Libres', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'095', 
            'name'=>'La Magdalena Tlatlauquitepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'096', 
            'name'=>'Mazapiltepec de Juárez', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'097', 
            'name'=>'Mixtla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'098', 
            'name'=>'Molcaxac', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'099', 
            'name'=>'Cañada Morelos', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'100', 
            'name'=>'Naupan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'101', 
            'name'=>'Nauzontla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'102', 
            'name'=>'Nealtican', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'103', 
            'name'=>'Nicolás Bravo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'104', 
            'name'=>'Nopalucan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'105', 
            'name'=>'Ocotepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'106', 
            'name'=>'Ocoyucan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'107', 
            'name'=>'Olintla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'108', 
            'name'=>'Oriental', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'109', 
            'name'=>'Pahuatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'110', 
            'name'=>'Palmar de Bravo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'111', 
            'name'=>'Pantepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'112', 
            'name'=>'Petlalcingo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'113', 
            'name'=>'Piaxtla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'114', 
            'name'=>'Puebla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'115', 
            'name'=>'Quecholac', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'116', 
            'name'=>'Quimixtlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'117', 
            'name'=>'Rafael Lara Grajales', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'118', 
            'name'=>'Los Reyes de Juárez', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'119', 
            'name'=>'San Andrés Cholula', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'120', 
            'name'=>'San Antonio Cañada', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'121', 
            'name'=>'San Diego la Mesa Tochimiltzingo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'122', 
            'name'=>'San Felipe Teotlalcingo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'123', 
            'name'=>'San Felipe Tepatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'124', 
            'name'=>'San Gabriel Chilac', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'125', 
            'name'=>'San Gregorio Atzompa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'126', 
            'name'=>'San Jerónimo Tecuanipan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'127', 
            'name'=>'San Jerónimo Xayacatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'128', 
            'name'=>'San José Chiapa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'129', 
            'name'=>'San José Miahuatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'130', 
            'name'=>'San Juan Atenco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'131', 
            'name'=>'San Juan Atzompa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'132', 
            'name'=>'San Martín Texmelucan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'133', 
            'name'=>'San Martín Totoltepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'134', 
            'name'=>'San Matías Tlalancaleca', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'135', 
            'name'=>'San Miguel Ixitlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'136', 
            'name'=>'San Miguel Xoxtla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'137', 
            'name'=>'San Nicolás Buenos Aires', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'138', 
            'name'=>'San Nicolás de los Ranchos', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'139', 
            'name'=>'San Pablo Anicano', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'140', 
            'name'=>'San Pedro Cholula', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'141', 
            'name'=>'San Pedro Yeloixtlahuaca', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'142', 
            'name'=>'San Salvador el Seco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'143', 
            'name'=>'San Salvador el Verde', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'144', 
            'name'=>'San Salvador Huixcolotla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'145', 
            'name'=>'San Sebastián Tlacotepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'146', 
            'name'=>'Santa Catarina Tlaltempan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'147', 
            'name'=>'Santa Inés Ahuatempan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'148', 
            'name'=>'Santa Isabel Cholula', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'149', 
            'name'=>'Santiago Miahuatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'150', 
            'name'=>'Huehuetlán el Grande', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'151', 
            'name'=>'Santo Tomás Hueyotlipan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'152', 
            'name'=>'Soltepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'153', 
            'name'=>'Tecali de Herrera', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'154', 
            'name'=>'Tecamachalco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'155', 
            'name'=>'Tecomatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'156', 
            'name'=>'Tehuacán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'157', 
            'name'=>'Tehuitzingo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'158', 
            'name'=>'Tenampulco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'159', 
            'name'=>'Teopantlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'160', 
            'name'=>'Teotlalco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'161', 
            'name'=>'Tepanco de López', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'162', 
            'name'=>'Tepango de Rodríguez', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'163', 
            'name'=>'Tepatlaxco de Hidalgo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'164', 
            'name'=>'Tepeaca', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'165', 
            'name'=>'Tepemaxalco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'166', 
            'name'=>'Tepeojuma', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'167', 
            'name'=>'Tepetzintla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'168', 
            'name'=>'Tepexco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'169', 
            'name'=>'Tepexi de Rodríguez', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'170', 
            'name'=>'Tepeyahualco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'171', 
            'name'=>'Tepeyahualco de Cuauhtémoc', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'172', 
            'name'=>'Tetela de Ocampo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'173', 
            'name'=>'Teteles de Avila Castillo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'174', 
            'name'=>'Teziutlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'175', 
            'name'=>'Tianguismanalco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'176', 
            'name'=>'Tilapa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'177', 
            'name'=>'Tlacotepec de Benito Juárez', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'178', 
            'name'=>'Tlacuilotepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'179', 
            'name'=>'Tlachichuca', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'180', 
            'name'=>'Tlahuapan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'181', 
            'name'=>'Tlaltenango', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'182', 
            'name'=>'Tlanepantla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'183', 
            'name'=>'Tlaola', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'184', 
            'name'=>'Tlapacoya', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'185', 
            'name'=>'Tlapanalá', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'186', 
            'name'=>'Tlatlauquitepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'187', 
            'name'=>'Tlaxco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'188', 
            'name'=>'Tochimilco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'189', 
            'name'=>'Tochtepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'190', 
            'name'=>'Totoltepec de Guerrero', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'191', 
            'name'=>'Tulcingo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'192', 
            'name'=>'Tuzamapan de Galeana', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'193', 
            'name'=>'Tzicatlacoyan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'194', 
            'name'=>'Venustiano Carranza', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'195', 
            'name'=>'Vicente Guerrero', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'196', 
            'name'=>'Xayacatlán de Bravo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'197', 
            'name'=>'Xicotepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'198', 
            'name'=>'Xicotlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'199', 
            'name'=>'Xiutetelco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'200', 
            'name'=>'Xochiapulco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'201', 
            'name'=>'Xochiltepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'202', 
            'name'=>'Xochitlán de Vicente Suárez', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'203', 
            'name'=>'Xochitlán Todos Santos', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'204', 
            'name'=>'Yaonáhuac', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'205', 
            'name'=>'Yehualtepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'206', 
            'name'=>'Zacapala', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'207', 
            'name'=>'Zacapoaxtla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'208', 
            'name'=>'Zacatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'209', 
            'name'=>'Zapotitlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'210', 
            'name'=>'Zapotitlán de Méndez', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'211', 
            'name'=>'Zaragoza', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'212', 
            'name'=>'Zautla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'213', 
            'name'=>'Zihuateutla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'214', 
            'name'=>'Zinacatepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'215', 
            'name'=>'Zongozotla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'216', 
            'name'=>'Zoquiapan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>21, 
            'key'=>'217', 
            'name'=>'Zoquitlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>22, 
            'key'=>'001', 
            'name'=>'Amealco de Bonfil', 
            'active'=>1
        ]);
City::create([

        'state_id'=>22, 
            'key'=>'002', 
            'name'=>'Pinal de Amoles', 
            'active'=>1
        ]);
City::create([

        'state_id'=>22, 
            'key'=>'003', 
            'name'=>'Arroyo Seco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>22, 
            'key'=>'004', 
            'name'=>'Cadereyta de Montes', 
            'active'=>1
        ]);
City::create([

        'state_id'=>22, 
            'key'=>'005', 
            'name'=>'Colón', 
            'active'=>1
        ]);
City::create([

        'state_id'=>22, 
            'key'=>'006', 
            'name'=>'Corregidora', 
            'active'=>1
        ]);
City::create([

        'state_id'=>22, 
            'key'=>'007', 
            'name'=>'Ezequiel Montes', 
            'active'=>1
        ]);
City::create([

        'state_id'=>22, 
            'key'=>'008', 
            'name'=>'Huimilpan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>22, 
            'key'=>'009', 
            'name'=>'Jalpan de Serra', 
            'active'=>1
        ]);
City::create([

        'state_id'=>22, 
            'key'=>'010', 
            'name'=>'Landa de Matamoros', 
            'active'=>1
        ]);
City::create([

        'state_id'=>22, 
            'key'=>'011', 
            'name'=>'El Marqués', 
            'active'=>1
        ]);
City::create([

        'state_id'=>22, 
            'key'=>'012', 
            'name'=>'Pedro Escobedo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>22, 
            'key'=>'013', 
            'name'=>'Peñamiller', 
            'active'=>1
        ]);
City::create([

        'state_id'=>22, 
            'key'=>'014', 
            'name'=>'Querétaro', 
            'active'=>1
        ]);
City::create([

        'state_id'=>22, 
            'key'=>'015', 
            'name'=>'San Joaquín', 
            'active'=>1
        ]);
City::create([

        'state_id'=>22, 
            'key'=>'016', 
            'name'=>'San Juan del Río', 
            'active'=>1
        ]);
City::create([

        'state_id'=>22, 
            'key'=>'017', 
            'name'=>'Tequisquiapan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>22, 
            'key'=>'018', 
            'name'=>'Tolimán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>23, 
            'key'=>'001', 
            'name'=>'Cozumel', 
            'active'=>1
        ]);
City::create([

        'state_id'=>23, 
            'key'=>'002', 
            'name'=>'Felipe Carrillo Puerto', 
            'active'=>1
        ]);
City::create([

        'state_id'=>23, 
            'key'=>'003', 
            'name'=>'Isla Mujeres', 
            'active'=>1
        ]);
City::create([

        'state_id'=>23, 
            'key'=>'004', 
            'name'=>'Othón P. Blanco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>23, 
            'key'=>'005', 
            'name'=>'Benito Juárez', 
            'active'=>1
        ]);
City::create([

        'state_id'=>23, 
            'key'=>'006', 
            'name'=>'José María Morelos', 
            'active'=>1
        ]);
City::create([

        'state_id'=>23, 
            'key'=>'007', 
            'name'=>'Lázaro Cárdenas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>23, 
            'key'=>'008', 
            'name'=>'Solidaridad', 
            'active'=>1
        ]);
City::create([

        'state_id'=>23, 
            'key'=>'009', 
            'name'=>'Tulum', 
            'active'=>1
        ]);
City::create([

        'state_id'=>23, 
            'key'=>'010', 
            'name'=>'Bacalar', 
            'active'=>1
        ]);
City::create([

        'state_id'=>23, 
            'key'=>'011', 
            'name'=>'Puerto Morelos', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'001', 
            'name'=>'Ahualulco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'002', 
            'name'=>'Alaquines', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'003', 
            'name'=>'Aquismón', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'004', 
            'name'=>'Armadillo de los Infante', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'005', 
            'name'=>'Cárdenas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'006', 
            'name'=>'Catorce', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'007', 
            'name'=>'Cedral', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'008', 
            'name'=>'Cerritos', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'009', 
            'name'=>'Cerro de San Pedro', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'010', 
            'name'=>'Ciudad del Maíz', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'011', 
            'name'=>'Ciudad Fernández', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'012', 
            'name'=>'Tancanhuitz', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'013', 
            'name'=>'Ciudad Valles', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'014', 
            'name'=>'Coxcatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'015', 
            'name'=>'Charcas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'016', 
            'name'=>'Ebano', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'017', 
            'name'=>'Guadalcázar', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'018', 
            'name'=>'Huehuetlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'019', 
            'name'=>'Lagunillas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'020', 
            'name'=>'Matehuala', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'021', 
            'name'=>'Mexquitic de Carmona', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'022', 
            'name'=>'Moctezuma', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'023', 
            'name'=>'Rayón', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'024', 
            'name'=>'Rioverde', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'025', 
            'name'=>'Salinas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'026', 
            'name'=>'San Antonio', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'027', 
            'name'=>'San Ciro de Acosta', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'028', 
            'name'=>'San Luis Potosí', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'029', 
            'name'=>'San Martín Chalchicuautla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'030', 
            'name'=>'San Nicolás Tolentino', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'031', 
            'name'=>'Santa Catarina', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'032', 
            'name'=>'Santa María del Río', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'033', 
            'name'=>'Santo Domingo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'034', 
            'name'=>'San Vicente Tancuayalab', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'035', 
            'name'=>'Soledad de Graciano Sánchez', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'036', 
            'name'=>'Tamasopo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'037', 
            'name'=>'Tamazunchale', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'038', 
            'name'=>'Tampacán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'039', 
            'name'=>'Tampamolón Corona', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'040', 
            'name'=>'Tamuín', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'041', 
            'name'=>'Tanlajás', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'042', 
            'name'=>'Tanquián de Escobedo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'043', 
            'name'=>'Tierra Nueva', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'044', 
            'name'=>'Vanegas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'045', 
            'name'=>'Venado', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'046', 
            'name'=>'Villa de Arriaga', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'047', 
            'name'=>'Villa de Guadalupe', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'048', 
            'name'=>'Villa de la Paz', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'049', 
            'name'=>'Villa de Ramos', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'050', 
            'name'=>'Villa de Reyes', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'051', 
            'name'=>'Villa Hidalgo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'052', 
            'name'=>'Villa Juárez', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'053', 
            'name'=>'Axtla de Terrazas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'054', 
            'name'=>'Xilitla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'055', 
            'name'=>'Zaragoza', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'056', 
            'name'=>'Villa de Arista', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'057', 
            'name'=>'Matlapa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>24, 
            'key'=>'058', 
            'name'=>'El Naranjo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>25, 
            'key'=>'001', 
            'name'=>'Ahome', 
            'active'=>1
        ]);
City::create([

        'state_id'=>25, 
            'key'=>'002', 
            'name'=>'Angostura', 
            'active'=>1
        ]);
City::create([

        'state_id'=>25, 
            'key'=>'003', 
            'name'=>'Badiraguato', 
            'active'=>1
        ]);
City::create([

        'state_id'=>25, 
            'key'=>'004', 
            'name'=>'Concordia', 
            'active'=>1
        ]);
City::create([

        'state_id'=>25, 
            'key'=>'005', 
            'name'=>'Cosalá', 
            'active'=>1
        ]);
City::create([

        'state_id'=>25, 
            'key'=>'006', 
            'name'=>'Culiacán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>25, 
            'key'=>'007', 
            'name'=>'Choix', 
            'active'=>1
        ]);
City::create([

        'state_id'=>25, 
            'key'=>'008', 
            'name'=>'Elota', 
            'active'=>1
        ]);
City::create([

        'state_id'=>25, 
            'key'=>'009', 
            'name'=>'Escuinapa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>25, 
            'key'=>'010', 
            'name'=>'El Fuerte', 
            'active'=>1
        ]);
City::create([

        'state_id'=>25, 
            'key'=>'011', 
            'name'=>'Guasave', 
            'active'=>1
        ]);
City::create([

        'state_id'=>25, 
            'key'=>'012', 
            'name'=>'Mazatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>25, 
            'key'=>'013', 
            'name'=>'Mocorito', 
            'active'=>1
        ]);
City::create([

        'state_id'=>25, 
            'key'=>'014', 
            'name'=>'Rosario', 
            'active'=>1
        ]);
City::create([

        'state_id'=>25, 
            'key'=>'015', 
            'name'=>'Salvador Alvarado', 
            'active'=>1
        ]);
City::create([

        'state_id'=>25, 
            'key'=>'016', 
            'name'=>'San Ignacio', 
            'active'=>1
        ]);
City::create([

        'state_id'=>25, 
            'key'=>'017', 
            'name'=>'Sinaloa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>25, 
            'key'=>'018', 
            'name'=>'Navolato', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'001', 
            'name'=>'Aconchi', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'002', 
            'name'=>'Agua Prieta', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'003', 
            'name'=>'Alamos', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'004', 
            'name'=>'Altar', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'005', 
            'name'=>'Arivechi', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'006', 
            'name'=>'Arizpe', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'007', 
            'name'=>'Atil', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'008', 
            'name'=>'Bacadéhuachi', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'009', 
            'name'=>'Bacanora', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'010', 
            'name'=>'Bacerac', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'011', 
            'name'=>'Bacoachi', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'012', 
            'name'=>'Bácum', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'013', 
            'name'=>'Banámichi', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'014', 
            'name'=>'Baviácora', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'015', 
            'name'=>'Bavispe', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'016', 
            'name'=>'Benjamín Hill', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'017', 
            'name'=>'Caborca', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'018', 
            'name'=>'Cajeme', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'019', 
            'name'=>'Cananea', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'020', 
            'name'=>'Carbó', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'021', 
            'name'=>'La Colorada', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'022', 
            'name'=>'Cucurpe', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'023', 
            'name'=>'Cumpas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'024', 
            'name'=>'Divisaderos', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'025', 
            'name'=>'Empalme', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'026', 
            'name'=>'Etchojoa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'027', 
            'name'=>'Fronteras', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'028', 
            'name'=>'Granados', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'029', 
            'name'=>'Guaymas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'030', 
            'name'=>'Hermosillo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'031', 
            'name'=>'Huachinera', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'032', 
            'name'=>'Huásabas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'033', 
            'name'=>'Huatabampo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'034', 
            'name'=>'Huépac', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'035', 
            'name'=>'Imuris', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'036', 
            'name'=>'Magdalena', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'037', 
            'name'=>'Mazatán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'038', 
            'name'=>'Moctezuma', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'039', 
            'name'=>'Naco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'040', 
            'name'=>'Nácori Chico', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'041', 
            'name'=>'Nacozari de García', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'042', 
            'name'=>'Navojoa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'043', 
            'name'=>'Nogales', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'044', 
            'name'=>'Onavas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'045', 
            'name'=>'Opodepe', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'046', 
            'name'=>'Oquitoa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'047', 
            'name'=>'Pitiquito', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'048', 
            'name'=>'Puerto Peñasco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'049', 
            'name'=>'Quiriego', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'050', 
            'name'=>'Rayón', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'051', 
            'name'=>'Rosario', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'052', 
            'name'=>'Sahuaripa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'053', 
            'name'=>'San Felipe de Jesús', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'054', 
            'name'=>'San Javier', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'055', 
            'name'=>'San Luis Río Colorado', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'056', 
            'name'=>'San Miguel de Horcasitas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'057', 
            'name'=>'San Pedro de la Cueva', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'058', 
            'name'=>'Santa Ana', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'059', 
            'name'=>'Santa Cruz', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'060', 
            'name'=>'Sáric', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'061', 
            'name'=>'Soyopa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'062', 
            'name'=>'Suaqui Grande', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'063', 
            'name'=>'Tepache', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'064', 
            'name'=>'Trincheras', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'065', 
            'name'=>'Tubutama', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'066', 
            'name'=>'Ures', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'067', 
            'name'=>'Villa Hidalgo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'068', 
            'name'=>'Villa Pesqueira', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'069', 
            'name'=>'Yécora', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'070', 
            'name'=>'General Plutarco Elías Calles', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'071', 
            'name'=>'Benito Juárez', 
            'active'=>1
        ]);
City::create([

        'state_id'=>26, 
            'key'=>'072', 
            'name'=>'San Ignacio Río Muerto', 
            'active'=>1
        ]);
City::create([

        'state_id'=>27, 
            'key'=>'001', 
            'name'=>'Balancán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>27, 
            'key'=>'002', 
            'name'=>'Cárdenas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>27, 
            'key'=>'003', 
            'name'=>'Centla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>27, 
            'key'=>'004', 
            'name'=>'Centro', 
            'active'=>1
        ]);
City::create([

        'state_id'=>27, 
            'key'=>'005', 
            'name'=>'Comalcalco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>27, 
            'key'=>'006', 
            'name'=>'Cunduacán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>27, 
            'key'=>'007', 
            'name'=>'Emiliano Zapata', 
            'active'=>1
]);
        City::create([

            'state_id'=>27, 
            'key'=>'008', 
            'name'=>'Huimanguillo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>27, 
            'key'=>'009', 
            'name'=>'Jalapa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>27, 
            'key'=>'010', 
            'name'=>'Jalpa de Méndez', 
            'active'=>1
        ]);
City::create([

        'state_id'=>27, 
            'key'=>'011', 
            'name'=>'Jonuta', 
            'active'=>1
        ]);
City::create([

        'state_id'=>27, 
            'key'=>'012', 
            'name'=>'Macuspana', 
            'active'=>1
        ]);
City::create([

        'state_id'=>27, 
            'key'=>'013', 
            'name'=>'Nacajuca', 
            'active'=>1
        ]);
City::create([

        'state_id'=>27, 
            'key'=>'014', 
            'name'=>'Paraíso', 
            'active'=>1
        ]);
City::create([

        'state_id'=>27, 
            'key'=>'015', 
            'name'=>'Tacotalpa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>27, 
            'key'=>'016', 
            'name'=>'Teapa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>27, 
            'key'=>'017', 
            'name'=>'Tenosique', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'001', 
            'name'=>'Abasolo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'002', 
            'name'=>'Aldama', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'003', 
            'name'=>'Altamira', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'004', 
            'name'=>'Antiguo Morelos', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'005', 
            'name'=>'Burgos', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'006', 
            'name'=>'Bustamante', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'007', 
            'name'=>'Camargo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'008', 
            'name'=>'Casas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'009', 
            'name'=>'Ciudad Madero', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'010', 
            'name'=>'Cruillas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'011', 
            'name'=>'Gómez Farías', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'012', 
            'name'=>'González', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'013', 
            'name'=>'Güémez', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'014', 
            'name'=>'Guerrero', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'015', 
            'name'=>'Gustavo Díaz Ordaz', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'016', 
            'name'=>'Hidalgo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'017', 
            'name'=>'Jaumave', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'018', 
            'name'=>'Jiménez', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'019', 
            'name'=>'Llera', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'020', 
            'name'=>'Mainero', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'021', 
            'name'=>'El Mante', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'022', 
            'name'=>'Matamoros', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'023', 
            'name'=>'Méndez', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'024', 
            'name'=>'Mier', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'025', 
            'name'=>'Miguel Alemán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'026', 
            'name'=>'Miquihuana', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'027', 
            'name'=>'Nuevo Laredo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'028', 
            'name'=>'Nuevo Morelos', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'029', 
            'name'=>'Ocampo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'030', 
            'name'=>'Padilla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'031', 
            'name'=>'Palmillas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'032', 
            'name'=>'Reynosa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'033', 
            'name'=>'Río Bravo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'034', 
            'name'=>'San Carlos', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'035', 
            'name'=>'San Fernando', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'036', 
            'name'=>'San Nicolás', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'037', 
            'name'=>'Soto la Marina', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'038', 
            'name'=>'Tampico', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'039', 
            'name'=>'Tula', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'040', 
            'name'=>'Valle Hermoso', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'041', 
            'name'=>'Victoria', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'042', 
            'name'=>'Villagrán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>28, 
            'key'=>'043', 
            'name'=>'Xicoténcatl', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'001', 
            'name'=>'Amaxac de Guerrero', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'002', 
            'name'=>'Apetatitlán de Antonio Carvajal', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'003', 
            'name'=>'Atlangatepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'004', 
            'name'=>'Atltzayanca', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'005', 
            'name'=>'Apizaco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'006', 
            'name'=>'Calpulalpan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'007', 
            'name'=>'El Carmen Tequexquitla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'008', 
            'name'=>'Cuapiaxtla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'009', 
            'name'=>'Cuaxomulco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'010', 
            'name'=>'Chiautempan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'011', 
            'name'=>'Muñoz de Domingo Arenas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'012', 
            'name'=>'Españita', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'013', 
            'name'=>'Huamantla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'014', 
            'name'=>'Hueyotlipan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'015', 
            'name'=>'Ixtacuixtla de Mariano Matamoros', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'016', 
            'name'=>'Ixtenco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'017', 
            'name'=>'Mazatecochco de José María Morelos', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'018', 
            'name'=>'Contla de Juan Cuamatzi', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'019', 
            'name'=>'Tepetitla de Lardizábal', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'020', 
            'name'=>'Sanctórum de Lázaro Cárdenas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'021', 
            'name'=>'Nanacamilpa de Mariano Arista', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'022', 
            'name'=>'Acuamanala de Miguel Hidalgo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'023', 
            'name'=>'Natívitas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'024', 
            'name'=>'Panotla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'025', 
            'name'=>'San Pablo del Monte', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'026', 
            'name'=>'Santa Cruz Tlaxcala', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'027', 
            'name'=>'Tenancingo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'028', 
            'name'=>'Teolocholco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'029', 
            'name'=>'Tepeyanco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'030', 
            'name'=>'Terrenate', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'031', 
            'name'=>'Tetla de la Solidaridad', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'032', 
            'name'=>'Tetlatlahuca', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'033', 
            'name'=>'Tlaxcala', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'034', 
            'name'=>'Tlaxco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'035', 
            'name'=>'Tocatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'036', 
            'name'=>'Totolac', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'037', 
            'name'=>'Ziltlaltépec de Trinidad Sánchez Santos', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'038', 
            'name'=>'Tzompantepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'039', 
            'name'=>'Xaloztoc', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'040', 
            'name'=>'Xaltocan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'041', 
            'name'=>'Papalotla de Xicohténcatl', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'042', 
            'name'=>'Xicohtzinco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'043', 
            'name'=>'Yauhquemehcan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'044', 
            'name'=>'Zacatelco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'045', 
            'name'=>'Benito Juárez', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'046', 
            'name'=>'Emiliano Zapata', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'047', 
            'name'=>'Lázaro Cárdenas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'048', 
            'name'=>'La Magdalena Tlaltelulco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'049', 
            'name'=>'San Damián Texóloc', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'050', 
            'name'=>'San Francisco Tetlanohcan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'051', 
            'name'=>'San Jerónimo Zacualpan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'052', 
            'name'=>'San José Teacalco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'053', 
            'name'=>'San Juan Huactzinco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'054', 
            'name'=>'San Lorenzo Axocomanitla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'055', 
            'name'=>'San Lucas Tecopilco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'056', 
            'name'=>'Santa Ana Nopalucan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'057', 
            'name'=>'Santa Apolonia Teacalco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'058', 
            'name'=>'Santa Catarina Ayometla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'059', 
            'name'=>'Santa Cruz Quilehtla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>29, 
            'key'=>'060', 
            'name'=>'Santa Isabel Xiloxoxtla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'001', 
            'name'=>'Acajete', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'002', 
            'name'=>'Acatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'003', 
            'name'=>'Acayucan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'004', 
            'name'=>'Actopan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'005', 
            'name'=>'Acula', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'006', 
            'name'=>'Acultzingo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'007', 
            'name'=>'Camarón de Tejeda', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'008', 
            'name'=>'Alpatláhuac', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'009', 
            'name'=>'Alto Lucero de Gutiérrez Barrios', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'010', 
            'name'=>'Altotonga', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'011', 
            'name'=>'Alvarado', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'012', 
            'name'=>'Amatitlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'013', 
            'name'=>'Naranjos Amatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'014', 
            'name'=>'Amatlán de los Reyes', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'015', 
            'name'=>'Angel R. Cabada', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'016', 
            'name'=>'La Antigua', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'017', 
            'name'=>'Apazapan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'018', 
            'name'=>'Aquila', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'019', 
            'name'=>'Astacinga', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'020', 
            'name'=>'Atlahuilco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'021', 
            'name'=>'Atoyac', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'022', 
            'name'=>'Atzacan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'023', 
            'name'=>'Atzalan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'024', 
            'name'=>'Tlaltetela', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'025', 
            'name'=>'Ayahualulco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'026', 
            'name'=>'Banderilla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'027', 
            'name'=>'Benito Juárez', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'028', 
            'name'=>'Boca del Río', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'029', 
            'name'=>'Calcahualco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'030', 
            'name'=>'Camerino Z. Mendoza', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'031', 
            'name'=>'Carrillo Puerto', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'032', 
            'name'=>'Catemaco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'033', 
            'name'=>'Cazones de Herrera', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'034', 
            'name'=>'Cerro Azul', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'035', 
            'name'=>'Citlaltépetl', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'036', 
            'name'=>'Coacoatzintla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'037', 
            'name'=>'Coahuitlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'038', 
            'name'=>'Coatepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'039', 
            'name'=>'Coatzacoalcos', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'040', 
            'name'=>'Coatzintla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'041', 
            'name'=>'Coetzala', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'042', 
            'name'=>'Colipa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'043', 
            'name'=>'Comapa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'044', 
            'name'=>'Córdoba', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'045', 
            'name'=>'Cosamaloapan de Carpio', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'046', 
            'name'=>'Cosautlán de Carvajal', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'047', 
            'name'=>'Coscomatepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'048', 
            'name'=>'Cosoleacaque', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'049', 
            'name'=>'Cotaxtla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'050', 
            'name'=>'Coxquihui', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'051', 
            'name'=>'Coyutla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'052', 
            'name'=>'Cuichapa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'053', 
            'name'=>'Cuitláhuac', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'054', 
            'name'=>'Chacaltianguis', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'055', 
            'name'=>'Chalma', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'056', 
            'name'=>'Chiconamel', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'057', 
            'name'=>'Chiconquiaco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'058', 
            'name'=>'Chicontepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'059', 
            'name'=>'Chinameca', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'060', 
            'name'=>'Chinampa de Gorostiza', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'061', 
            'name'=>'Las Choapas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'062', 
            'name'=>'Chocamán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'063', 
            'name'=>'Chontla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'064', 
            'name'=>'Chumatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'065', 
            'name'=>'Emiliano Zapata', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'066', 
            'name'=>'Espinal', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'067', 
            'name'=>'Filomeno Mata', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'068', 
            'name'=>'Fortín', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'069', 
            'name'=>'Gutiérrez Zamora', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'070', 
            'name'=>'Hidalgotitlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'071', 
            'name'=>'Huatusco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'072', 
            'name'=>'Huayacocotla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'073', 
            'name'=>'Hueyapan de Ocampo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'074', 
            'name'=>'Huiloapan de Cuauhtémoc', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'075', 
            'name'=>'Ignacio de la Llave', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'076', 
            'name'=>'Ilamatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'077', 
            'name'=>'Isla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'078', 
            'name'=>'Ixcatepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'079', 
            'name'=>'Ixhuacán de los Reyes', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'080', 
            'name'=>'Ixhuatlán del Café', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'081', 
            'name'=>'Ixhuatlancillo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'082', 
            'name'=>'Ixhuatlán del Sureste', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'083', 
            'name'=>'Ixhuatlán de Madero', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'084', 
            'name'=>'Ixmatlahuacan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'085', 
            'name'=>'Ixtaczoquitlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'086', 
            'name'=>'Jalacingo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'087', 
            'name'=>'Xalapa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'088', 
            'name'=>'Jalcomulco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'089', 
            'name'=>'Jáltipan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'090', 
            'name'=>'Jamapa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'091', 
            'name'=>'Jesús Carranza', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'092', 
            'name'=>'Xico', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'093', 
            'name'=>'Jilotepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'094', 
            'name'=>'Juan Rodríguez Clara', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'095', 
            'name'=>'Juchique de Ferrer', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'096', 
            'name'=>'Landero y Coss', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'097', 
            'name'=>'Lerdo de Tejada', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'098', 
            'name'=>'Magdalena', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'099', 
            'name'=>'Maltrata', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'100', 
            'name'=>'Manlio Fabio Altamirano', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'101', 
            'name'=>'Mariano Escobedo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'102', 
            'name'=>'Martínez de la Torre', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'103', 
            'name'=>'Mecatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'104', 
            'name'=>'Mecayapan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'105', 
            'name'=>'Medellín de Bravo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'106', 
            'name'=>'Miahuatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'107', 
            'name'=>'Las Minas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'108', 
            'name'=>'Minatitlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'109', 
            'name'=>'Misantla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'110', 
            'name'=>'Mixtla de Altamirano', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'111', 
            'name'=>'Moloacán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'112', 
            'name'=>'Naolinco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'113', 
            'name'=>'Naranjal', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'114', 
            'name'=>'Nautla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'115', 
            'name'=>'Nogales', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'116', 
            'name'=>'Oluta', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'117', 
            'name'=>'Omealca', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'118', 
            'name'=>'Orizaba', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'119', 
            'name'=>'Otatitlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'120', 
            'name'=>'Oteapan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'121', 
            'name'=>'Ozuluama de Mascareñas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'122', 
            'name'=>'Pajapan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'123', 
            'name'=>'Pánuco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'124', 
            'name'=>'Papantla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'125', 
            'name'=>'Paso del Macho', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'126', 
            'name'=>'Paso de Ovejas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'127', 
            'name'=>'La Perla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'128', 
            'name'=>'Perote', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'129', 
            'name'=>'Platón Sánchez', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'130', 
            'name'=>'Playa Vicente', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'131', 
            'name'=>'Poza Rica de Hidalgo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'132', 
            'name'=>'Las Vigas de Ramírez', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'133', 
            'name'=>'Pueblo Viejo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'134', 
            'name'=>'Puente Nacional', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'135', 
            'name'=>'Rafael Delgado', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'136', 
            'name'=>'Rafael Lucio', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'137', 
            'name'=>'Los Reyes', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'138', 
            'name'=>'Río Blanco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'139', 
            'name'=>'Saltabarranca', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'140', 
            'name'=>'San Andrés Tenejapan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'141', 
            'name'=>'San Andrés Tuxtla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'142', 
            'name'=>'San Juan Evangelista', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'143', 
            'name'=>'Santiago Tuxtla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'144', 
            'name'=>'Sayula de Alemán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'145', 
            'name'=>'Soconusco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'146', 
            'name'=>'Sochiapa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'147', 
            'name'=>'Soledad Atzompa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'148', 
            'name'=>'Soledad de Doblado', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'149', 
            'name'=>'Soteapan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'150', 
            'name'=>'Tamalín', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'151', 
            'name'=>'Tamiahua', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'152', 
            'name'=>'Tampico Alto', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'153', 
            'name'=>'Tancoco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'154', 
            'name'=>'Tantima', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'155', 
            'name'=>'Tantoyuca', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'156', 
            'name'=>'Tatatila', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'157', 
            'name'=>'Castillo de Teayo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'158', 
            'name'=>'Tecolutla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'159', 
            'name'=>'Tehuipango', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'160', 
            'name'=>'Álamo Temapache', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'161', 
            'name'=>'Tempoal', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'162', 
            'name'=>'Tenampa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'163', 
            'name'=>'Tenochtitlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'164', 
            'name'=>'Teocelo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'165', 
            'name'=>'Tepatlaxco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'166', 
            'name'=>'Tepetlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'167', 
            'name'=>'Tepetzintla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'168', 
            'name'=>'Tequila', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'169', 
            'name'=>'José Azueta', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'170', 
            'name'=>'Texcatepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'171', 
            'name'=>'Texhuacán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'172', 
            'name'=>'Texistepec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'173', 
            'name'=>'Tezonapa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'174', 
            'name'=>'Tierra Blanca', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'175', 
            'name'=>'Tihuatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'176', 
            'name'=>'Tlacojalpan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'177', 
            'name'=>'Tlacolulan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'178', 
            'name'=>'Tlacotalpan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'179', 
            'name'=>'Tlacotepec de Mejía', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'180', 
            'name'=>'Tlachichilco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'181', 
            'name'=>'Tlalixcoyan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'182', 
            'name'=>'Tlalnelhuayocan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'183', 
            'name'=>'Tlapacoyan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'184', 
            'name'=>'Tlaquilpa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'185', 
            'name'=>'Tlilapan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'186', 
            'name'=>'Tomatlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'187', 
            'name'=>'Tonayán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'188', 
            'name'=>'Totutla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'189', 
            'name'=>'Tuxpan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'190', 
            'name'=>'Tuxtilla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'191', 
            'name'=>'Ursulo Galván', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'192', 
            'name'=>'Vega de Alatorre', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'193', 
            'name'=>'Veracruz', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'194', 
            'name'=>'Villa Aldama', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'195', 
            'name'=>'Xoxocotla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'196', 
            'name'=>'Yanga', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'197', 
            'name'=>'Yecuatla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'198', 
            'name'=>'Zacualpan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'199', 
            'name'=>'Zaragoza', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'200', 
            'name'=>'Zentla', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'201', 
            'name'=>'Zongolica', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'202', 
            'name'=>'Zontecomatlán de López y Fuentes', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'203', 
            'name'=>'Zozocolco de Hidalgo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'204', 
            'name'=>'Agua Dulce', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'205', 
            'name'=>'El Higo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'206', 
            'name'=>'Nanchital de Lázaro Cárdenas del Río', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'207', 
            'name'=>'Tres Valles', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'208', 
            'name'=>'Carlos A. Carrillo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'209', 
            'name'=>'Tatahuicapan de Juárez', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'210', 
            'name'=>'Uxpanapa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'211', 
            'name'=>'San Rafael', 
            'active'=>1
        ]);
City::create([

        'state_id'=>30, 
            'key'=>'212', 
            'name'=>'Santiago Sochiapan', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'001', 
            'name'=>'Abalá', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'002', 
            'name'=>'Acanceh', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'003', 
            'name'=>'Akil', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'004', 
            'name'=>'Baca', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'005', 
            'name'=>'Bokobá', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'006', 
            'name'=>'Buctzotz', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'007', 
            'name'=>'Cacalchén', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'008', 
            'name'=>'Calotmul', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'009', 
            'name'=>'Cansahcab', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'010', 
            'name'=>'Cantamayec', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'011', 
            'name'=>'Celestún', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'012', 
            'name'=>'Cenotillo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'013', 
            'name'=>'Conkal', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'014', 
            'name'=>'Cuncunul', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'015', 
            'name'=>'Cuzamá', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'016', 
            'name'=>'Chacsinkín', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'017', 
            'name'=>'Chankom', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'018', 
            'name'=>'Chapab', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'019', 
            'name'=>'Chemax', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'020', 
            'name'=>'Chicxulub Pueblo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'021', 
            'name'=>'Chichimilá', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'022', 
            'name'=>'Chikindzonot', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'023', 
            'name'=>'Chocholá', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'024', 
            'name'=>'Chumayel', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'025', 
            'name'=>'Dzán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'026', 
            'name'=>'Dzemul', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'027', 
            'name'=>'Dzidzantún', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'028', 
            'name'=>'Dzilam de Bravo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'029', 
            'name'=>'Dzilam González', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'030', 
            'name'=>'Dzitás', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'031', 
            'name'=>'Dzoncauich', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'032', 
            'name'=>'Espita', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'033', 
            'name'=>'Halachó', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'034', 
            'name'=>'Hocabá', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'035', 
            'name'=>'Hoctún', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'036', 
            'name'=>'Homún', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'037', 
            'name'=>'Huhí', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'038', 
            'name'=>'Hunucmá', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'039', 
            'name'=>'Ixil', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'040', 
            'name'=>'Izamal', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'041', 
            'name'=>'Kanasín', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'042', 
            'name'=>'Kantunil', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'043', 
            'name'=>'Kaua', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'044', 
            'name'=>'Kinchil', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'045', 
            'name'=>'Kopomá', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'046', 
            'name'=>'Mama', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'047', 
            'name'=>'Maní', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'048', 
            'name'=>'Maxcanú', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'049', 
            'name'=>'Mayapán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'050', 
            'name'=>'Mérida', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'051', 
            'name'=>'Mocochá', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'052', 
            'name'=>'Motul', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'053', 
            'name'=>'Muna', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'054', 
            'name'=>'Muxupip', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'055', 
            'name'=>'Opichén', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'056', 
            'name'=>'Oxkutzcab', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'057', 
            'name'=>'Panabá', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'058', 
            'name'=>'Peto', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'059', 
            'name'=>'Progreso', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'060', 
            'name'=>'Quintana Roo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'061', 
            'name'=>'Río Lagartos', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'062', 
            'name'=>'Sacalum', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'063', 
            'name'=>'Samahil', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'064', 
            'name'=>'Sanahcat', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'065', 
            'name'=>'San Felipe', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'066', 
            'name'=>'Santa Elena', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'067', 
            'name'=>'Seyé', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'068', 
            'name'=>'Sinanché', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'069', 
            'name'=>'Sotuta', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'070', 
            'name'=>'Sucilá', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'071', 
            'name'=>'Sudzal', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'072', 
            'name'=>'Suma', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'073', 
            'name'=>'Tahdziú', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'074', 
            'name'=>'Tahmek', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'075', 
            'name'=>'Teabo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'076', 
            'name'=>'Tecoh', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'077', 
            'name'=>'Tekal de Venegas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'078', 
            'name'=>'Tekantó', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'079', 
            'name'=>'Tekax', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'080', 
            'name'=>'Tekit', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'081', 
            'name'=>'Tekom', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'082', 
            'name'=>'Telchac Pueblo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'083', 
            'name'=>'Telchac Puerto', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'084', 
            'name'=>'Temax', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'085', 
            'name'=>'Temozón', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'086', 
            'name'=>'Tepakán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'087', 
            'name'=>'Tetiz', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'088', 
            'name'=>'Teya', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'089', 
            'name'=>'Ticul', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'090', 
            'name'=>'Timucuy', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'091', 
            'name'=>'Tinum', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'092', 
            'name'=>'Tixcacalcupul', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'093', 
            'name'=>'Tixkokob', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'094', 
            'name'=>'Tixmehuac', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'095', 
            'name'=>'Tixpéhual', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'096', 
            'name'=>'Tizimín', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'097', 
            'name'=>'Tunkás', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'098', 
            'name'=>'Tzucacab', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'099', 
            'name'=>'Uayma', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'100', 
            'name'=>'Ucú', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'101', 
            'name'=>'Umán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'102', 
            'name'=>'Valladolid', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'103', 
            'name'=>'Xocchel', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'104', 
            'name'=>'Yaxcabá', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'105', 
            'name'=>'Yaxkukul', 
            'active'=>1
        ]);
City::create([

        'state_id'=>31, 
            'key'=>'106', 
            'name'=>'Yobaín', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'001', 
            'name'=>'Apozol', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'002', 
            'name'=>'Apulco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'003', 
            'name'=>'Atolinga', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'004', 
            'name'=>'Benito Juárez', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'005', 
            'name'=>'Calera', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'006', 
            'name'=>'Cañitas de Felipe Pescador', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'007', 
            'name'=>'Concepción del Oro', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'008', 
            'name'=>'Cuauhtémoc', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'009', 
            'name'=>'Chalchihuites', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'010', 
            'name'=>'Fresnillo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'011', 
            'name'=>'Trinidad García de la Cadena', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'012', 
            'name'=>'Genaro Codina', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'013', 
            'name'=>'General Enrique Estrada', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'014', 
            'name'=>'General Francisco R. Murguía', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'015', 
            'name'=>'El Plateado de Joaquín Amaro', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'016', 
            'name'=>'General Pánfilo Natera', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'017', 
            'name'=>'Guadalupe', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'018', 
            'name'=>'Huanusco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'019', 
            'name'=>'Jalpa', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'020', 
            'name'=>'Jerez', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'021', 
            'name'=>'Jiménez del Teul', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'022', 
            'name'=>'Juan Aldama', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'023', 
            'name'=>'Juchipila', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'024', 
            'name'=>'Loreto', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'025', 
            'name'=>'Luis Moya', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'026', 
            'name'=>'Mazapil', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'027', 
            'name'=>'Melchor Ocampo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'028', 
            'name'=>'Mezquital del Oro', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'029', 
            'name'=>'Miguel Auza', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'030', 
            'name'=>'Momax', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'031', 
            'name'=>'Monte Escobedo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'032', 
            'name'=>'Morelos', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'033', 
            'name'=>'Moyahua de Estrada', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'034', 
            'name'=>'Nochistlán de Mejía', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'035', 
            'name'=>'Noria de Ángeles', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'036', 
            'name'=>'Ojocaliente', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'037', 
            'name'=>'Pánuco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'038', 
            'name'=>'Pinos', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'039', 
            'name'=>'Río Grande', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'040', 
            'name'=>'Sain Alto', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'041', 
            'name'=>'El Salvador', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'042', 
            'name'=>'Sombrerete', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'043', 
            'name'=>'Susticacán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'044', 
            'name'=>'Tabasco', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'045', 
            'name'=>'Tepechitlán', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'046', 
            'name'=>'Tepetongo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'047', 
            'name'=>'Teúl de González Ortega', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'048', 
            'name'=>'Tlaltenango de Sánchez Román', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'049', 
            'name'=>'Valparaíso', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'050', 
            'name'=>'Vetagrande', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'051', 
            'name'=>'Villa de Cos', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'052', 
            'name'=>'Villa García', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'053', 
            'name'=>'Villa González Ortega', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'054', 
            'name'=>'Villa Hidalgo', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'055', 
            'name'=>'Villanueva', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'056', 
            'name'=>'Zacatecas', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'057', 
            'name'=>'Trancoso', 
            'active'=>1
        ]);
City::create([

        'state_id'=>32, 
            'key'=>'058', 
            'name'=>'Santa María de la Paz', 
            'active'=>1
        ]);

    }
}

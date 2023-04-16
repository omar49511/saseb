<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\State;
use App\Models\City;
use App\Models\User;
use Database\Seeders\RoleSeeder;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExpedienteTest extends TestCase
{
    use RefreshDatabase;

    public function setUp():void{
        parent::setUp();
        $this->seed(RoleSeeder::class);
        State::create([
            'key'=>'01', 
            'name'=>'Aguascalientes', 
            'abrev'=>'Ags.', 
            'active'=>1,
        ]);        
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */


    public function test_validate_expedediente_page()
    {
        $user = User::create([
            "name" => "test",
             "email" => "user@mail.com",
             "password" => bcrypt('12345678')             
         ])->assignRole('Admin');
 
         $credentials = [
             "email" => "user@mail.com",
             "password" => "12345678"
         ];
 
         $response = $this->post('/login', $credentials);

         $response->assertRedirect('/dashboard');
         $this->assertCredentials($credentials);

        $this->get('/expediente')->assertSee("Registrar Expediente");
    }

}

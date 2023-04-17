<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    // use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login_page_text_is_visible()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);

        $response->assertSee("Inicio de sesión");
    }

     /** @test */
     public function test_authenticated_to_a_user()
     {
         $user = User::create([
            "name" => "test",
             "email" => "user@mail.com",
             "password" => bcrypt('12345678')
         ]);
 
         $this->get('/login')->assertSee('Inicio de sesión');
         $credentials = [
             "email" => "user@mail.com",
             "password" => "12345678"
         ];
 
         $response = $this->post('/login', $credentials);
         $response->assertRedirect('/dashboard');
         $this->assertCredentials($credentials);
     }
 
     /** @test */
     public function test_not_authenticate_to_a_user_with_credentials_invalid()
     {
         $user = User::create([
            "name" => "test",
             "email" => "user@mail.com",
            "password" => bcrypt('12345678')
         ]);
         $credentials = [
             "email" => "users@mail.com",
             "password" => "secret"
         ];
 
         $this->assertInvalidCredentials($credentials);
     }
 
     /** @test */
     public function test_the_email_is_required_for_authenticate()
     {
         $user = User::create([
            'name'=>'test',
            'email'=>'user@mail.com',
            'password'=>bcrypt("12345678")
        ]);
         $credentials = [
             "name" => "test",
             "email" => null,
             "password" => bcrypt('12345678')
         ];
 
         $response = $this->from('/login')->post('/login', $credentials);
         $response->assertRedirect('/login')->assertSessionHasErrors([
             'email' => 'El campo email es requerido.',
         ]);
     }
 
     /** @test */
     public function test_the_password_is_required_for_authenticate()
     {
         $user = User::create([
            'name' => "test",
            'email' => 'zaratedev@gmail.com',            
            'password'=>bcrypt('12345678')
        ]);
         $credentials = [
            "name" => "test",
             "email" => "zaratedev@gmail.com",
             "password" => null
         ];
 
         $response = $this->from('/login')->post('/login', $credentials);
         $response->assertRedirect('/login')
             ->assertSessionHasErrors([
                 'password' => 'El campo password es requerido.',
             ]);
     }

}

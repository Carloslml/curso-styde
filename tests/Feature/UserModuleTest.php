<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /** @test  */
    function it_shows_the_users_list()
    {
        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Misael')
        ->assertSee('Listado de usuarios');
    }

    /** @test  */
    function it_show_a_default_message_if_the_users_list_id_empy()
    {
        $this->get('/usuarios?empty')
        ->assertStatus(200)
        ->assertSee('No hay usuarios registrados');

    }

    /** @test  */

    function it_loads_the_users_details_page()
    {
    	$this->get('/usuarios/5')
    		->assertStatus(200)
    		->assertSee("Mostrando detalle del usuario: 5");
    }

    /** @test  */

    function it_loads_the_new_users_page()
    {
    	$this->get('/usuarios/nuevo')
    		->assertStatus(200)
    		->assertSee("Crear nuevo usuario");
    }
}

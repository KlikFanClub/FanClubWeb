<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Workart;
use App\Models\Artist;
use App\Models\User;

class WorkartTest extends TestCase
{
  use RefreshDatabase;

  public function test_can_retrieve_all_workarts()
  {

    Artist::factory(1)->create(['id' => 1]);
    Artist::factory(1)->create(['id' => 2]);
    Workart::factory(8)->create(['artist_id' => 1]);
    Workart::factory(2)->create(['artist_id' => 2]);

    $response = $this->get('/workarts');

    $this->assertEquals(10, count(Workart::all()));
    $response->assertStatus(200);
  }

  public function test_can_retrieve_workart_by_id()
  {

    Artist::factory()->create(['id' => 1]);
    Workart::factory()->create(['id' => 2, 'artist_id' => 1]);

    $response = $this->get('api/workarts/2');


    $response->assertStatus(200)
      ->assertJsonFragment(['id' => 2]);
  }
  public function test_admin_can_create_workart()
  {
    $adminUser = User::factory()->create(['isAdmin' => true]);
    $this->actingAs($adminUser);

    Artist::factory()->create();

    $this->post('/workarts/create', [
      'title' => 'Título',
      'imageworkart' => 'https://media-exp1.licdn.com/dms/image/C560BAQHMnA03XDdf3w/company-logo_200_200/0/1519855918965?e=2159024400&v=beta&t=CrP5Le1mWICRcaxIGNBuajHcHGFPuyNA5C8DI339lSk',
      'edition' => 'Edición Limitada',
      'price' => '50',
      'technique' => 'Dibujo',
      'theme' => 'Animales',
      'others' => 'asd',
      'category' => 'asd',
      'artist_id' => 1
    ]);

    $workarts = Workart::all();

    $this->assertCount(1, $workarts);
  }

  public function test_admin_can_delete_workart()
  {
    $adminUser = User::factory()->create(['isAdmin' => true]);
    $this->actingAs($adminUser);

    Artist::factory()->create();
    Workart::factory(2)->create([
      'artist_id' => 1
    ]);

    $this->get('workarts/delete/1');
    $workarts = Workart::all();
    $this->assertCount(1, $workarts);
  }

  public function test_admin_can_edit_workart()
  {
    $adminUser = User::factory()->create(['isAdmin' => true]);
    $this->actingAs($adminUser);

    Artist::factory()->create();
    Workart::factory()->create([
      'title' => 'Título',
      'imageworkart' => 'https://media-exp1.licdn.com/dms/image/C560BAQHMnA03XDdf3w/company-logo_200_200/0/1519855918965?e=2159024400&v=beta&t=CrP5Le1mWICRcaxIGNBuajHcHGFPuyNA5C8DI339lSk',
      'edition' => 'Edición Limitada',
      'price' => '50',
      'technique' => 'Dibujo',
      'theme' => 'Animales',
      'others' => 'asd',
      'category' => 'asd',
      'artist_id' => 1
    ]);

    $newTitle = 'Nuevo Título';

    $this->put('workarts/update/1', [
      'title' => $newTitle,
      'imageworkart' => 'https://media-exp1.licdn.com/dms/image/C560BAQHMnA03XDdf3w/company-logo_200_200/0/1519855918965?e=2159024400&v=beta&t=CrP5Le1mWICRcaxIGNBuajHcHGFPuyNA5C8DI339lSk',
      'edition' => 'Edición Limitada',
      'price' => '50',
      'technique' => 'Dibujo',
      'theme' => 'Animales',
      'others' => 'asd',
      'category' => 'asd',
      'artist_id' => 1
    ]);

    $workart = Workart::findOrFail(1);
    $this->assertEquals($newTitle, $workart->title);
  }

  public function test_user_cant_create_workart()
  {
    $user = User::factory()->create();
    $this->actingAs($user);

    Artist::factory()->create();

    $this->post('/workarts/create', [
      'title' => 'Título',
      'imageworkart' => 'https://media-exp1.licdn.com/dms/image/C560BAQHMnA03XDdf3w/company-logo_200_200/0/1519855918965?e=2159024400&v=beta&t=CrP5Le1mWICRcaxIGNBuajHcHGFPuyNA5C8DI339lSk',
      'edition' => 'Edición Limitada',
      'price' => '50',
      'technique' => 'Dibujo',
      'theme' => 'Animales',
      'others' => 'asd',
      'category' => 'asd',
      'artist_id' => 1
    ]);

    $workarts = Workart::all();

    $this->assertCount(0, $workarts);
  }

  public function test_user_cant_delete_workart()
  {
    $user = User::factory()->create();
    $this->actingAs($user);

    Artist::factory()->create();
    Workart::factory(2)->create([
      'artist_id' => 1
    ]);
    $this->delete('workarts/delete/1');

    $workarts = Workart::all();
    $this->assertCount(2, $workarts);
  }

  public function test_user_cant_edit_workart()
  {
    $user = User::factory()->create();
    $this->actingAs($user);

    Artist::factory()->create();

    $originalTitle = 'Título';
    Workart::factory()->create([
      'title' => $originalTitle,
      'imageworkart' => 'https://media-exp1.licdn.com/dms/image/C560BAQHMnA03XDdf3w/company-logo_200_200/0/1519855918965?e=2159024400&v=beta&t=CrP5Le1mWICRcaxIGNBuajHcHGFPuyNA5C8DI339lSk',
      'edition' => 'Edición Limitada',
      'price' => '50',
      'technique' => 'Dibujo',
      'theme' => 'Animales',
      'others' => 'asd',
      'category' => 'asd',
      'artist_id' => 1
    ]);

    $newTitle = 'Nuevo Título';
    $this->put('workarts/update/1', [
      'title' => $newTitle,
      'imageworkart' => 'https://media-exp1.licdn.com/dms/image/C560BAQHMnA03XDdf3w/company-logo_200_200/0/1519855918965?e=2159024400&v=beta&t=CrP5Le1mWICRcaxIGNBuajHcHGFPuyNA5C8DI339lSk',
      'edition' => 'Edición Limitada',
      'price' => '50',
      'technique' => 'Dibujo',
      'theme' => 'Animales',
      'others' => 'asd',
      'category' => 'asd',
      'artist_id' => 1
    ]);

    $workart = Workart::findOrFail(1);
    $this->assertEquals($originalTitle, $workart->title);
  }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Workart;
use App\Models\Artist;

class WorkartTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_retrieve_all_workarts() {

        Artist::factory(1)->create(['id' => 1]);
        Artist::factory(1)->create(['id' => 2]);
        Workart::factory(8)->create(['artist_id' => 1]);
        Workart::factory(2)->create(['artist_id' => 2]);

        $response = $this->get('/workarts');

        $this->assertEquals(10, count(Workart::all()));
        $response->assertStatus(200);
    }

    public function test_can_retrieve_workart_by_id() {
       
        Artist::factory()->create(['id' => 1]);
        Workart::factory()->create(['id' => 2, 'artist_id' => 1]);
       
        $response = $this->get('api/workarts/2');
      

        $response->assertStatus(200)
        ->assertJsonFragment(['id' => 2]);
}
}
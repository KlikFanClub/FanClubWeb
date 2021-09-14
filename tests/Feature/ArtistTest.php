<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Artist;

class ArtistTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_highlighted_is_true()
    {
        $artist = new Artist([
            'name' => "Gabriela",
            'profile_picture' => 'ok',
            'bio' => 'ok',
            'website' => "",
            'email' => 'gabi3@gmail.com',
            'instagram' => '',
            'facebook' => '',
            'twitter' => '',
            'other_socials' => '',
            'highlighted' => true


        ]);

        $this->assertTrue($artist->highlighted);
    }

    public function test_can_retrieve_all_artists() {
        Artist::factory(10)->create([]);

        $response = $this->get('/artists');

        $this->assertEquals(10, count(Artist::all()));
        $response->assertStatus(200);
          
    }
}

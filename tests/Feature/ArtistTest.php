<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Artist;
use App\Http\Controllers\ArtistController;
use Illuminate\Http\Request;

class ArtistTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_highlighted_is_true()
    {
        $artist= new ArtistController();       

        $request = new Request([
            'name'=>"Gabriela",
            'profile_picture'=>'ok',
            'bio'=>'ok', 
            'website'=>"",           
            'email'=>'gabi3@gmail.com',
            'instagram'=>'',
            'facebook'=>'',
            'twitter'=>'',
            'other_socials'=>'',
            'highlighted'=>true

                       
        ]);
        $artist->store($request);
       
        $this->assertTrue($artist->highlighted);
        // $response = $this->get('/');

        // $response->assertStatus(200);
    }
}

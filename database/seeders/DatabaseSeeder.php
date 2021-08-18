<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artist;
use App\Models\Workart;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Artist::factory(5)->create();
        Workart::factory(10)->create();
        User::factory()->create(['email'=>'usuario@gmail.com']);
    }
}

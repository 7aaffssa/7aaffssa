<?php

namespace Database\Seeders;

use App\Models\Profile;
// use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   //! insertion aleatoire with factory
        Profile::factory(200)->create();
        
        //? insertion without factory
        // DB::table('profiles')->insert([
        //     'name' => Str::random(20),
        //     'email' => Str::random(10).'@example.com', // admin@example.com
        //     'password' => Hash::make('password'),   
        //     'bio' => Str::random(255),        ]);
    }
}
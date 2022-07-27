<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

      User::create([
        'name' => 'Natalia',
        'username' => 'Nata',
        'email' => 'natalia@gmail.com',
        'password' => bcrypt(12345)
     ]);


       User::factory(3)->create();

       Category::create([
        'name' => 'Programing',
        'slug' => 'programing',
    ]);

       Category::create([
        'name' => 'Web Design',
        'slug' => 'web-design',
    ]);

    Category::create([
        'name' => 'Personal',
        'slug' => 'personal',
    ]);

    Post::factory(20)->create();

       

        //User::create([
          //  'name' => 'Ari Firmasyah',
            //'email' => 'AriFirm@gmail.com',
            //'password' => bcrypt(12345)
        //]);

       

       //
    }
}

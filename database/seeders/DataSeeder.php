<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Role;
use App\Models\User;


class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Page::insert([
            [
                'id' => 1,
                'name' => 'Home',
                'banner_image' => '2023-07-21-21-33-26-1689975206213.jpg',
                'banner_title' => 'Home',
                'content' => '<p>Lorem ipsum ... </p>',
                'user_id'=>1,
                'created_at' => '2023-07-28 01:52:41',
                'updated_at' => '2023-07-28 01:52:41',
            ],
            [
                'id' => 2,
                'name' => 'About',
                'banner_image' => '2023-07-22-19-51-02-1690055462198.jpg',
                'banner_title' => 'About us',
                'content' => '<h1>Lorem Ipsum...</h1>',
                'user_id'=>1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 3,
                'name' => 'Contact',
                'banner_image' => '2023-07-28-07-53-56-1690530836225.png',
                'banner_title' => 'GET IN TOUCH WITH US',
                'content' => '<p>Lorem ipsum...</p>',
                'user_id'=>1,
                'created_at' => null,
                'updated_at' => null,
            ],

        ]);

        Role::insert([
            [
                'id' => 1,
                'name' => 'Admin',
                'access' => 'ALL ACCESS',
                'created_at' => null,
                'updated_at' => '2023-07-29 12:45:18',
            ],
        ]);


        User::insert([
            [
                'id' => 1,
                'name' => 'admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'role_id' => 1,
                'last_login' => '2023-07-29 12:00:27',
                'password' => '$2y$10$DFuvIAm7xiy/2GDx7dgrLONg8IzV/yzdzHm7s5F.GtWIaaOCZ44yS',
                'created_at' => null,
                'updated_at' => '2023-07-29 12:00:27',
            ],
        ]);
    }
}

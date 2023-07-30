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
        Menu::insert([
            [
                'id' => 1,
                'name' => 'MANAGE USERS',
                'link' => '/admin/user/list',
                'route' => 'info.list',
                'created_at' => '2023-07-29 18:06:45',
            ],
            [
                'id' => 2,
                'name' => 'MANAGE ROLES',
                'link' => '/admin/role/list',
                'route' => 'roles.list',
                'created_at' => '2023-07-29 18:11:37',
            ],
            [
                'id' => 3,
                'name' => 'MANAGE PAGE',
                'link' => '/admin/page/list',
                'route' => 'page.list',
                'created_at' => '2023-07-29 18:11:57',
            ],
            [
                'id' => 4,
                'name' => 'MANAGE MENU',
                'link' => '/admin/menu/list',
                'route' => 'page.menu',
                'created_at' => '2023-07-29 18:12:13',
            ],
        ]);


        Page::insert([
            [
                'id' => 1,
                'name' => 'Home',
                'banner_image' => '2023-07-21-21-33-26-1689975206213.jpg',
                'banner_title' => 'Home',
                'content' => '<p>Lorem ipsum ... </p>',
                'created_at' => '2023-07-28 01:52:41',
                'updated_at' => '2023-07-28 01:52:41',
            ],
            [
                'id' => 2,
                'name' => 'About',
                'banner_image' => '2023-07-22-19-51-02-1690055462198.jpg',
                'banner_title' => 'About us',
                'content' => '<h1>Lorem Ipsum...</h1>',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 3,
                'name' => 'Contact',
                'banner_image' => '2023-07-28-07-53-56-1690530836225.png',
                'banner_title' => 'GET IN TOUCH WITH US',
                'content' => '<p>Lorem ipsum...</p>',
                'created_at' => null,
                'updated_at' => null,
            ],

        ]);

        Role::insert([
            [
                'id' => 1,
                'name' => 'Admin',
                'access' => 'user.create, user.list, user.edit, user.delete, role.create, role.list, role.edit, role.delete, page.create, page.list, page.edit, page.delete, menu.create, menu.list, menu.edit, menu.delete',
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

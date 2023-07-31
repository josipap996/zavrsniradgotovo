<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "tbl_role";
    public $primaryKey = "id";

    static function access()
    {
        $access = [
            "user" => [
                "user.create" => "Create User",
                "user.list" => "User List",
                "user.edit" => "Update User",
                "user.delete" => "Delete User",
            ],
            "role" => [
                "role.create" => "Create Role",
                "role.list" => "Role List",
                "role.edit" => "Update Role",
                "role.delete" => "Delete Role",
            ],
            "page" => [
                "page.create" => "Create Page",
                "page.list" => "Page List",
                "page.edit" => "Update Page",
                "page.delete" => "Delete Page",
            ],
            "menu" => [
                "menu.create" => "Add Menu",
                "menu.list" => "Menu List",
                "menu.edit" => "Edit Menu",
                "menu.delete" => "Delete Menu",
            ],
        ];

        return $access;
    }
}

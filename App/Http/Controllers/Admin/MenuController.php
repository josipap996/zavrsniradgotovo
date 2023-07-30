<?php
namespace App\Http\Controllers\Admin;
use App\Enums\Constant;
use App\Enums\Image;
use App\Http\Requests\MenuRequest;
use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use DB;

class MenuController extends Controller
{
    public $model;
    public function __construct()
    {
        $this->model = new Menu();
    }
    public function create()
    {
        return view("admin.menu.create");
    }
    public function list()
    {
        $sort = request("sort") ? request("sort") : "DESC";
        $data = Menu::filter()->orderBy("id", $sort)->get();
        return view("admin.menu.list", compact("data"));
    }

    public function edit($id)
    {
        $data = Menu::where("id", $id)->first();
        return view("admin.menu.edit", compact("data"));
    }


    public function store(MenuRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = ["name" => $request->name, "link" => $request->link ,"route" => $request->route];
            if ($request->has("id")) {
                Menu::where("id", $request->id)->update($data);
                $text = "updated";
            } else {
                Menu::insert($data);
                $text = "created";
            }
            DB::commit();
            return redirect()
                ->back()
                ->with("success", "menu has been " . $text . " successfully");
        } catch (\Exception $e) {
            DB::rollback();
            Log::error("Menu -> store : " . $e->getMessage());
            return redirect()
                ->back()
                ->with("error", $e->getMessage());
        }
    }

    public function delete($id)
    {
        Menu::find($id)->delete();
        return redirect()
            ->back()
            ->with("success", "Data Deleted Successfully");
    }
}

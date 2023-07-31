<?php
namespace App\Http\Controllers\Admin;
use App\Enums\Constant;
use App\Enums\Image;
use App\Http\Requests\MenuRequest;
use App\Models\Menu;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use DB;
use Auth;

class MenuController extends Controller
{
    public $model;
    public function __construct()
    {
        $this->model = new Menu();
    }

    public function create()
    {
        $pages =  Page::filter()->get();
        return view("admin.menu.create",compact('pages'));
        
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
        $pages =  Page::filter()->get();
        return view("admin.menu.edit", compact("data",'pages'));
    }


    public function store(MenuRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = ["name" => $request->name, "page_id" => $request->page_id];
            if ($request->has("id")) {
                Menu::where("id", $request->id)->update($data);
                $text = "updated";
            } else {
                $data['user_id']=Auth::user()->id;
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

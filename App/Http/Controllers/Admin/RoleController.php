<?php
namespace App\Http\Controllers\Admin;
use App\Enums\Constant;
use App\Enums\Image;
use App\Http\Requests\RoleRequest;
use App\Models\Role;
use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use DB;

class RoleController extends Controller
{
    public $model;
    public function __construct()
    {
        $this->model = new Role();
    }

    public function create()
    {
        $access = Role::access();
        return view("admin.role.create",compact('access'));
    }


    public function list()
    {
        $sort = request("sort") ? request("sort") : "DESC";
        $data = Role::orderBy("id", $sort)->get();
        return view("admin.role.list", compact("data"));
    }


    public function edit($id)
    {
        $data = Role::where("id", $id)->first();
        $access = Role::access();
        $accessItems = $data->access?explode(', ',$data->access):[];
        return view("admin.role.edit", compact("data","accessItems","access"));
    }


    public function store(RoleRequest $request)
    {
        DB::beginTransaction();
        try {
            $access = implode(', ',$request->access_item);
            $data = ["name" => $request->name, "access" => $access];
            if ($request->has("id")) {
                Role::where("id", $request->id)->update($data);
                $text = "updated";
            } else {
                Role::insert($data);
                $text = "created";
            }
            DB::commit();

            toastr()->addSuccess("Role has been " . $text . " successfully");
            return redirect()
                ->back();
        } catch (\Exception $e) {
            DB::rollback();
            Log::error("Role -> store : " . $e->getMessage());
            toastr()->addSuccess(serverError());

            return redirect()
                ->back();
        }
    }

    public function delete($id)
    {
        Role::find($id)->delete();
        return redirect()
            ->back()
            ->with("success", "Data Deleted Successfully");
    }
}

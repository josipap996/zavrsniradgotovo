<?php
namespace App\Http\Controllers\Admin;
use App\Http\Image;
use App\Http\Requests\PageRequest;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use DB;

class PageController extends Controller
{
    public $model;
    public function __construct()
    {
        $this->model = new Page();
    }
    public function create()
    {
        return view("admin.page.create");
    }

    public function list()
    {
        $sort = request("sort") ? request("sort") : "DESC";
        $data = Page::filter()->orderBy("id", $sort)->get();
        return view("admin.page.list", compact("data"));
    }

    public function edit($id)
    {
        $data = Page::where("id", $id)->first();
        return view("admin.page.edit", compact("data"));
    }

    public function view($id)
    {
        $data = Page::where("id", $id)->first();
        return view("admin.page.view", compact("data"));
    }

    public function store(PageRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = [
                "name" => $request->name,
                "banner_title" => $request->banner_title,
                "content" => $request->content,
            ];
            if ($request->hasFile("banner_image")) {
                if ($request->has("id")) {
                    $banner_image = Page::where("id", $request->id)->value(
                        "banner_image"
                    );
                    if ($banner_image) {
                        Image::deleteImage("", $banner_image);
                    }
                }
                $banner_image = Image::imageUpload(
                    $request->file("banner_image"),
                    "/page/"
                );
                $data["banner_image"] = $banner_image;
            }
            if ($request->has("id")) {
                Page::where("id", $request->id)->update($data);
                $text = "updated";
            } else {
                Page::insert($data);
                $text = "created";
            }
            DB::commit();
            return redirect()
                ->back()
                ->with("success", "page has been " . $text . " successfully");
        } catch (\Exception $e) {
            DB::rollback();
            Log::error("Page -> store : " . $e->getMessage());
            return redirect()
                ->back()
                ->with("error", serverError());
        }
    }

    public function delete($id)
    {
        $record = Page::find($id);
        if ($record->delete()) {
            Image::deleteImage("", $record->banner_image);
        }
        return redirect()
            ->back()
            ->with("success", "Data Deleted Successfully");
    }
}

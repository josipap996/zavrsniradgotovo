<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Page extends Model
{
    protected $table = "tbl_page";
    public $primaryKey = "id";
    protected $appends = ["banner_image_url"];
    public function getBannerImageUrlAttribute()
    {
        if ($this->banner_image) {
            return url("/frontend/img/page/" . $this->banner_image);
        } else {
            return "https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/1024px-No_image_available.svg.png";
        }
    }
    
    public function scopeFilter($query)
    {
        if(Auth::user()->role_id == 1){

        }else{
            $query->where('user_id',Auth::user()->id);
        }
    }
}

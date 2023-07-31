<?php
namespace App\Models;
use Auth;


use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "tbl_menu";
    public $primaryKey = "id";
    public $timestamps = false;

    public function scopeFilter($query)
    {
        if(Auth::user()->role_id == 1){

        }else{
            $query->where('user_id',Auth::user()->id);
        }
    }


    public function page(){
        return $this->belongsTo(Page::class,'page_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }


    static function getMenu(){
        $data = self::get();
        return $data;
    }
}

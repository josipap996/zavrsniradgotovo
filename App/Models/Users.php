<?php
namespace App\Models;

            use Illuminate\Database\Eloquent\Model; 

            class Users extends Model 

            { 
protected $table = 'users'; public $primaryKey = 'id'; protected $with = ['role'];  public function role(){ return $this->belongsTo( Role::class,'role_id','id');  }
}
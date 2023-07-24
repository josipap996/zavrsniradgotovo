<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, SoftDeletes;

    public $timestamps = false;

    // protected $fillable = ['name'];
    protected $guarded = [];

    protected $hidden = ['deleted_at'];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
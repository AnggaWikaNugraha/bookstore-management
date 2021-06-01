<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;
    use HasFactory;

    // relasi many to many dengan categori
    public function categories(){
        return $this->belongsToMany('App\Models\Category');
    }
}

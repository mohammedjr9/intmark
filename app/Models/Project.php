<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $casts=['tag'=>'array'];


    public function category(){
        return $this->belongsTo(Category::class);
    }

}

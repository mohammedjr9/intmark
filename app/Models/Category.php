<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function service(){
        return $this->hasMany(Service::class);
    }
    public function project(){
        return $this->hasMany(Project::class);
    }
}

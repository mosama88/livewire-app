<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $guarded = [];


##-------------------Relations

public function category()
{
   return $this->belongsTo(Category::class, 'category_id');
}



}

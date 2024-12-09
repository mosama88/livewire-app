<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = '';

    protected $guarded = [];


##-------------------Relations
/*
public function department()
{
   return $this->belongsTo(Department::class, 'employee_department_code');
}
*/


}

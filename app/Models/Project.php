<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $guarded = [];


##-------------------Relations
/*
public function department()
{
   return $this->belongsTo(Department::class, 'employee_department_code');
}
*/


}

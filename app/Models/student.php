<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $table = 'student';
    protected $primaryKey = 'id';
    protected $fillable=['stud_fname','stud_lname','stud_mobile','stud_course','stud_address'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hocsinh extends Model
{
    use HasFactory;
    protected $table = "student";
    protected $fillable = ['name','age','address','phone','class_id'];
}

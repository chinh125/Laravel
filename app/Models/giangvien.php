<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class giangvien extends Model
{
    use HasFactory;
    protected $table = 'giangviens';
    protected  $fillable = ['ten','ma_giangvien','tuoi','trinh_do','lop'];
}

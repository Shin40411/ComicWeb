<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TuKhoa extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $fillable = [
        'keyword','noibat','id_tukhoa'
    ];
    protected $primaryKey = 'id_tukhoa';
    protected $table      = 'tukhoa';
}

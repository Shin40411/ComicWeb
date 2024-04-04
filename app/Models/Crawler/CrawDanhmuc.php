<?php

namespace App\Models\Crawler;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrawDanhmuc extends Model
{
    use HasFactory;
    protected $table = 'danhmuc';
    protected $guarded = [''];
}

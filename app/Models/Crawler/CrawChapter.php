<?php

namespace App\Models\Crawler;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrawChapter extends Model
{
    use HasFactory;
    protected $table = 'chapter';
    protected $guarded = [''];
}

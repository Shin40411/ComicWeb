<?php

namespace App\Models\Crawler;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrawTruyen extends Model
{
    use HasFactory;
    protected $table = 'truyen';
    protected $guarded = [''];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public $timestamps = false;
    protected $fillable = [
        'truyen_id', 'luotxemchap', 'tuade', 'noidung', 'kichhoat', 'slug_chapter', 'created_at', 'updated_at'
    ];
    protected $primaryKey = 'id_chapter';
    protected $table = 'chapter';

    public function truyen(){
        return $this->belongsTo('App\Models\Truyen','truyen_id','id_truyen');
    }
    
    public function comment(){
        return $this->hasMany('App\Models\Comment','comment_chapter_id','id_chapter');    
    }
} 

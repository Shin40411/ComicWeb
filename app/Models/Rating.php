<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'rating_id', 'truyen_id', 'rating'
    ];
    protected $primaryKey = 'rating_id';
    protected $table    = 'danhgia';

    public function truyennhieurate(){
        return $this->belongsTo('App\Models\Truyen','truyen_id','id_truyen');
    }
}

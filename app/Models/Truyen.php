<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truyen extends Model
{
    use HasFactory;
    
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public $timestamps = false;
    protected $fillable = [
        'tentruyen', 'tenkhac', 'tacgia', 'tomtat', 'luotxem', 'theloai_id', 'truyen_noibat', 'tinh_trang', 'hinhanh', 'slug_truyen', 'kichhoat', 'created_at', 'updated_at'
    ];
    protected $primaryKey = 'id_truyen';
    protected $table = 'truyen';

    public function danhmuctruyen(){
        return $this->belongsTo('App\Models\DanhmucTruyen','theloai_id','id_danhmuc');
    }

    public function chapter(){
        return $this->hasMany('App\Models\Chapter','truyen_id','id_truyen');    
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment','comment_truyen_id','id_truyen');    
    }

    public function rate(){
        return $this->hasMany('App\Models\Rating','truyen_id','id_truyen');    
    }

    public function thuocnhieudanhmuctruyen(){
        return $this->belongsToMany(DanhmucTruyen::class,'thuocdanh','truyen_id','danhmuc_id');
    }
}   

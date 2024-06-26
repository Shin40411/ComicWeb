<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhmucTruyen extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'tieudedanhmuc', 'motadanhmuc', 'kichhoat', 'slug_danhmuc'
    ];
    protected $primaryKey = 'id_danhmuc';
    protected $table = 'danhmuc';

    public function truyen(){
        return $this->hasMany('App\Models\Truyen');
    }

    public function nhieutruyen(){
        return $this->belongsToMany(Truyen::class,'thuocdanh','danhmuc_id','truyen_id');
    }
}

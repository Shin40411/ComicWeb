<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'id_comment', 'comment', 'comment_user', 'comment_email', 'comment_date', 'comment_truyen_id', 'comment_chapter_id', 'comment_replied'
    ];
    protected $primaryKey = 'id_comment';
    protected $table    = 'comment';

    public function chapcmt(){
        return $this->belongsTo('App\Models\Chapter','comment_chapter_id','id_chapter');
    }

    public function truyencmt(){
        return $this->belongsTo('App\Models\Truyen','comment_truyen_id','id_truyen');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    protected $table = 'post_images';

    protected $fillable = array('post_id','url');
    public function post(){
        return $this->belongsTo(Posts::class,'post_id');
    }
    //
}

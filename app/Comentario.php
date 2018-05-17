<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    public function Post()
    {
    	return $this->belongsTo(Post::class);
    }
}

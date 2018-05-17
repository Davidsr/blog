<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //protected $fillable = ['titulo', 'mensaje'];
    public function comentarios()
    {
    	return $this->hasMany(Comentario::class, 'id_post');
    }
}

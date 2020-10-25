<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table='post';
    protected $primaryKey = 'idpost';

    public function penulis() {
        return $this->belongsTo('App\Models\Penulis', 'idpenulis');
    }

}

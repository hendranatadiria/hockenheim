<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $table='komentar';
    protected $primaryKey = 'idkomentar';

    public function penulis(){
        return $this->belongsTo('App\Models\Penulis', 'idpenulis');
    }

    public function post(){
        return $this->hasOne('App\Models\Post', 'idpost', 'idpost');
    }
}

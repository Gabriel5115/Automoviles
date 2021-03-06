<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marcas';
    protected $fillable = ['marca'];
    protected $guarded = ['id'];
    protected $hidden = ['created_at','updated_at'];
}

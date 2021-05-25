<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model {

    protected $table = 'usuarios';
    protected $fillable = ['nombre', 'apellido', 'user', 'password', 'rol'];
    protected $guarded = ['id'];
    protected $hidden = ['created_at', 'updated_at', 'password'];
    protected $primaryKey = 'id';

}

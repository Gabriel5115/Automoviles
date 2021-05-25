<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coche extends Model {

    protected $table = 'coches';
    protected $fillable = ['modelo', 'imagen'];
    protected $guarded = ['id_coche', 'id_marca'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $primaryKey = 'id_coche';

}

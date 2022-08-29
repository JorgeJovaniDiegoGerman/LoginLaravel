<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Softdeletes;
use Illuminate\Database\Eloquent\Model;

class Administradores extends Model
{
    use HasFactory;
    use Softdeletes;
    protected $primaryKey = 'id_admin';
    protected $fillable=['id_admin','name_admin','app','apm','id_user'];

}

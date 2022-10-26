<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adherent extends Model
{
    protected $table = 'adherents';
    protected $primaryKey = 'id';
    protected $fillable = ['num_adherent', 'addresse', 'telphone','nom','prenom', 'sexe', 'date_naissance','ville'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class association extends Model
{
    protected $table = 'Association';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'numero', 'adresse','description'];

}

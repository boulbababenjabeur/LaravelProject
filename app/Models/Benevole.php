<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benevole extends Model
{
    protected $table = 'benevoles';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'mobile'];
}

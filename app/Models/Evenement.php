<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ZoneVertes; 

class Evenement extends Model
{
    protected $table = 'evenement';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description', 'startDate','zonevertes_id','photo'];
    public function zoneVerte()
    {
        return $this->belongsTo(ZoneVertes::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\velo; 

class Evenement extends Model
{
    protected $table = 'evenement';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description', 'startDate','velo_id','photo'];
    public function velo()
    {
        return $this->belongsTo(velo::class);
    }
}

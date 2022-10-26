<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Evenement;

class ZoneVertes extends Model
{
    protected $table = 'zoneVertes';
    protected $primaryKey = 'id';
    protected $fillable = ['nomZone', 'surfaceZone', 'Gouvernorat','Délégation', 'Localité','PremierResponsable','photo'];
    public function evenements()
    {
        return $this->hasMany(Evenement::class);
    }
}

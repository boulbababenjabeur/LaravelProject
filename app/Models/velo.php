<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Evenement;

class velo extends Model
{
    protected $table = 'velo';
    protected $primaryKey = 'id';
    protected $fillable = ['nomVelo','couleur','type','photo'];
    public function evenements()
    {
        return $this->hasMany(Evenement::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\associaion;

class participant extends Model
{
    protected $table = 'participant';
    protected $primaryKey = 'id';
    protected $fillable = ['nom', 'prenom','age','photo'];
    public function association()
    {
        return $this->hasMany(association::class);
    }
}

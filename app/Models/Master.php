<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Outfit;

class Master extends Model
{
    use HasFactory;
    public function getOutfit()
    {
        return $this->hasMany('App\Models\Outfit', 'master_id', 'id');
    }
 
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $table = 'package';

    public function lote(){
        return $this->belongsTo(Lot::class , 'lots_id');
    }

    public function mechanics(){
        return $this->hasMany(Mechanic::class , 'lot_id');
    }

}

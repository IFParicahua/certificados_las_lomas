<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    protected $table = 'mechanics';

    protected $fillable = [
        'fy',
        'fx',
        'a',
        're',
        'd',
        'altura',
        'espaciamiento',
        'gap',
        'angulo',
        'lot_id',
    ];

    public function lote(){
        return $this->belongsTo(Lot::class , 'lot_id');
    }

    public function package(){
        return $this->belongsTo(Package::class , 'package_id');
    }
}

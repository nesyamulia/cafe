<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBeli extends Model
{
    use HasFactory;

    protected $fillable = [
        'nonota',
        'kdmenu',
        'hargabeli',
        'marginjual',
        'jumlahbeli',
        'subtotal',
    ];
}

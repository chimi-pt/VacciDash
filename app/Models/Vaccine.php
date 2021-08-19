<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;

    protected $table = 'vaccines';

    // protected $guarded=[];

    protected $fillable = [
        'product_name',
        'lot_number',
        'amount(vials)',
        'expiry_date',
        'mfg_date'
    ];
}

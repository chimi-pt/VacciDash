<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nairobi extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'vt_nairobi';

    protected $fillable = [
        'product_name',
        'lot_number',
        'vials',
        'temperature',
        'description',
        'expiry_date',
        'mfg_date'
    ];

}

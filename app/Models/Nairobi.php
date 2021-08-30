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
        'name',
        'lot_number',
        'status',
        'vials',
        'temperature',
        // 'description',
        'expiry_date',
        'mfg_date'
    ];

}

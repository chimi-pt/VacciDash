<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{    
    // protected $guarded = [];
    protected $table = 'vaccines';

    public static function search($search){

        return empty($search) ? static::query()
            : static::where('vaccine_id','like', '%'.$search.'%')
                ->orwhere('product_name','like', '%'.$search.'%')
                ->orwhere('lot_number','like', '%'.$search.'%');
    }
}

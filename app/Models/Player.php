<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model ;

class Player extends Model
{
    use HasFactory;

    protected  $fillable = [
         'username',
         'status',
         'unsubscribe_date',
    ];

   protected $dates = ['unsubscribe_date'];


}

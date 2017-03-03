<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{
    protected $fillable = [
        'title', 'domain', 'user_id' , 'description' , 'embedding'
    ];
}

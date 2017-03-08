<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Stream extends Model
{
    protected $fillable = [
        'title', 'domain', 'user_id' , 'description' , 'embedding'
    ];

    public function information()
    {
        return $this->hasOne(StreamsInformation::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StreamsInformation extends Model
{
    protected $fillable = [
        'stream_id', 'server', 'key' , 'code' , 'size'
    ];

    public function stream(){
        return $this->hasOne(Stream::class, 'stream_id');
    }

}

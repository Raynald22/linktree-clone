<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $guarded = [];

    public function link()
    {
        return $this->hasMany( Link::class);
    }

    public function visits()
    {
        return $this->hasManyThrough( Visit::class, Link::class);
    }
}

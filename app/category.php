<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['name','user_id'];

    public function user()
{
    return $this->belongsTo(User::class);
}

public function post()
{
    return $this->hasMany(post::class);
}
}

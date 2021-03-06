<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    public function quiz()
    {
        return $this->hasMany('App\Models\Quiz');
    }

    public function keyword()
    {
        return $this->hasMany('App\Models\Keyword');
    }
}

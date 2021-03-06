<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = [
        'title', 'image_src', 'answers_id', 'categories_id'
    ];

    public function answer()
    {
        return $this->belongsTo('App\Models\Answer');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}

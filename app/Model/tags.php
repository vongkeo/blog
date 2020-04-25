<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    protected $guarded = [];
    public function blog()
    {
        return $this->belongsToMany(blog_tag::class);
    }
}

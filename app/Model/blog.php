<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->hasMany(category::class);
    }
    public function comment()
    {
        return $this->hasMany(comment::class);
    }
    public function tag()
    {
        return $this->belongsToMany(blog_tag::class)->withTimestamps();
    }
}

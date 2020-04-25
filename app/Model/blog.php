<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $guarded = [];

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

    public static function inToArray($request)
    {
        return array(
            "title"  => $request->title,
            "slug"  => str_slug($request->title),
            "images"  => $request->images,
            "body"  => $request->body,
            "cat_id"  => $request->cat_id,
            "user_id"  => $request->user_id,
        );
    }
}

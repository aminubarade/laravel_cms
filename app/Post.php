<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $fillable = ['author_id', 'title', 'slug', 'body','excerpt','published_at'];

     protected $date = ['published_at'];

     public function setPublishedAttribute(){
     	$this->attributes['published_at'] = $value ?: null;
     }

     function author () {
     	return $this->belongsTo(User::class);
     }
}

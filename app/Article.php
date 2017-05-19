<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [ 'title', 'content', 'author_id' ];

    public function author()
    {
        $this->belongsTo('App\Author');
    }
}

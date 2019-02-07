<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reply extends Model
{
    protected $fillable = ['news_id','content'];

    public function news()
    {
        return $this->belongsTo('App\News');
    }
}

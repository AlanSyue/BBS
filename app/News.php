<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = ['user_id', 'subject', 'type','content'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function reply()
    {
        return $this->hasMany('App\reply');
    }
}

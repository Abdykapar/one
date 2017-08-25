<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $table = 'articles';

    protected $fillable = ['title','content','user_id','category_id','image','sub_text'];

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function category(){
        return $this->belongsTo('App\Category','category_id');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }
}

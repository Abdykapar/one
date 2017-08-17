<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'categories';

    protected $fillable = ['name','user_id'];

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function articles(){
        return $this->hasMany('App\Article');
    }
}

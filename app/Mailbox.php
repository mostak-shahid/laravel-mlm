<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mailbox extends Model
{
    protected $fillable = ['user_id','type','subject','parent','message'];
    // protected $guarded = [];
    public function users(){
        return $this->belongsToMany('App\User')
            ->withTimestamps()
            ->withPivot(['status','starred','read']);
    }
}

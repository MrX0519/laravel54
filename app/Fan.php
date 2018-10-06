<?php

namespace App;

use App\Model;

class Fan extends Model
{
    protected $table = 'fans';

    //粉丝用户
    public function fuse()
    {
        return $this->hasOne(\App\User::class,'id','fan_id');
    }

    //被关注用户
    public function suse()
    {
        return $this->hasOne(\App\User::class,'id','star_id');
    }
}

<?php

namespace App;

use App\Model;

class Topic extends Model
{
    protected $table = 'topics';

    //属于这个专题的所有文章
    public function posts()
    {
        return $this->belongsTomany(\App\Post::class,'post_topics','topic_id','post_id');
    }

    //专题的文章数,用于withCount
    public function postTopics()
    {
        return $this->hasMany(\App\PostTopic::class,'topic_id');
    }

}

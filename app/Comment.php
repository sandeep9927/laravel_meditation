<?php

namespace App;
use App\Technique;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    

    protected $date = ['deteted_at'];

    protected $fillable = ['user_id', 'post_id', 'parent_id', 'comment'];

    public function replies(){
        return $this->hasMany(Comment::class,'parent_id');
    }

    protected $guarded =[];


    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function technique()
    {
        return $this->belongsTo('App\Technique');
    }
}





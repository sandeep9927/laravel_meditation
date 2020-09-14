<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Technique extends Model
{
    use Rateable;

    public function parentCategory()
    {
        return $this->belongsTo('App\ParentCategory', 'parent_cat_id');
    }

    public function childCategory()
    {
        return $this->belongsTo('App\ChildCategory', 'child_cat_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment','post_id');
    }
}

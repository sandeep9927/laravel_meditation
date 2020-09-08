<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technique extends Model
{
    public function parentCategory(){
        return $this->belongsTo('App\ParentCategory','parent_cat_id');
    }

    public function childCategory(){
        return $this->belongsTo('App\ChildCategory','child_cat_id');
    }
}

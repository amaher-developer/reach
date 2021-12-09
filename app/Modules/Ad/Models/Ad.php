<?php

namespace App\Modules\Ad\Models;

use App\Modules\Ad\Models\GenericModel;


class Ad extends GenericModel
{

    protected $dates = [];

    protected $guarded = ['id'];
    protected $appends = [];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, 'ad_tag', 'ad_id', 'tag_id');
    }

}

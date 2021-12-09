<?php

namespace App\Modules\Ad\Models;

use App\Modules\Ad\Models\GenericModel;


class Tag extends GenericModel
{

    protected $dates = [];

    protected $guarded = ['id'];
    protected $appends = [];


    public function ads(){
        return $this->belongsToMany(Ad::class, 'ad_tag', 'tag_id', 'ad_id');
    }

}

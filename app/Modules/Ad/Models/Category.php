<?php

namespace App\Modules\Ad\Models;

use App\Modules\Ad\Models\GenericModel;


class Category extends GenericModel
{

    protected $dates = [];

    protected $guarded = ['id'];
    protected $appends = [];

    public function ads(){
        return $this->hasMany(Ad::class, 'category_id');
    }

}

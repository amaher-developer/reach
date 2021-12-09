<?php

namespace App\Modules\Ad\Models;

use App\Modules\Ad\Models\GenericModel;


class AdTag extends GenericModel
{

    protected $dates = [];

    protected $guarded = ['id'];
    protected $appends = [];

    protected $table = 'ad_tag';

}

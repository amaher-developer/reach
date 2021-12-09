<?php

namespace App\Modules\Ad\Models;

use Illuminate\Database\Eloquent\Model;

class GenericModel extends Model
{
    public static $table_columns = [];
    public $lang;
    protected $dates = ['deleted_at'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

    }


}

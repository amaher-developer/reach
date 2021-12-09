<?php

namespace App\Modules\Ad\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Caffeinated\Modules\Facades\Module;
use Illuminate\Container\Container as Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;

class GenericController extends Controller
{
    public $limit;

    public function __construct()
    {
        $this->limit = 20;
    }





}

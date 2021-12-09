<?php

namespace App\Modules\Ad\Http\Controllers\Admin;


use App\Modules\Ad\Models\Ad;
use App\Modules\Ad\Models\Category;
use App\Modules\Ad\Models\Tag;

class MainController extends GenericController
{

     public function __construct()
     {
         parent::__construct();

     }

    public function home()
    {
        $category_count = Category::count();
        $tag_count = Tag::count();
        $ad_count = Ad::count();
        return view('ad::admin.home', ['title' => 'Dashboard', 'category_count' => $category_count, 'tag_count' => $tag_count, 'ad_count' => $ad_count]);
    }


}

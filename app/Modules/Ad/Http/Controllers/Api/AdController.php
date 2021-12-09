<?php

namespace App\Modules\Ad\Http\Controllers\Api;

use App\Modules\Ad\Http\Controllers\Api\GenericController;
use App\Modules\Ad\Models\Ad;

class AdController extends GenericController
{

     public function __construct()
     {
         parent::__construct();

     }


    public function index()
    {
        $response = [];
        $tag = request('tag');
        $category = request('category');
        $ads = Ad::orderBy('id', 'DESC');
        $ads->when($tag, function ($query) use ($tag) {
            $query->whereHas('tags', function ($q) use ($tag){
               $q->where('name', 'like', "'%".$tag."%'");
            });
        });
        $ads->when($category, function ($query) use ($category) {
            $query->whereHas('category', function ($q) use ($category){
                $q->where('name', 'like', "'%".$category."%'");
            });
        });
        $response['ads'] = $ads->paginate($this->limit);

        return response()->json($response, 200);
    }





}

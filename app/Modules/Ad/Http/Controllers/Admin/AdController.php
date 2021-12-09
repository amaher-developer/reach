<?php

namespace App\Modules\Ad\Http\Controllers\Admin;

use App\Modules\Ad\Http\Controllers\Admin\GenericController;
use App\Modules\Ad\Http\Requests\AdRequest;
use App\Modules\Ad\Models\Ad;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

class AdController extends GenericController
{

     public function __construct()
     {
         parent::__construct();

     }


    public function index()
    {

        $title = 'Ad List';

            $ads = Ad::orderBy('id', 'DESC');


        $ads = $ads->paginate($this->limit);
        $total = $ads->total();


        return view('ad::Admin.ad_list', compact('ads','title', 'total'));
    }


    public function create()
    {
        $title = 'Create Ad';
        return view('ad::Admin.ad_form', ['ad' => new Ad(),'title'=>$title]);
    }

    public function store(AdRequest $request)
    {
        $ad_inputs = ($request->except(['_token']));
        Ad::create($ad_inputs);
        return redirect(route('listGymBlockMember'));
    }

    public function edit($id)
    {
        $ad = Ad::find($id);
        $title = 'Edit Ad';
        return view('ad::Admin.ad_form', ['ad' => $ad,'title'=>$title]);
    }

    public function update(AdRequest $request, $id)
    {
        $ad = Ad::find($id);
        $ad_inputs = ($request->except(['_token']));
        $ad->update($ad_inputs);
        return redirect(route('listAd'));
    }

    public function destroy($id)
      {
          $ad = Ad::find($id);
          $ad->delete();
        return redirect(route('listAd'));
     }



}

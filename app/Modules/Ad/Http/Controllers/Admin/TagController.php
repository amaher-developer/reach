<?php

namespace App\Modules\Ad\Http\Controllers\Admin;

use App\Modules\Ad\Http\Controllers\Admin\GenericController;
use App\Modules\Ad\Http\Requests\TagRequest;
use App\Modules\Ad\Models\Ad;
use App\Modules\Ad\Models\Tag;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

class TagController extends GenericController
{

     public function __construct()
     {
         parent::__construct();

     }


    public function index()
    {

        $title = 'Tag List';

            $tags = Tag::orderBy('id', 'DESC');


        $tags = $tags->paginate($this->limit);
        $total = $tags->total();


        return view('ad::Admin.tag_list', compact('tags','title', 'total'));
    }


    public function create()
    {
        $title = 'Create Tag';
        return view('ad::Admin.tag_form', ['tag' => new Tag(),'title'=>$title]);
    }

    public function store(TagRequest $request)
    {
        $tag_inputs = ($request->except(['_token']));
        Tag::create($tag_inputs);
        return redirect(route('listTag'));
    }

    public function edit($id)
    {
        $tag = Tag::find($id);
        $title = 'Edit Tag';
        return view('ad::Admin.tag_form', ['tag' => $tag,'title'=>$title]);
    }

    public function update(TagRequest $request, $id)
    {
        $tag = Tag::find($id);
        $tag_inputs = ($request->except(['_token']));
        $tag->update($tag_inputs);
        return redirect(route('listTag'));
    }

    public function destroy($id)
      {
          $tag = Tag::find($id);

          $tag->delete();

        return redirect(route('listTag'));
    }


}

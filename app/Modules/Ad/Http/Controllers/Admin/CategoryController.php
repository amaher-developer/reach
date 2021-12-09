<?php

namespace App\Modules\Ad\Http\Controllers\Admin;

use App\Modules\Ad\Http\Controllers\Admin\GenericController;
use App\Modules\Ad\Http\Requests\CategoryRequest;
use App\Modules\Ad\Models\Ad;
use App\Modules\Ad\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

class CategoryController extends GenericController
{

     public function __construct()
     {
         parent::__construct();

     }


    public function index()
    {

        $title = 'Category List';

            $categories = Category::orderBy('id', 'DESC');


        $categories = $categories->paginate($this->limit);
        $total = $categories->total();


        return view('ad::Admin.category_list', compact('categories','title', 'total'));
    }


    public function create()
    {
        $title = 'Create Category';
        return view('ad::Admin.category_form', ['category' => new Category(),'title'=>$title]);
    }

    public function store(CategoryRequest $request)
    {
        $category_inputs = ($request->except(['_token']));
        Category::create($category_inputs);
        return redirect(route('listCategory'));
    }

    public function edit($id)
    {
        $category = Category::find($id);
        $title = 'Edit Category';
        return view('ad::Admin.category_form', ['category' => $category,'title'=>$title]);
    }

    public function update(CategoryRequest $request, $id)
    {
        $category = Category::find($id);
        $category_inputs = ($request->except(['_token']));
        $category->update($category_inputs);
        return redirect(route('listCategory'));
    }

    public function destroy($id)
      {
          $category = Category::find($id);
          $category->delete();
        return redirect(route('listCategory'));
    }


}

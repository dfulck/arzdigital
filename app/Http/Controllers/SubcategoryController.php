<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('Panel.Subcategory.index',[
            'subcategories'=>Subcategory::all()
        ]);
    }

    /**
     * @param Subcategory $subcategory
     */
    public function show(Subcategory $subcategory)
    {
        dd($subcategory);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Category $category)
    {

       $request->validate([
           'title'=>['required'],
       ]);
       $subcategory=Subcategory::query()->create([
           'title'=>$request->get('title'),
           'link'=>$request->get('link')
       ]);

        $category->subcategories()->attach($subcategory);
        session()->flash('success', "ایجاد شد");
        return redirect()->back();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'title'=>['required'],
        ]);
      $category->subcategories()->sync($request->get('title'));
        session()->flash('info', "ویرایش تکمیل شد");
      return redirect()->back();
    }
    /**
     * @param Subcategory $subcategory
     */
    public function destroy(Subcategory $subcategory)
    {
        $subcategory->categories()->detach(Category::all());
       $subcategory->delete();
        session()->flash('error', "با موفقیت حذف شد");
       return redirect()->back();
    }


}

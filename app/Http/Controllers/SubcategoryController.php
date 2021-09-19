<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Category $category)
    {

       $subcategory=Subcategory::query()->create([
           'title'=>$request->get('title')
       ]);

        $category->subcategories()->attach($subcategory);

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

      $category->subcategories()->sync($request->get('title'));

      return redirect()->back();
    }
    /**
     * @param Subcategory $subcategory
     */
    public function destroy(Subcategory $subcategory,Category $category)
    {
        $category->subcategories()->detach($subcategory);
       $subcategory->delete();
       return redirect()->back();
    }


}

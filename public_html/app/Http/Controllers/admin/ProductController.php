<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\AdminController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Morilog\Jalali\Jalalian;

class ProductController extends AdminController
{
    function index()
    {
        $this->data->products=Product::all();
        return view("admin.products")->withData($this->data);
    }



    function single(Request $request)
    {

        $product = new Product();
        if ($request->has("id")) {
            $product = Product::where("id", $request->id)->first();
            if (!$product){
                $product=new Product();
            }
        }
        $this->data->product = $product;

        return view("admin.product")->withData($this->data);
    }

    function save(Request $request)
    {


        if ($request->has("id") and $request->id!=""){
            $product=Product::where("id",$request->id)->first();
        }
        else{
            $product=new Product();
        }

        $product->title=$request->title;
        $product->amount=$request->amount;
        $product->price=$request->price;
        $product->body=$request->body;
        $product->image=$request->image;
        $product->status=$request->status;
        $product->save();
        return redirect()->route("admin.products");
    }
    function upload(Request $request){

        $data = $request->input("file");
        $image_array_1 = explode(";", $data);
        $image_array_2 = explode(",", $image_array_1[1]);
        $data = base64_decode($image_array_2[1]);
        $output = "profile-" . time() . ".png";

        file_put_contents("uploads/images/" . $output, $data);
        $data = array(
            'image' => $output
        );
        return response(json_encode($data));

    }
    function remove(Request $request){
        $product=Product::where("id",$request->id)->first();
        if ($product){
            $product->delete();
        }
        return redirect()->route("admin.products");
    }

}

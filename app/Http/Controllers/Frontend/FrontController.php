<?php

namespace App\Http\Controllers\frontend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
   public function index(){
       $feat_product = Product::where('trending','1')->take(15)->get();
       $trending_cat = Category::where('popular' , '1')->take(15)->get();
       return view('frontend.index' , compact('feat_product' , 'trending_cat'));
   }

   public function dategory(){
       $dategory = Category::where('status' , '0')->get();
       return view('frontend.category' , compact('dategory'));
   }
   public function viewcat($slug){
if(Category::where('slug' , $slug)->exists()){
   $category = Category::where('slug' , $slug)->first();
          $product = Product::where('cat_id' , $category->id)->where('status' , '0')->get();
          return view('frontend.products.index' , compact('category', 'product'));
}else{
    return redirect('/')->with('status' , "link is broken");
}

   }
   public function product_view($cat_slug,$prod_slug){
    if(Category::where('slug' , $cat_slug)->exists()){
    if(Product::where('slug' , $prod_slug)->exists()){
         $product = Product::where('slug' , $prod_slug)->first();
         return view('frontend.products.view' , compact('product'));
      }else{
return redirect('/')->with('status' , "link broken");
     }
      }else{
        return redirect('/')->with('status' , "link broken");
             }
   }
   

}

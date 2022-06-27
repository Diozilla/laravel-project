<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addcart(Request $request){
          $prod_id = $request->input('prod_id');
         $prod_qty = $request->input('prod_qty');
         if(Auth::check()){
              $prod_check = Product::where('id' , $prod_id)->first();
              if($prod_check){
                  if(Cart::where('prod_id' , $prod_id)->where('user_id' , Auth::id())->exists()){
                    return response()->json(['status'  => $prod_check->name.  " already added to cart "]);
                  }else{
                    $cartitem = new Cart();
                    $cartitem->user_id = Auth::id();
                    $cartitem->prod_id = $prod_id ;
                    $cartitem->prod_qty = $prod_qty ;
                    $cartitem->save();
                    return response()->json(['status' => $prod_check->name." added to cart"]);
                  }
                  

              }
         }else{
             return response()->json(['status'  => "log in to continue"]);
         }
    }
    public function viewcart(){
      $cartitems = Cart::where('user_id' , Auth::id())->get();
      return view('frontend.cart' , compact('cartitems'));
    }
    public function updatecart(Request $request){
      $prod_id = $request->input('prod_id');
      $prod_qty = $request->input('prod_qty');
      if(Auth::check()){
        if(Cart::where('prod_id' , $prod_id)->where('user_id' , Auth::id())->exists()){
          $cart = Cart::where('prod_id' , $prod_id)->where('user_id' , Auth::id())->first();
          $cart->prod_qty = $prod_qty;
          $cart->update();
          return response()->json(['status'  => "DONE QTY"]);
        }
      }

    }
    public function deletecart(Request $request){
      if(Auth::check()){
        $prod_id = $request->input('prod_id');
        if(Cart::where('prod_id' , $prod_id)->where('user_id' , Auth::id())->exists()){
          $cartitems = Cart::where('prod_id' , $prod_id)->where('user_id' , Auth::id())->first();
          $cartitems->delete();
          return response()->json(['status'  => "product has been removed"]);

        }
      }else{
        return response()->json(['status'  => "log in to continue"]);
      }
       
    }
    
}

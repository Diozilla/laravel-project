<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(){
        $cartitems = Cart::where('user_id' , Auth::id())->get();
        return view('frontend.checkout' , compact('cartitems'));
    }
}

<?php  

namespace App\Http\Controllers;  

use Illuminate\Http\Request;  
use App\Models\CartModel;  
use Illuminate\Support\Facades\Auth;  
use Illuminate\Support\Facades\Log; // Don't forget to include Log.  

class CartController extends Controller  
{  
    public function OrderGet()  
    {  
        if (Auth::check()) {  
            // Retrieve all orders associated with the authenticated user  
            $all_orders = CartModel::where('user_id', Auth::user()->id)->get();  
          


            // Check if there are orders and return the view  
            return view('cart.cart', ['data' => $all_orders]);  
        } else {  
            return redirect()->route('UserRegisterget');  
        }  
    }  
}
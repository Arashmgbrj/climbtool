<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalUser;  
use App\Models\CartModel;  
use App\Models\DeliveryAccepdedModel;  
use App\Models\DeliveryDenyModel;  
use App\Models\NoneOrderModel;  
use App\Models\ReduceeOrderModel;  
use Illuminate\Support\Facades\Auth; 

class UserController extends Controller
{
    public function generateRandomNumber($length = 5) {
        $min = pow(10, $length - 1); // حداقل مقدار (مثلاً 10000 برای 5 رقم)
        $max = pow(10, $length) - 1; // حداکثر مقدار (مثلاً 99999 برای 5 رقم)
        return mt_rand($min, $max);
    }
    public function UserGet()
    {
        if(Auth::check())
        {
            return View('user.user');
            

        }
        else{
            return redirect()->route('UserRegisterget');
        }
    }
public function UserPost(Request $request)
{
    if (Auth::check()) {
        $name = $request->inp_name;
    
        $user_id = Auth::user()->id;
        $personalUser = PersonalUser::find($user_id);
        
        
        if ($personalUser) {
            $personalUser->user_name = $name;
            $personalUser->avrivated_token = $this->generateRandomNumber();
            $personalUser->save();
            return redirect()->route('UserGet');
        } else {
            return redirect()->route('UserRegisterget');
        }
    } else {
        return redirect()->route('UserRegisterget');
    }
}
}

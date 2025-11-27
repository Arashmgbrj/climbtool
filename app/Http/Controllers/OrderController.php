<?php  

namespace App\Http\Controllers;  

use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Auth;   
use App\Models\CartModel;  
use App\Models\ProductModel;  
use App\Models\ReduceeOrderModel;  
use App\Models\AdressModel;  
use Illuminate\Support\Facades\DB;  
use PayPing\Payment;  
use Exception;  

class OrderController extends Controller  
{  
    public function factor_generator()  
    {  
        // Generate a random 10-digit number  
        return rand(1000, 9999);  
    }  

    public function payingGet()  
    {  
        if (Auth::check())  
        {  
            $factor = $this->factor_generator();   
            // Get all user orders  
            $all_orders = CartModel::where("user_id", Auth::user()->id)->get();   

            // Check if there are no orders  
            if ($all_orders->isEmpty()) {  
                return redirect()->route('Storeget'); // Redirect to the store page  
            }  

            $price = 0;  
            foreach ($all_orders as $al)   
            {  
                $product = ProductModel::find($al->product_id);  
                if ($product)   
                {  
                    $price += $product->price * $al->count;  
                }  
            }  

            $add = AdressModel::where("user_id", Auth::id())->exists();  
            $add_sernd = $add ? AdressModel::where("user_id", Auth::id())->first() : [];    

            return view("orders.order", ['data' => $all_orders, 'price' => $price, "add" => $add_sernd]);  
        }  

        return redirect()->route("UserRegisterget");  
    }  

    public function payingGetDelete()  
    {  
        $all_cart = CartModel::where("user_id", Auth::user()->id)->get();  
        $factor = $this->factor_generator();  
        
        // Use transaction for data integrity  
        DB::transaction(function() use ($all_cart, $factor) {  
            foreach ($all_cart as $al)   
            {  
                $new_reduce = new ReduceeOrderModel();  
                $new_reduce->user_id = Auth::user()->id;  

                $product = ProductModel::find($al->product_id);  
                if ($product)   
                {  
                    $new_reduce->pr_name = $product->title;  
                    $new_reduce->img = $al->img;  
                    $new_reduce->factor = $factor;   

                    // Update stock  
                    $c = $al->count;  
                    $product->integer += $c; // Assumed 'quantity' is the correct column name  
                    $product->save(); // Ensure to save after updating stock  
                }   
                else   
                {  
                    $new_reduce->pr_name = "نامشخص"; // If product not found  
                }  
                
                $new_reduce->save();  
                $al->delete();  
            }  
        });  

        return redirect()->route('Storeget');  
    }  
    public function go_paying()  
{  
    // دریافت همه داده‌های سبد خرید کاربر جاری  
    $all_data = CartModel::where("user_id", Auth::user()->id)->get();  
    $price = 0;  
    $factor = $this->factor_generator();  

    // محاسبه مجموع قیمت  
    foreach ($all_data as $item)   
    {  
        $product = ProductModel::find($item->product_id);  
        if ($product)   
        {  
            $price += $product->price * $item->count;  
        }  
    }  

    // در صورتی که سبد خرید خالی باشد  
    if ($price <= 0) {  
        return response()->json(['error' => 'سبد خرید خالی است.'], 400);  
    }  

    $token = "FNn22_-5dv87X5fCoXKcR_M4FHTy2MxKGD4krbFRCqY";  
    $args = [  
        "amount" => 2000, // قیمت داینامیک بر اساس مجموع قیمت  
        "payerName" => Auth::user()->user_name,  
        "returnUrl" => "http://192.168.1.134:8000/payment/callbacks",  
        "clientRefId" => (string)$factor  
    ];  

    $payment = new Payment($token);  

    try   
    {  
        $payment->pay($args);  
        header('Location: ' . $payment->getPayUrl());  
        exit(); // اطمینان از اینکه هیچ کد دیگری اجرا نشود  
    }   
    catch (Exception $e)   
    {  
        // مدیریت استثنای احتمالی  
        return response()->json(['error' => $e->getMessage()], 500);  
    }  
}



    public function callback()  
    {  
        // This method needs implementation  
    }  

    public function addAddress(Request $request)  
    {  
        
        // بررسی وجود نام و آدرس و کد پستی  
        if (!$request->addr || !$request->post_id)   
        {  
            return redirect()  
                ->back()  
                ->with('error', 'لطفاً تمام فیلدها را پر کنید.')  
                ->withInput();  
        }  

        $address = $request->addr;  
        $post_code = $request->post_id;  
        $userId = Auth::id();  

        // پیدا کردن آدرس موجود  
        $addr = AdressModel::where('user_id', $userId)->first();  

        if ($addr)   
        {  
            // به‌روزرسانی آدرس موجود  
            $addr->address = $address;  
            $addr->post_id = $post_code;  
            $addr->save(); // ذخیره تغییرات  
        }   
        else   
        {  
            // ایجاد رکورد جدید آدرس  
            $newAddr = new AdressModel();  
            $newAddr->address = $post_code;  
            $newAddr->user_id = $userId;  
            $newAddr->post_id = $address;  
            $newAddr->save();  
        }  

        return redirect()->route('OrderGet');  
    }  
}
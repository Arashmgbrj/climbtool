<?php  

namespace App\Http\Controllers\Api;  

use App\Http\Controllers\Controller;  
use Illuminate\Http\Request;  
use App\Models\CartModel;  
use Illuminate\Support\Facades\Auth;  
use App\Models\ProductModel;  
use App\Models\ProductsCategoryModel;  

class CartController extends Controller  
{  
 public function json_response($is_success, $msg)  
  {  
     if ($is_success) {  
        return response()->json(['is_success' => true, 'msg' => $msg], 200);   
     } else {  
        return response()->json(['is_success' => false, 'msg' => $msg], 401);   
     }  
   }  

 public function Add_to_cart($p_id, $counter, $u_id)  
  {  
    try {  
        $pr = ProductModel::find($p_id);  
        
        if (!$pr) {  
            return $this->json_response(false, 'محصول پیدا نشد');  
        }  

        $pr_count = $pr->integer; // فرض بر این است که این فیلد تعداد موجودی است  

        if ($counter > $pr_count) {  
            return $this->json_response(false, 'بیش از تعداد مجاز');  
        }  

        $deff = $pr_count - $counter;  
        $pr->integer = $deff; // به روز رسانی مقدار موجودی  
     
        $pr->save(); // ذخیره تغییرات موجودی محصول  

        // بررسی وجود محصول در سبد خرید کاربر  
        $existing_order = CartModel::where('user_id', $u_id)  
                        ->where('product_id', $p_id)  
                        ->first();  

        if ($existing_order) {  
            // اگر محصول قبلاً در سبد خرید وجود داشت شمارنده را افزایش می‌دهیم  
            $existing_order->count += $counter;  
            $existing_order->save();  
            return $this->json_response(true, "تعداد محصول در سبد خرید افزایش یافت");  
        } else {  
            // افزودن محصول به سبد خرید  
            $new_order = new CartModel();  
            $new_order->user_id = $u_id;  
            $new_order->product_id = $p_id;  
            $new_order->name = $pr->title;
            $new_order->img = $pr->img;
            $new_order->count = $counter;  
            $new_order->save();  
            return $this->json_response(true, "محصول به سبد خرید اضافه شد");  
        }  
    } catch (\Throwable $th) {  
        return $this->json_response(false, $th->getMessage()); // برای نمایش خطاهای عمومی  
    }  
  }
 public function Get_product($p_id)
 {
    try {
        $pr  = ProductModel::find($p_id);
        $this->json_response(true,$pr);
    } catch (\Throwable $th) {
        $this->json_response(false,$th);
    }
   
 }
 public function Delete_order($p_id,$o_id)
 {
    try {
        $delete_item = CartModel::find($o_id);
        $count = $delete_item->count;
        $add  =   ProductModel::find($p_id);
        $add->integer += $count;
        $add->save();
        $delete_item->delete();
        $this->json_response(true,'محصول حدف شد..');
    } catch (\Throwable $th) {
        $this->json_response(false,$th);
    }

     

    
 }
 public function Get_Count($u_id)
 {
    try {
        $all = CartModel::where('user_id',$u_id)->count();
        $this->json_response(true,$all);

        
        
    } catch (\Throwable $th) {
        //throw $th;
        $this->json_response(false,$th);
    }
    
 }
 public function get_cat()
 {
    try {
        $all = ProductsCategoryModel::all();
        $this->json_response(true,$all);

        
        
    } catch (\Throwable $th) {
        //throw $th;
        $this->json_response(false,$th);
    }
    
 }


}


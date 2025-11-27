<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\Notanserproduct;
use App\Models\Anserrdanserproduct;
use App\Models\viewOtherModel;
use App\Models\viewProductModel;
use App\Models\ProductsCategoryModel;
use Illuminate\Support\Facades\Auth; 

class ProductController extends Controller
{
    public function Storeget(Request $request)
    {
        // دریافت فیلترها از درخواست
        $filters = $request->only(['search', 'category', 'price_range']);
        $name = "";
        if(!empty($filters['search'])){
               $name = $filters['search'];
        }
        
        // شروع Query برای اعمال فیلترها
        $query = ProductModel::query();

        // اگر فیلتر جستجو ارسال شده باشد
        if (!empty($filters['search'])) {
            $query->where(function ($query) use ($filters) {
                $query->orWhere('title', 'like', '%' . $filters['search'] . '%')
                      ->orWhere('cat1', 'like', '%' . $filters['search'] . '%')
                      ->orWhere('cat2', 'like', '%' . $filters['search'] . '%')
                      ->orWhere('cat3', 'like', '%' . $filters['search'] . '%')
                      ->orWhere('cat4', 'like', '%' . $filters['search'] . '%');
                      // فرض بر این است که فیلد tags وجود دارد
            });
        }

        // اگر فیلتر دسته‌بندی ارسال شده باشد
        if (!empty($filters['category'])) {
            $query->where(function ($query) use ($filters) {
                $query->orWhere('cat1', $filters['category'])
                      ->orWhere('cat2', $filters['category'])
                      ->orWhere('cat3', $filters['category'])
                      ->orWhere('cat4', $filters['category']);
            });
        }

        // اگر فیلتر محدوده قیمت ارسال شده باشد
        if (!empty($filters['price_range'])) {
            // فرض: مقدار price_range به شکل "min-max" است
            [$min, $max] = explode('-', $filters['price_range']);
            $query->whereBetween('price', [(float)$min, (float)$max]);
            $query->whereBetween('is_offer_price', [(float)$min, (float)$max]);
        }

        // اجرای کوئری و دریافت داده‌ها
        $all_pr = $query->get();
        $chech_view = viewOtherModel::where("page_name","store")->exists();
        if($chech_view)
        {
            $chech_view_find = viewOtherModel::where("page_name","store")->first();
            $chech_view_find->view =  $chech_view_find->view +1;
            $chech_view_find->save();


        }
        else{
          $chech_view_find = new viewOtherModel();
          $chech_view_find->page_name = "store";
          $chech_view_find->view =1;
          $chech_view_find->save();

        }
        $all_pr_cat = ProductsCategoryModel::all();

        


        // بازگشت به ویو با محصولات
        return view("Products.store", ['data' => $all_pr,'name'=>$name,"cat"=>$all_pr_cat]);
    }

    public function ProductGet($name_pr)
    {
     
        
     
        $data = ProductModel::where("title",$name_pr)->first();
        $chech_view = viewProductModel::where("product_name",$name_pr)->exists();
        if($chech_view)
        {
            $chech_view_find = viewProductModel::where("product_name",$name_pr)->first();
            $chech_view_find->view =  $chech_view_find->view +1;
            $chech_view_find->save();


        }
        else{
          $chech_view_find = new viewProductModel();
          $chech_view_find->product_name = $name_pr;
          $chech_view_find->view =1;
          $chech_view_find->save();

        }
        $sl_pr = ProductModel::orderBy('created_at', 'desc')->take(7)->get();  
        $commnts_not_ansered = Notanserproduct::where("product_name",$name_pr)->get();
        $commnts_ansered = Anserrdanserproduct::where("product_name",$name_pr)->get();
    

        return view('Products.product', ['data' => $data,"pr"=>$sl_pr,"not_ans"=>$commnts_not_ansered,"ans"=>$commnts_ansered]);
    }
    public function ProductPost(Request $request,$pr_name)
    {
        if(Auth::check()){
            $qu = $request->qu;
            $name = $request->name;
            $new_comment = new Notanserproduct();
            $new_comment->user_name = $name;
            $new_comment->product_name = $pr_name;
            $new_comment->qu = $qu;
            $new_comment->save();
            $data = ProductModel::where("title",$pr_name)->first();
            $sl_pr = ProductModel::orderBy('created_at', 'desc')->take(7)->get();  
            $commnts_not_ansered = Notanserproduct::where("product_name",$pr_name)->get();
            $commnts_ansered = Anserrdanserproduct::where("product_name",$pr_name)->get();

            return view('Products.product', ['data' => $data,"pr"=>$sl_pr,"not_ans"=>$commnts_not_ansered,"ans"=>$commnts_ansered]);

     
        }
        else{
            return redirect()->route('UserRegisterget');
        }

        }
    
}

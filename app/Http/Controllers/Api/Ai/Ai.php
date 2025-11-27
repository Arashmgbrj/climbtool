<?php  

namespace App\Http\Controllers\Api\Ai;  

use App\Http\Controllers\Controller;  
use Illuminate\Http\Request;  
use App\Models\TitleAiBlog;  
use App\Models\BlogModel;  
use App\Models\AiKeywords;  
use App\Models\NotAnseredModelBlog;  
use App\Models\AnseredModelBlog;  
use App\Models\Notanserproduct;  
use App\Models\Anserrdanserproduct;  

class Ai extends Controller  
{  
    public function Response($status, $message, $c)  
    {  
        return response()->json([  
            'status' => $status,  
            'msg' => $message,  
        ], $c);  
    }   

    public function all_title_blog()  
    {  
        try {  
            $all_titles = TitleAiBlog::all(); 
            if($all_titles->isEmpty())
            {
                return $this->Response(false, false, 200); // بازگشت نتیجه  


            } 
            else{
                return $this->Response(true, true, 200); // بازگشت نتیجه  

            }
        } catch (\Throwable $th) {  
            return $this->Response(false, $th->getMessage(), 400); // پیام خطا به صورت رشته  
        }  
    }  
    
    public function get_all_blog()  
    {  
        try {  
            $all_titles = BlogModel::pluck('title'); // همه تایتل‌ها را برمی‌گرداند  
            return $this->Response(true, $all_titles, 200); // بازگشت نتیجه  
        } catch (\Throwable $th) {  
            return $this->Response(false, $th->getMessage(), 400); // پیام خطا به صورت رشته  
        }  
    }  
    public function set_title_ai(Request $request)
    {
        $data = $request->data;
        foreach ($data as $d){
            $new_title = new TitleAiBlog();
            $new_title->title = $d;
            $new_title->save(); 

        }
        return $this->Response(true,"ok",200);

    }
    public function delete_last_title()  
    {  
     try {  
        // پیدا کردن آخرین رکورد  
        $last_title = TitleAiBlog::latest()->first();  

        // اگر رکوردی وجود نداشت  
        if ($last_title) {  
            $last_title->delete(); // حذف رکورد  
            return $this->Response(true, "Deleted successfully", 200);  
        } else {  
            return $this->Response(false, "No title found to delete", 404);  
        }  
     } catch (\Throwable $th) {  
        // مدیریت خطا  
         return $this->Response(false, $th->getMessage(), 400);  
     }  
    }
    public function get_all_key_words()  
    {  
        try {  
            // فقط کلیدهای 'k_name' را استخراج کنید  
            $allKNames = AiKeywords::pluck('k_name');  
            return $this->Response(true, $allKNames, 200);  
        } catch (\Throwable $th) {  
            return $this->Response(false, $th->getMessage(), 400);  
        }  
    }  
    public function add_key_word(Request $request)
    {

        try {
            $key_words  = $request->data;
            $new_key_word = new AiKeywords();
            $new_key_word->k_name= $key_words;
            $new_key_word->save();
            return $this->Response(true,'ok',201);
            

            
        } catch (\Throwable $th) {
            return $this->Response(false,$th,400);
        }
    }
    public function get_last_title()
    {
        try {
            $l = TitleAiBlog::latest()->first();
            return $this->Response(true,$l->title,200);
        } catch (\Throwable $th) {
            //throw $th;
            return $this->Response(false,$th,400);
        }
    }
    public function set_article(Request $request)
    {
       
        $title = $request->title;
        $key = $request->key_word;
        $titrs = $request->titrs;
        $alt = $request->alts;;
        try {
            $new_blog = new BlogModel();
            $new_blog->title = $title;
            $new_blog->key_words = $key;
            $new_blog->alts = $alt;
            
            $new_blog->save();
            $delete_title = TitleAiBlog::where("title",$title);
            $delete_title->delete();
            return $this->Response(true,"set",201);
        } catch (\Throwable $th) {
            //throw $th;
            return $this->Response(false,$th,400);
        } 
    }
    public function get_questchen()
    {
        $lastData = NotAnseredModelBlog::latest()->first(); // گرفتن آخرین رکورد  

        if (is_null($lastData)) {  
            // اگر داده‌ای وجود نداشت  
           return $this->Response(false,"خالی است",404);
        } else {  
            // اگر داده‌ای وجود داشت  
            return $this->Response(true,$lastData,200);  
        }  
    }
    public function set_result_blog(Request $request)  
    {  
        // دریافت داده‌ها از درخواست  
        $blog_name = $request->blog_name;  
        $user_name = $request->user_name;  
        $qu = $request->qu;  
        $an = $request->an;  
    
        // ایجاد یک رکورد جدید در مدل AnseredModelBlog  
        $new_or = new AnseredModelBlog();  
        $new_or->user_name = $user_name;  
        $new_or->blog_name = $blog_name;  
        $new_or->qu = $qu;  
        $new_or->an = $an; // نقطه‌ویرگول اضافه شد  
        $new_or->save();  
    
        // حذف رکورد از جدول NotAnseredModelBlog  
        NotAnseredModelBlog::where('user_name', $user_name)  
            ->where('blog_name', $blog_name)  
            ->where('qu', $qu)  
            ->delete();  
        
        return $this->Response(true,"ok",201);
    }
    public function get_questchen_pr()
    {
        $lastData_item = Notanserproduct::latest()->first(); // گرفتن آخرین رکورد  

        if (is_null($lastData_item)) {  
            // اگر داده‌ای وجود نداشت  
           return $this->Response(false,"خالی است",404);
        } else {  
            // اگر داده‌ای وجود داشت  
            return $this->Response(true,$lastData_item,200);  
        }  
        

    }
    public function set_questchen_pr(Request $request)
    {
        try {
            $user_name = $request->user_name;
            $product_name = $request->product_name;
            $qu = $request->qu;
            $an = $request->an;
          

            $new_record = new Anserrdanserproduct();
            $new_record->user_name = $user_name;
            $new_record->product_name = $product_name;
            $new_record->qu = $qu;
            $new_record->an = $an;
            $new_record->save();
           
            Notanserproduct::where('user_name', $user_name)  
            ->where('product_name', $product_name)  
            ->where('qu', $qu)  
            ->delete();  
            return $this->Response(true,"ok",200);
        } catch (\Throwable $th) {
            return $this->Response(false,$th,400);
        }
       
    }
}
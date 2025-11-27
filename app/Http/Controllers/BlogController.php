<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogModel;
use App\Models\MasterBlog;
use App\Models\NotAnseredModelBlog;
use App\Models\viewblogModel;
use App\Models\AnseredModelBlog;
use App\Models\CategoryBlogs;
use Illuminate\Support\Facades\Auth; 

class BlogController extends Controller
{
    public function BlogItemsGet($name) {  
        $data = MasterBlog::where("title", $name)->first(); 

        $msg = "";
    
        // بررسی اینکه آیا داده‌ی مورد نظر پیدا شده است یا خیر  
        if (!$data) {  
            // در صورتی که داده‌ای پیدا نشد، به صفحه‌ی 404 هدایت می‌شود  
            abort(404);  
        }  
        $check_view = viewblogModel::where("blog_name", $name)->exists();
        if($check_view)
        {
            $check_view_data = viewblogModel::where("blog_name", $name)->first();
            $check_view_data->view = $check_view_data->view +1;
            $check_view_data->save();
        

        }
        else{
       
            $new = new viewblogModel();
            $new->blog_name = $name;
            $new->view = 1;
            $new->save();

        }
    
        // دریافت سه مقاله آخر  
        $recentPosts = MasterBlog::orderBy('created_at', 'desc')->take(3)->get();

        $comment_an = AnseredModelBlog::where("blog_name",$name)->get();
        $comment_no = NotAnseredModelBlog::where("blog_name",$name)->get();
        $f_blog =  MasterBlog::orderBy('created_at', 'desc')->take(6)->get();  


    
        return View("blog.blog", ["title"=>$name,'data' => $data, 'recentPosts' => $recentPosts,"msg"=>$msg,"comment_n"=>$comment_no,"comment_an"=>$comment_an,"f_bl"=>$f_blog]);  
    }
    public function blog_main() {  
        $data = MasterBlog::all(); 
        $cat =  CategoryBlogs::orderBy('created_at', 'desc')->take(4)->get();  
        $f_blog =  MasterBlog::orderBy('created_at', 'desc')->take(4)->get();  


    
    
        return View("blog.all_blog", ["data"=>$data,"cat"=>$cat,"f_blog"=>$f_blog]);  
    }
    public function BlogItemsPost(Request $request,$name)
    {
        if(Auth::check())
        {
            $re_name = $request->name;
            
            $re_qu = $request->comment;
            $new_qu = new NotAnseredModelBlog();
            $comment_an = AnseredModelBlog::where("blog_name",$name)->get();
            $comment_no = NotAnseredModelBlog::where("blog_name",$name)->get();
            $new_qu->user_name = $re_name;
            $new_qu->blog_name = $name;
            $new_qu->qu = $re_qu;
            $new_qu->save();
            $data = MasterBlog::where("title", $name)->first(); 
            $f_blog =  MasterBlog::orderBy('created_at', 'desc')->take(4)->get();  

            $recentPosts = MasterBlog::orderBy('created_at', 'desc')->take(3)->get(); 
            $msg = "نظر شما ثبت شد"; 
            return View("blog.blog", ["title"=>$name,'data' => $data, 'recentPosts' => $recentPosts,"msg"=>$msg,"comment_n"=>$comment_no,"comment_an"=>$comment_an,"f_bl"=>$f_blog]);  





        }
        else{
            return redirect()->route("UserRegisterget");
        }
     
        

    }

}

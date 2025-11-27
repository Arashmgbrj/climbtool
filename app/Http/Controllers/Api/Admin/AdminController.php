<?php  

namespace App\Http\Controllers\Api\admin;  

use App\Http\Controllers\Controller;  
use Illuminate\Http\Request;  
use App\Models\AdminModel;  
use App\Models\PersonalUser;  
use App\Models\ProductModel;  
use App\Models\ProductsCategoryModel;  
use App\Models\MasterBlog;  
use App\Models\CategoryBlogs;  
use App\Models\Anserrdanserproduct;  
use App\Models\Notanserproduct;  
use App\Models\AnseredModelBlog;  
use App\Models\NotAnseredModelBlog;  
use App\Models\BlogModel;  
use App\Models\AccepteOrderModel;
use App\Models\ReduceeOrderModel;
use App\Models\NoneOrderModel;
use App\Models\DeliveryAccepdedModel;
use App\Models\DeliveryModel;
use App\Models\AdressModel;
use App\Models\viewblogModel;
use App\Models\viewOtherModel;
use App\Models\viewProductModel;
use App\Models\ContactModel;
use Illuminate\Support\Facades\Validator; 




class AdminController extends Controller  
{  
    public function generateRandomNumber($length = 5) {
        $min = pow(10, $length - 1); // حداقل مقدار (مثلاً 10000 برای 5 رقم)
        $max = pow(10, $length) - 1; // حداکثر مقدار (مثلاً 99999 برای 5 رقم)
        return mt_rand($min, $max);
    }
    public function generateRandomSentence($wordCount = 10) {  
        $words = [];  
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.,;!?';  
        
        for ($i = 0; $i < $wordCount; $i++) {  
            $wordLength = rand(3, 10); // طول کلمات بین 3 تا 10 حرف  
            $word = '';  
            
            for ($j = 0; $j < $wordLength; $j++) {  
                $word .= $characters[rand(0, strlen($characters) - 1)];  
            }  
            
            $words[] = $word;  
        }  
        
        return implode(' ', $words) . '.';  
    } 
    public function Response($status, $message, $c)  
    {  
        return response()->json([  
            'status' => $status,  
            'msg' => $message,  
        ], $c);  
    }  
   
    public function check_user(Request $request)  
    {  
        try {  
            $token = $request->token; // توکن را از درخواست دریافت می‌کنیم  
            if (!$token) {  
                return $this->Response(false, 'کرم نریز دلقک', 404); // اگر توکن موجود نبود  
            } else {  
                $A_c = AdminModel::where('token', $token)->exists(); // بررسی وجود کاربر با توکن  
                if ($A_c) {  
                    return $this->Response(true, 'کاربر وجود دارد', 200);  
                } else {  
                    return $this->Response(false, 'کاربر وجود ندارد', 401);  
                }  
            }  
        } catch (\Throwable $th) {  
            return $this->Response(false, 'خطای داخلی', 400);  
        }  
    }  

    public function c_pa(Request $request)  
    {  
        try {
            $user_name = $request->query('username'); // دریافت نام کاربری  
            $pass = $request->query("password"); // دریافت رمز عبور  
            // $this->Response(false,$user_name,200);
            // جستجوی کاربر بر اساس نام کاربری  
            $find_user = AdminModel::where('name', $user_name)->first();  
    
            if ($find_user) { // اگر کاربر پیدا شد  
                $u_p = $find_user->pass; // دریافت رمز عبور کاربر  
    
                if ($u_p == $pass) { // بررسی رمز عبور  
                    return $this->Response(true, $find_user->token, 200); // اگر رمز صحیح بود  
                } else {  
                    return $this->Response(false, 'رمز اشتباه است', 401); // اگر رمز اشتباه بود  
                }  
            } else {  
                return $this->Response(false, 'کاربر وجود ندارد', 401); // اگر کاربر پیدا نشد  
            }  
        } catch (\Throwable $th) {
            //throw $th;
            $this->Response(false,$th,200 );
        }
  
    } 
    public function get_name($token)  
    {  
        try {  
            // Retrieve the record associated with the token  
            $find_name = AdminModel::where("token", $token)->first();  
            
            // Check if a name was found  
            if (!$find_name) {  
                // Return a response indicating no record found  
                return $this->Response(false, 'No record found for the given token.', 404);  
            }  
            
            return $this->Response(true, $find_name->name, 200);  
        } catch (\Throwable $th) {  
            // Log the error and return a response with the error message  
            return $this->Response(false, 'An error occurred: ' . $th->getMessage(), 500);  
        }  
    }
    public function get_all_users()
    {
        try {
            $all_user = PersonalUser::all();
            return $this->Response(true,$all_user,200);
        } catch (\Throwable $th) {
            //throw $th;
            return $this->Response(false,$th,404);
        }
        


    }
    public function get_all_users_admin()
    {
        try {
            $all_user = AdminModel::all();
            return $this->Response(true,$all_user,200);
        } catch (\Throwable $th) {
            //throw $th;
            return $this->Response(false,$th,404);
        }
        


    }
    public function delete_user($id)
    {
        try {
            $user = PersonalUser::find($id);
            $user->delete();
            return $this->Response(true,"ok",200);

        } catch (\Throwable $th) {
            //throw $th;
            return $this->Response(false,$th,401);
        }



    }
    public function delete_user_admin($id)
    {
        try {
            $user = AdminModel::find($id);
            $user->delete();
            return $this->Response(true,"ok",200);

        } catch (\Throwable $th) {
            //throw $th;
            return $this->Response(false,$th,401);
        }



    }
    public function delete_product($id)
    {
        try {
            $user = ProductModel::find($id);
            $user->delete();
            return $this->Response(true,"ok",200);

        } catch (\Throwable $th) {
            //throw $th;
            return $this->Response(false,$th,401);
        }



    }
    public function d_active($id)
    {
        try {
            $user = PersonalUser::find($id);
            $user->is_avtive = 0;
            $user->save();
            return $this->Response(true,"ok",200);
        } catch (\Throwable $th) {
            //throw $th;
            return $this->Response(false,$th,400);


        }
    }
    public function active($id)
    {
        try {
            $user = PersonalUser::find($id);
            $user->is_avtive = 1;
            $user->save();
            return $this->Response(true,"ok",200);
        } catch (\Throwable $th) {
            //throw $th;
            return $this->Response(false,$th,400);


        }
    }
    public function get_user_per($id)
    {
        try {
            $user = PersonalUser::find($id);
            return $this->Response(true,$user,200);
        } catch (\Throwable $th) {
            //throw $th;
            return $this->Response(false,$th,400);
        }
    }
    public function get_user_admin($id)
    {
        try {
            $user = AdminModel::find($id);
            return $this->Response(true,$user,200);
        } catch (\Throwable $th) {
            //throw $th;
            return $this->Response(false,$th,400);
        }
    }
    public function edit_per(Request $request, $id)  
{  
    // Validate incoming request data  
    $validatedData = $request->validate([  
        'data.user_name' => 'required|string|max:255',  
        'data.phone_number' => 'required|string|max:15',  // Adjust max length as appropriate  
        'data.is_avtive' => 'required|boolean',  
    ]);  

    try {  
        $user = PersonalUser::findOrFail($id);  // Use findOrFail to handle user not found  
        $user->user_name = $validatedData['data']['user_name'];  
        $user->phone_number = $validatedData['data']['phone_number'];  
        $user->is_avtive = $validatedData['data']['is_avtive'];  // Typo: should be is_active  
        $user->avrivated_token = $this->generateRandomNumber();   // Consider if this should be updated every time  
        $user->save();  

        return $this->Response(true, "User updated successfully", 200);  
    } catch (\Throwable $th) {  
        // Log the error for debugging  
        Log::error("Error updating user: ".$th->getMessage());  

        return $this->Response(false, 'An error occurred while updating the user.', 500);  
    }  
}
    public function edit_admin(Request $request, $id)  
{  
    // Validate incoming request data  
    $validatedData = $request->validate([  
        'data.name' => 'required|string|max:255',  
        'data.phone_number' => 'required|string|max:15', 
        'data.pass' => 'required|string|min:8|max:255', 
    ]);  

    try {  
        $user = AdminModel::findOrFail($id);  // Use findOrFail to handle user not found  
        $user->name = $validatedData['data']['name'];  
        $user->phone_number = $validatedData['data']['phone_number'];  
        $user->pass = $validatedData['data']['pass'];  
        $user->token = $this->generateRandomSentence();
        $user->save();  

        return $this->Response(true, "User updated successfully", 200);  
    } catch (\Throwable $th) {  
        // Log the error for debugging  
        Log::error("Error updating user: ".$th->getMessage());  

        return $this->Response(false, 'An error occurred while updating the user.', 500);  
    }  
}
public function create_user_per(Request $request){
    try {
        $new_user= new PersonalUser();
        $new_user->user_name = $request->user_name;
        $new_user->phone_number = $request->phone_number;
        $new_user->is_avtive = $request->is_avtive;
        $new_user->avrivated_token = $this->generateRandomNumber();
        $new_user->save();
        return $this->Response(true,"ok",201);




    } catch (\Throwable $th) {
        return $this->Response(true,$th,200);
    }


}
public function create_user_admin(Request $request){
    try {
        $new_user= new AdminModel();
        // return $this->Response(true, $request->name,201);

        $new_user->name = $request->name;
        $new_user->phone_number = $request->phone_number;
        $new_user->pass = $request->pass;
        $new_user->token = $this->generateRandomSentence();

        $new_user->save();
        return $this->Response(true,"ok",201);




    } catch (\Throwable $th) {
        return $this->Response(true,$th,200);
    }


}
public function get_all_products()
{
    try {
        $all_pr = ProductModel::all();
        return $this->Response(true,$all_pr,200);
    } catch (\Throwable $th) {
        //throw $th;
        return $this->Response(false,$th,404);
    }

}
public function get_all_products_cat()
{
    try {
        $all_pr = ProductsCategoryModel::all();
        return $this->Response(true,$all_pr,200);
    } catch (\Throwable $th) {
        //throw $th;
        return $this->Response(false,$th,404);
    }

}
public function create_product_category(Request $request){
    try {
        $new_user= new ProductsCategoryModel();
        // return $this->Response(true, $request->name,201);

        $new_user->cat_name = $request->cat_name;
        $new_user->save();
        return $this->Response(true,"ok",201);




    } catch (\Throwable $th) {
        return $this->Response(true,$th,200);
    }


}
public function delete_product_cat($id)  
{  
    try {  
        // پیدا کردن دسته محصول  
        $category = ProductsCategoryModel::find($id);  

        if (!$category) {  
            return $this->Response(false, "Category not found", 404);  
        }  

        $cat_name = $category->cat_name;  

        // لیست فیلدهای دسته‌بندی محصولات  
        $fields = ['cat1', 'cat2', 'cat3', 'cat4'];  

        // به‌روزرسانی هر یک از فیلدها در مدل ProductModel  
        foreach ($fields as $field) {  
            ProductModel::where($field, $cat_name)->update([$field => '-']);  
        }  

        // حذف دسته محصول  
        $category->delete();  

        return $this->Response(true, "OK", 200);  

    } catch (\Throwable $th) {  
        return $this->Response(false, $th->getMessage(), 401);  
    }  
}
public function get_cat_product_on($id)
{
    try {
        $user = ProductsCategoryModel::find($id);
        return $this->Response(true,$user,200);
    } catch (\Throwable $th) {
        //throw $th;
        return $this->Response(false,$th,400);
    }
}
public function edit_pr_cat(Request $request, $id)  
{  
    try {  
        $category = ProductsCategoryModel::find($id);  

        if (!$category) {  
            return $this->Response(false, "Category not found", 404);  
        }  

        $cat_name = $category->cat_name;  

        $fields = ['cat1', 'cat2', 'cat3', 'cat4'];  

        foreach ($fields as $field) {  
            ProductModel::where($field, $cat_name)->update([$field => $request->cat_name]);  
        }  

        $category->cat_name = $request->cat_name;  
        $category->save();

        return $this->Response(true, "OK", 200);  

    } catch (\Throwable $th) {  
        return $this->Response(false, $th->getMessage(), 401);  
    }  
   
   
}
public function all_categorys_pr()  
{  
    try {
        $cats = ProductsCategoryModel::all();
        return $this->Response(true,$cats,200);
    } catch (\Throwable $th) {
        //throw $th;
        return $this->Response(false,$th,404);
    }
 
   
   
}


public function create_product(Request $request)
{
    try {
        \Log::info('=== PRODUCT CREATION STARTED ===');
        $data = $request->all();
        $new = new ProductModel();
        $imagePaths = [];
        
        // لاگ فایل‌های دریافتی
        \Log::info('Files in request: ' . json_encode(array_keys($request->allFiles())));
        \Log::info('All request data keys: ' . json_encode(array_keys($data)));

        // مدیریت آپلود تصاویر - نسخه بسیار ساده
        for ($i = 1; $i <= 4; $i++) {
            $fieldName = 'img' . $i;
            
            \Log::info("Checking file: {$fieldName}");
            
            if ($request->hasFile($fieldName)) {  
                $file = $request->file($fieldName);
                \Log::info("File found: " . $file->getClientOriginalName());
                
                if ($file->isValid()) {
                    // ایجاد نام ساده
                    $uniqueFileName = 'product_' . time() . '_' . $i . '.' . $file->getClientOriginalExtension();
                    
                    \Log::info("Attempting to store: {$uniqueFileName}");
                    
                    try {
                        // آپلود فایل
                        $path = $file->storeAs('products', $uniqueFileName, 'public');
                        $imagePaths[$fieldName] = $path;
                        \Log::info("✅ File stored successfully: {$path}");
                        
                        // تأیید ذخیره شدن فایل
                        if (\Storage::disk('public')->exists($path)) {
                            \Log::info("✅ File verified in storage: {$path}");
                        } else {
                            \Log::error("❌ File not found in storage after upload: {$path}");
                        }
                    } catch (\Exception $e) {
                        \Log::error("❌ File storage failed: " . $e->getMessage());
                        $imagePaths[$fieldName] = "products/notpic.png";
                    }
                } else {
                    \Log::warning("File is invalid: {$fieldName}");
                    $imagePaths[$fieldName] = "products/notpic.png";
                }
            } else {
                \Log::info("No file for: {$fieldName}");
                $imagePaths[$fieldName] = "products/notpic.png";
            }
        }

        // تابع پاکسازی ساده و اصلاح شده
        $cleanString = function($value) {
            if (is_array($value)) {
                return array_map(function($v) {
                    return is_string($v) ? trim($v) : $v;
                }, $value);
            }
            
            if (is_string($value)) {
                // پاکسازی ساده
                $value = trim($value);
                // حذف کاراکترهای کنترل خطرناک
                $value = preg_replace('/[\x00-\x09\x0B\x0C\x0E-\x1F\x7F]/', '', $value);
                return $value;
            }
            
            return $value;
        };

        // پاکسازی داده‌های متنی به صورت ساده
        $textFields = ['productName', 'tags', 'description', 'shortDescription'];
        foreach ($textFields as $field) {
            if (isset($data[$field])) {
                $data[$field] = $cleanString($data[$field]);
            }
        }

        // اعتبارسنجی فیلدهای ضروری
        $validator = \Validator::make($data, [
            'productName' => 'required|string|max:255',
            'totalPrice' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
        ]);

        if ($validator->fails()) {
            \Log::error('Validation failed: ' . json_encode($validator->errors()));
            return response()->json([
                'success' => false,
                'message' => 'داده‌های ورودی نامعتبر هستند',
                'errors' => $validator->errors()
            ], 422);
        }
        
        $price = (int) ($data['totalPrice'] ?? 0);

        // تنظیم مقادیر محصول - ساده شده
        $new->title = $data['productName'] ?? 'بدون عنوان';
        $new->price = $price;
        $new->tags = $data['tags'] ?? '';
        
        // مدیریت تخفیف
        $discountedPrice = (float) ($data['discountedPrice'] ?? 0);
        if ($discountedPrice >0)
        {
            $new->is_offer = true; 


        }
        else{
            $new->is_offer = false;

        }

        $new->is_offer_price = 600000;
        
        // مدیریت دسته‌بندی‌ها
        $categories = [];
        
        if (isset($data['categorySelections']) && is_array($data['categorySelections'])) {
            $categories = $data['categorySelections'];
        } else {
            foreach ($data as $key => $value) {
                if (strpos($key, 'categorySelections') === 0) {
                    $categories[] = $value;
                }
            }
        }
        
        // پاکسازی دسته‌بندی‌ها
        $categories = array_slice($categories, 0, 4);
        while (count($categories) < 4) {
            $categories[] = "-";
        }
        
        $new->cat1 = $categories[0] ?? "-";
        $new->cat2 = $categories[1] ?? "-";
        $new->cat3 = $categories[2] ?? "-";
        $new->cat4 = $categories[3] ?? "-";
        
        // مدیریت تصاویر
        $new->img = $imagePaths['img1'];
        $new->img1 = $imagePaths['img2'];
        $new->img2 = $imagePaths['img3'];
        $new->img3 = $imagePaths['img4'];
        
        \Log::info('Image paths to save: ' . json_encode($imagePaths));
        
        $new->des = $data['description'] ?? "توضیحاتی وجود ندارد";
        $new->short_des = $data['shortDescription'] ?? "توضیحات کوتاه وجود ندارد";
        $new->integer = (int) ($data['quantity'] ?? 0);
        
        // مدیریت alt تصاویر
        $imageAlts = $data['imageAlts'] ?? [];
        if (!is_array($imageAlts)) {
            $imageAlts = [];
        }
        
        $imageAlts = array_slice($imageAlts, 0, 4);
        while (count($imageAlts) < 4) {
            $imageAlts[] = "تصویر محصول";
        }
        
        $new->alt0 = $imageAlts[0] ?? "تصویر محصول";
        $new->alt1 = $imageAlts[1] ?? "تصویر محصول";
        $new->alt2 = $imageAlts[2] ?? "تصویر محصول";
        $new->alt3 = $imageAlts[3] ?? "تصویر محصول";
        
        $new->exist = filter_var($data['inStock'] ?? false, FILTER_VALIDATE_BOOLEAN);
        
        \Log::info('Attempting to save product to database...');
        
        // ذخیره محصول
        $new->save();

        \Log::info('✅ Product saved successfully with ID: ' . $new->id);

        // پاسخ موفق
        return response()->json([
            'success' => true,
            'message' => 'محصول با موفقیت ایجاد شد',
            'product_id' => $new->id,
            'product_title' => $new->title,
            'image_paths' => $imagePaths, // اضافه کردن مسیر عکس‌ها در پاسخ
            'storage_urls' => array_map(function($path) {
                return asset('storage/' . $path);
            }, $imagePaths)
        ]);

    } catch (\Throwable $th) {
        \Log::error('❌ Error creating product: ' . $th->getMessage());
        \Log::error('Stack trace: ' . $th->getTraceAsString());
        
        return response()->json([
            'success' => false,
            'message' => 'خطایی در ثبت محصول رخ داده است.',
            'error' => env('APP_DEBUG') ? $th->getMessage() : 'خطای سرور'
        ], 500);
    }
}

public function EditProduct(Request $request, $id)  
{  
    try {  
        $data = $request->all();  
        $new = ProductModel::find($id);  
        
        // بررسی وجود محصول  
        if (!$new) {  
            return response()->json(['success' => false, 'message' => 'محصول پیدا نشد.'], 404);  
        }  

        $imagePaths = [];  

        for ($i = 1; $i <= 4; $i++) {  
            if ($request->hasFile("img$i")) {  
                $fileName = $request->file("img$i")->getClientOriginalName();  
                $sanitizedFileName = str_replace('.', '', $fileName);  
                $sanitizedFileName = substr($sanitizedFileName, 0, 10);  
                
                $imagePaths["img$i"] = $request->file("img$i")->storeAs('products', $sanitizedFileName, 'public');  
            }  
        }  

        // تنظیم ویژگی‌های محصول  
        $new->title = $data['productName'] ?? $new->title;  
        $new->price = (int)($data['totalPrice'] ?? $new->price);  
        $new->tags = $data['tags'] ?? $new->tags;  

        $new->is_offer = (int)($data['discountedPrice'] ?? 0) > 0;  
        $new->is_offer_price = (int)($data['discountedPrice'] ?? 0);  

        // تنظیم دسته‌بندی‌ها  
        $categories = $data['categorySelections'] ?? [];  
        $new->cat1 = $categories[0] ?? $new->cat1;  
        $new->cat2 = $categories[1] ?? $new->cat2;  
        $new->cat3 = $categories[2] ?? $new->cat3;  
        $new->cat4 = $categories[3] ?? $new->cat4;  
        
        // تنظیم تصاویر جدید  
        $new->img = $imagePaths['img1'] ?? $new->img;  
        $new->img1 = $imagePaths['img2'] ?? $new->img1;  
        $new->img2 = $imagePaths['img3'] ?? $new->img2;  
        $new->img3 = $imagePaths['img4'] ?? $new->img3;  

        // توضیحات  
        $new->des = $data['description'] ?? $new->des;  
        $new->short_des = $data['shortDescription'] ?? $new->short_des;  
        $new->integer = (int)($data['quantity'] ?? $new->integer);  

        // تنظیم Alt تصاویر  
        $imageAlts = $data['imageAlts'] ?? [];  
        $new->alt0 = $imageAlts[0] ?? $new->alt0;  
        $new->alt1 = $imageAlts[1] ?? $new->alt1;  
        $new->alt2 = $imageAlts[2] ?? $new->alt2;  
        $new->alt3 = $imageAlts[3] ?? $new->alt3;  
        $new->exist = (bool)($data['inStock'] ?? $new->exist);  

        // ذخیره محصول  
        $new->save();  

        return response()->json([  
            'success' => true,  
            'message' => 'محصول با موفقیت ویرایش شد.',  
        ], 200);  

    } catch (\Throwable $th) {  
        return response()->json([  
            'success' => false,  
            'message' => 'خطایی در ویرایش محصول رخ داده است.',  
            'error' => $th->getMessage(),  
        ], 500);  
    }  
}
public function getproductdetail($id)
{
    try {
       $data  = ProductModel::find($id);
       return $this->Response(true,$data,200);

    } catch (\Throwable $th) {
        return $this->Response(false,$th,400);
        
    }
}
public function getallarticls()
{
    try {
       $data  = MasterBlog::all();
       return $this->Response(true,$data,200);

    } catch (\Throwable $th) {
        return $this->Response(false,$th,400);
        
    }
}
public function deletearticle($id)
{
    try {
       $data  = MasterBlog::find($id);
       $data->delete();
       return $this->Response(true,$data,200);

    } catch (\Throwable $th) {
        return $this->Response(false,$th,400);
        
    }
}
public function get_all_category_blogs()
{
    try {
        $data = CategoryBlogs::all();
        return $this->Response(true,$data,200);


        
    } catch (\Throwable $th) {
        //throw $th;
        return $this->Response(false,$th,500);

    }


}
public function delete_article_cat($id)
{
    try {
       $data  = CategoryBlogs::find($id);
       $data->delete();
       return $this->Response(true,$data,200);

    } catch (\Throwable $th) {
        return $this->Response(false,$th,400);
        
    }
}
public function cr_ar(Request $request){
    try {
        $new_cat= new CategoryBlogs();
        // return $this->Response(true, $request->cat_name,201);

        $new_cat->cat_name = $request->cat_name;
        $new_cat->save();
        return $this->Response(true,"ok",201);




    } catch (\Throwable $th) {
        return $this->Response(true,$th,200);
    }


}
public function category_article_change(Request $request, $id)  
{  
    try {  
        $category = CategoryBlogs::find($id);  

        if (!$category) {  
            return $this->Response(false, "Category not found", 404);  
        }  

        $cat_name = $category->cat_name;  

        $fields = ['cat1', 'cat2', 'cat3', 'cat4'];  

        foreach ($fields as $field) {  
            MasterBlog::where($field, $cat_name)->update([$field => $request->cat_name]);  
        }  

        $category->cat_name = $request->cat_name;  
        $category->save();

        return $this->Response(true, "OK", 200);  

    } catch (\Throwable $th) {  
        return $this->Response(false, $th->getMessage(), 401);  
    }  
   
   
}
public function category_article_get($id)  
{  
    try {  
        $category = CategoryBlogs::find($id);  


        return $this->Response(true, $category, 200);  

    } catch (\Throwable $th) {  
        return $this->Response(false, $th->getMessage(), 401);  
    }  
   
   
}
public function create_article(Request $request)
{
    try {
        $data = $request->all();
        $imagePaths = [];
        if ($request->hasFile('img1')) {  
            // دریافت نام فایل  
            $fileName = $request->file('img1')->getClientOriginalName();  
            // حذف نقاط و محدود کردن نام فایل  
            $sanitizedFileName = str_replace('.', '', $fileName);  
            $sanitizedFileName = substr($sanitizedFileName, 0, 10); // محدود کردن به 10 کاراکتر  
            
            $imagePaths['img1'] = $request->file('img1')->storeAs('articls', $fileName, 'public');  
        }  
       
        
        if ($request->hasFile('img2')) {  
            $fileName = $request->file('img2')->getClientOriginalName();  
            $sanitizedFileName = str_replace('.', '', $fileName);  
            $sanitizedFileName = substr($sanitizedFileName, 0, 10);  
            
            $imagePaths['img2'] = $request->file('img2')->storeAs('articls', $fileName, 'public');  
        }  
        
        if ($request->hasFile('img3')) {  
            $fileName = $request->file('img3')->getClientOriginalName();  
            $sanitizedFileName = str_replace('.', '', $fileName);  
            $sanitizedFileName = substr($sanitizedFileName, 0, 10);  
            
            $imagePaths['img3'] = $request->file('img3')->storeAs('articls', $fileName, 'public');  
        }  
        
        if ($request->hasFile('img4')) {  
            $fileName = $request->file('img4')->getClientOriginalName();  
            $sanitizedFileName = str_replace('.', '', $fileName);  
            $sanitizedFileName = substr($sanitizedFileName, 0, 10);  
            
            $imagePaths['img4'] = $request->file('img4')->storeAs('articls', $fileName, 'public');  
        }
        if ($request->hasFile('img5')) {  
            $fileName = $request->file('img5')->getClientOriginalName();  
            $sanitizedFileName = str_replace('.', '', $fileName);  
            $sanitizedFileName = substr($sanitizedFileName, 0, 10);  
            
            $imagePaths['img5'] = $request->file('img5')->storeAs('articls', $fileName, 'public');  
        }
        if ($request->hasFile('img6')) {  
            $fileName = $request->file('img6')->getClientOriginalName();  
            $sanitizedFileName = str_replace('.', '', $fileName);  
            $sanitizedFileName = substr($sanitizedFileName, 0, 10);  
            
            $imagePaths['img6'] = $request->file('img6')->storeAs('articls', $fileName, 'public');  
        }
      
        if ($request->hasFile('img7')) {  
            $fileName = $request->file('img7')->getClientOriginalName();  
            
            
            $imagePaths['img7'] = $request->file('img7')->storeAs('articls', $fileName, 'public');  
        }
        if ($request->hasFile('img8')) {  
            $fileName = $request->file('img8')->getClientOriginalName();  
            $sanitizedFileName = str_replace('.', '', $fileName);  
            $sanitizedFileName = substr($sanitizedFileName, 0, 10);  
            
            $imagePaths['img8'] = $request->file('img8')->storeAs('articls', $fileName, 'public');  
        }
      
        if ($request->hasFile('img9')) {  
            $fileName = $request->file('img9')->getClientOriginalName();  
            $sanitizedFileName = str_replace('.', '', $fileName);  
            $sanitizedFileName = substr($sanitizedFileName, 0, 10);  
            
            $imagePaths['img9'] = $request->file('img9')->storeAs('articls', $fileName, 'public');  
        }
      
        if ($request->hasFile('img10')) {  
            $fileName = $request->file('img10')->getClientOriginalName();  
            $sanitizedFileName = str_replace('.', '', $fileName);  
            $sanitizedFileName = substr($sanitizedFileName, 0, 10);  
            
            $imagePaths['img10'] = $request->file('img10')->storeAs('articls', $fileName, 'public');  
        }
        $not_exist = "بدون محنوا";
        

        MasterBlog::create([  
            'title' => $data['productName']??"بدون نام",  
            'intro' => $data['introduction']??"بدون محتوا",  
            'titr1' => $data['titles'][0] ?? $not_exist,  
            'par1' => $data['paragraphs'][0] ?? $not_exist,  
            'titr2' => $data['titles'][1] ?? $not_exist,  
            'par2' => $data['paragraphs'][1] ?? $not_exist,  
            'titr3' => $data['titles'][2] ?? $not_exist,  
            'par3' => $data['paragraphs'][2] ?? $not_exist,  
            'titr4' => $data['titles'][3] ?? $not_exist,  
            'par4' => $data['paragraphs'][3] ?? $not_exist,  
            'titr5' => $data['titles'][4] ?? $not_exist,  
            'par5' => $data['paragraphs'][4] ?? $not_exist,  
            'titr6' => $data['titles'][5] ?? $not_exist,  
            'par6' => $data['paragraphs'][5] ?? $not_exist,  
            'titr7' => $data['titles'][6] ?? $not_exist,  
            'par7' => $data['paragraphs'][6] ?? $not_exist,  
            'titr8' => $data['titles'][7] ?? $not_exist,  
            'par8' => $data['paragraphs'][7] ?? $not_exist,  
            'titr9' => $data['titles'][8] ?? $not_exist,  
            'par9' => $data['paragraphs'][8] ?? $not_exist,  
            'titr10' => $data['titles'][9] ?? $not_exist,  
            'par10' => $data['paragraphs'][9] ?? $not_exist,  
            'img1' => $imagePaths['img1']??$not_exist,  
            'img2' => $imagePaths['img2']??$not_exist,  
            'img3' => $imagePaths['img3']??$not_exist,  
            'img4' => $imagePaths['img4']??$not_exist,  
            'img5' => $imagePaths['img5']??$not_exist,  
            'img6' => $imagePaths['img6']??$not_exist,  
            'img7' => $imagePaths['img7']??$not_exist,  
            'img8' => $imagePaths['img8']??$not_exist,  
            'img9' => $imagePaths['img9']??$not_exist,  
            'img10' => $imagePaths["img10"]??$not_exist,  
            'alt1' => $data['imageAlts'][0]??$not_exist,  
            'alt2' =>  $data['imageAlts'][1]??$not_exist,  
            'alt3' =>  $data['imageAlts'][2]??$not_exist,  
            'alt4' =>  $data['imageAlts'][3]??$not_exist,  
            'alt5' =>  $data['imageAlts'][4]??$not_exist,  
            'alt6' =>  $data['imageAlts'][5]??$not_exist,  
            'alt7' =>  $data['imageAlts'][6]??$not_exist,  
            'alt8' =>  $data['imageAlts'][7]??$not_exist,  
            'alt9' =>  $data['imageAlts'][8]??$not_exist,  
            'alt10' =>  $data['imageAlts'][9]??$not_exist,  

            // مقداردهی به سایر فیلدهای img و alt  
            'cat1' => $data['categorySelections'][0]??"-",  
            'cat2' => $data['categorySelections'][1]??"-",
            'cat3' =>$data['categorySelections'][2]??"-",
            'cat4' => $data['categorySelections'][3]??"-", 
            'auth' => $data['author']??"بدون نام",  
            'labels' => $data['tags']??"#", 
        ]);  
       

        return response()->json([
            'success' => true,
            'message' => 'مقاله با موفقیت ثبت شد!',
            'data' => $data['titles'][0],
        ], 200);

    } catch (\Throwable $th) {
        return response()->json([
            'success' => false,
            'message' => 'خطایی در ثبت مقاله رخ داده است.',
            'error' => $th->getMessage(),
        ], 500);
    }
}
public function get_article_detail($id)
{
    try {
        $data = MasterBlog::find($id);
        return $this->Response(true,$data,200);
    } catch (\Throwable $th) {
        //throw $th;
        return $this->Response(false,$th,400);
    }

}
public function edit_article(Request $request,$id)
{
    try {
        $data = $request->all();
        $imagePaths = [];
        if ($request->hasFile('img1')) {  
            // دریافت نام فایل  
            $fileName = $request->file('img1')->getClientOriginalName();  
            // حذف نقاط و محدود کردن نام فایل  
            $sanitizedFileName = str_replace('.', '', $fileName);  
            $sanitizedFileName = substr($sanitizedFileName, 0, 10); // محدود کردن به 10 کاراکتر  
            
            $imagePaths['img1'] = $request->file('img1')->storeAs('articls', $fileName, 'public');  
        }  
       
        
        if ($request->hasFile('img2')) {  
            $fileName = $request->file('img2')->getClientOriginalName();  
            $sanitizedFileName = str_replace('.', '', $fileName);  
            $sanitizedFileName = substr($sanitizedFileName, 0, 10);  
            
            $imagePaths['img2'] = $request->file('img2')->storeAs('articls', $fileName, 'public');  
        }  
        
        if ($request->hasFile('img3')) {  
            $fileName = $request->file('img3')->getClientOriginalName();  
            $sanitizedFileName = str_replace('.', '', $fileName);  
            $sanitizedFileName = substr($sanitizedFileName, 0, 10);  
            
            $imagePaths['img3'] = $request->file('img3')->storeAs('articls', $fileName, 'public');  
        }  
        
        if ($request->hasFile('img4')) {  
            $fileName = $request->file('img4')->getClientOriginalName();  
            $sanitizedFileName = str_replace('.', '', $fileName);  
            $sanitizedFileName = substr($sanitizedFileName, 0, 10);  
            
            $imagePaths['img4'] = $request->file('img4')->storeAs('articls', $fileName, 'public');  
        }
        if ($request->hasFile('img5')) {  
            $fileName = $request->file('img5')->getClientOriginalName();  
            $sanitizedFileName = str_replace('.', '', $fileName);  
            $sanitizedFileName = substr($sanitizedFileName, 0, 10);  
            
            $imagePaths['img5'] = $request->file('img5')->storeAs('articls', $fileName, 'public');  
        }
        if ($request->hasFile('img6')) {  
            $fileName = $request->file('img6')->getClientOriginalName();  
            $sanitizedFileName = str_replace('.', '', $fileName);  
            $sanitizedFileName = substr($sanitizedFileName, 0, 10);  
            
            $imagePaths['img6'] = $request->file('img6')->storeAs('articls', $fileName, 'public');  
        }
      
        if ($request->hasFile('img7')) {  
            $fileName = $request->file('img7')->getClientOriginalName();  
            
            
            $imagePaths['img7'] = $request->file('img7')->storeAs('articls', $fileName, 'public');  
        }
        if ($request->hasFile('img8')) {  
            $fileName = $request->file('img8')->getClientOriginalName();  
            $sanitizedFileName = str_replace('.', '', $fileName);  
            $sanitizedFileName = substr($sanitizedFileName, 0, 10);  
            
            $imagePaths['img8'] = $request->file('img8')->storeAs('articls', $fileName, 'public');  
        }
      
        if ($request->hasFile('img9')) {  
            $fileName = $request->file('img9')->getClientOriginalName();  
            $sanitizedFileName = str_replace('.', '', $fileName);  
            $sanitizedFileName = substr($sanitizedFileName, 0, 10);  
            
            $imagePaths['img9'] = $request->file('img9')->storeAs('articls', $fileName, 'public');  
        }
      
        if ($request->hasFile('img10')) {  
            $fileName = $request->file('img10')->getClientOriginalName();  
            $sanitizedFileName = str_replace('.', '', $fileName);  
            $sanitizedFileName = substr($sanitizedFileName, 0, 10);  
            
            $imagePaths['img10'] = $request->file('img10')->storeAs('articls', $fileName, 'public');  
        }
        $not_exist = "بدون محنوا";
        $article = MasterBlog::find($id);
        

        $article->update([  
            'title' => $data['productName']??$article->title,  
            'intro' => $data['introduction']??$article->intro,  
            'titr1' => $data['titles'][0] ?? $article->titr1,  
            'par1' => $data['paragraphs'][0] ?? $article->par1,  
            'titr2' => $data['titles'][1] ?? $article->titr2,  
            'par2' => $data['paragraphs'][1] ?? $article->par2,  
            'titr3' => $data['titles'][2] ?? $article->titr3,  
            'par3' => $data['paragraphs'][2] ?? $article->par3,  
            'titr4' => $data['titles'][3] ?? $article->titr4,  
            'par4' => $data['paragraphs'][3] ?? $article->par4,  
            'titr5' => $data['titles'][4] ?? $article->titr5,  
            'par5' => $data['paragraphs'][4] ?? $article->par5,  
            'titr6' => $data['titles'][5] ?? $article->titr6,  
            'par6' => $data['paragraphs'][5] ?? $article->par6,  
            'titr7' => $data['titles'][6] ?? $article->titr7,  
            'par7' => $data['paragraphs'][6] ?? $article->par7,  
            'titr8' => $data['titles'][7] ?? $article->titr8,  
            'par8' => $data['paragraphs'][7] ?? $article->par8,  
            'titr9' => $data['titles'][8] ?? $article->titr9,  
            'par9' => $data['paragraphs'][8] ?? $article->par9,  
            'titr10' => $data['titles'][9] ?? $article->titr10,  
            'par10' => $data['paragraphs'][9] ?? $article->par10,  
            'img1' => $imagePaths['img1']??$article->img1,  
            'img2' => $imagePaths['img2']??$article->img2,  
            'img3' => $imagePaths['img3']??$article->img3,  
            'img4' => $imagePaths['img4']??$article->img4,  
            'img5' => $imagePaths['img5']??$article->img5,  
            'img6' => $imagePaths['img6']??$article->img6,  
            'img7' => $imagePaths['img7']??$article->img7,  
            'img8' => $imagePaths['img8']??$article->img8,  
            'img9' => $imagePaths['img9']??$article->img9,  
            'img10' => $imagePaths["img10"]??$article->img10,  
            'alt1' => $data['imageAlts'][0]??$article->alt1,  
            'alt2' =>  $data['imageAlts'][1]??$article->alt2,  
            'alt3' =>  $data['imageAlts'][2]??$article->alt3,  
            'alt4' =>  $data['imageAlts'][3]??$article->alt4,  
            'alt5' =>  $data['imageAlts'][4]??$article->alt5,  
            'alt6' =>  $data['imageAlts'][5]??$article->alt6,  
            'alt7' =>  $data['imageAlts'][6]??$article->alt7,  
            'alt8' =>  $data['imageAlts'][7]??$article->alt8,  
            'alt9' =>  $data['imageAlts'][8]??$article->alt9,  
            'alt10' =>  $data['imageAlts'][9]??$article->alt10,  

            // مقداردهی به سایر فیلدهای img و alt  
            'cat1' => $data['categorySelections'][0]??$article->cat1,  
            'cat2' => $data['categorySelections'][1]??$article->cat1,
            'cat3' =>$data['categorySelections'][2]??$article->cat1,
            'cat4' => $data['categorySelections'][3]??$article->cat1, 
            'auth' => $data['author']??$article->auth,  
            'labels' => $data['tags']??$article->labels, 
        ]);  
       

        return response()->json([
            'success' => true,
            'message' => 'مقاله با موفقیت ثبت شد!',
            'data' => $data['titles'][0],
        ], 200);

    } catch (\Throwable $th) {
        return response()->json([
            'success' => false,
            'message' => 'خطایی در ثبت مقاله رخ داده است.',
            'error' => $th->getMessage(),
        ], 500);
    }
}
public function get_ansered_comments()
{
    try {
        $data = Anserrdanserproduct::all();
        return $this->Response(true,$data,200);
    } catch (\Throwable $th) {
        //throw $th;
        return $this->Response(false,$th,500);

    }
}
public function get_ansered_comments_blogs()
{
    try {
        $data = AnseredModelBlog::all();
        return $this->Response(true,$data,200);
    } catch (\Throwable $th) {
        //throw $th;
        return $this->Response(false,$th,500);

    }
}
public function get_not_ansered_comments()
{
    try {
        $data = Notanserproduct::all();
        return $this->Response(true,$data,200);
    } catch (\Throwable $th) {
        //throw $th;
        return $this->Response(false,$th,500);

    }
}
public function get_not_ansered_comments_blogs()
{
    try {
        $data = NotAnseredModelBlog::all();
        return $this->Response(true,$data,200);
    } catch (\Throwable $th) {
        //throw $th;
        return $this->Response(false,$th,500);

    }
}
public function delete_not_ansered_comments($id)
{
    $data  = Notanserproduct::find($id);
    $data->delete();
    return $this->Response(true,"ok",200);
}
public function delete_ansered_comments($id)
{
    $data  = Anserrdanserproduct::find($id);
    $data->delete();
    return $this->Response(true,"ok",200);

}
public function delete_not_ansered_comments_blogs($id)
{
    $data  = NotAnseredModelBlog::find($id);
    $data->delete();
    return $this->Response(true,"ok",200);
}
public function delete_ansered_comments_blogs($id)
{
    $data  = AnseredModelBlog::find($id);
    $data->delete();
    return $this->Response(true,"ok",200);

}
public function get_not_anser($id)
{
    $data  = Notanserproduct::find($id);
    return $this->Response(true,$data,200);

}
public function get_not_anser_blogs($id)
{
    $data  = NotAnseredModelBlog::find($id);
    return $this->Response(true,$data,200);

}
public function answer_comment(Request $request)
{

    $data = $request->all();
    $id = $data['id'];
    $an = $data['an'];
    $d_comment = Notanserproduct::find($id);
    $new_an = new Anserrdanserproduct();
    $new_an->user_name = $d_comment->user_name;
    $new_an->product_name = $d_comment->product_name;
    $new_an->qu = $d_comment->qu;
    $new_an->an = $an;
    $new_an->save();
    $d_comment->delete();
    
    return $this->Response(true,$id,200);
}
public function answer_comment_blogs(Request $request)
{

    $data = $request->all();
    $id = $data['id'];
    $an = $data['an'];
    $d_comment = NotAnseredModelBlog::find($id);
    $new_an = new AnseredModelBlog();
    $new_an->user_name = $d_comment->user_name;
    $new_an->blog_name = $d_comment->blog_name;
    $new_an->qu = $d_comment->qu;
    $new_an->an = $an;
    $new_an->save();
    $d_comment->delete();
    
    return $this->Response(true,$id,200);
}
public function edit_comment_pr(Request $request)
{

    $data = $request->all();
    $id = $data['id'];
    $an = $data['an'];
    $qu = $data['qu'];
    $new_an = Anserrdanserproduct::find($id);
    
    $new_an->qu = $qu;
    $new_an->an = $an;
    $new_an->save();
    
    return $this->Response(true,$id,200);
}
public function get_anser_pr($id)
{
    $data  = Anserrdanserproduct::find($id);
    return $this->Response(true,$data,200);

} 
public function get_anser_blogs($id)
{
    $data  = AnseredModelBlog::find($id);
    return $this->Response(true,$data,200);

} 
public function edit_comment_blogs(Request $request)
{
    

    $data = $request->all();
    $id = $data['id'];
    $an = $data['an'];
    $qu = $data['qu'];
    $new_an = AnseredModelBlog::find($id);
    
    $new_an->qu = $qu;
    $new_an->an = $an;
    $new_an->save();
    
    return $this->Response(true,$id,200);
}
public function get_all_blogs_ai()
{
    try {
        $data  = BlogModel::all();
        return $this->Response(true,$data,200);
    } catch (\Throwable $th) {
        //throw $th;
        return $this->Response(false,$th,500);
    }
}
public function delete_blogs_title_ai($id)
{
    try {
        $data  = BlogModel::find($id);
        $data->delete();
        return $this->Response(true,"ok",200);
    } catch (\Throwable $th) {
        //throw $th;
        return $this->Response(false,$th,500);
    }
}
public function get_ai_blogs($id)
{
    try {
        $data  = BlogModel::find($id);
        
        return $this->Response(true,$data,200);
    } catch (\Throwable $th) {
        //throw $th;
        return $this->Response(false,$th,500);
    }
}
public function update_ai_blogs(Request $request,$id)
{
    try {
        $data  = BlogModel::find($id);
        $data->title = $request->title;
        $data->key_words = $request->key_words;
        $data->alts = $request->alts;
        
        return $this->Response(true,"ok",200);
    } catch (\Throwable $th) {
        //throw $th;
        return $this->Response(false,$th,500);
    }
}
public function get_detail_trx_page()
{
    try {

        $payed_orders = AccepteOrderModel::all();
        $reduce_orders = ReduceeOrderModel::all();
        $none_orders = NoneOrderModel::all();
        return $this->Response(true,['payed'=>$payed_orders,'reduce'=>$reduce_orders,'none_orders'=>$none_orders],200);

    } catch (\Throwable $th) {
        return $this->Response(false,$th,500);
    }

}
public function delete_transaction_None($id)
{
    try {
        $tr = NoneOrderModel::find($id);
        $tr->delete();
        return $this->Response(true,"ok",200);
    } catch (\Throwable $th) {
        return $this->Response(false,$th,500);

        // throw $th;
    }
}
public function delete_transaction_refus($id)
{
    try {
        $tr = ReduceeOrderModel::find($id);
        $tr->delete();
        return $this->Response(true,"ok",200);
    } catch (\Throwable $th) {
        return $this->Response(false,$th,500);

        // throw $th;
    }
}
public function delete_transaction_Accept($id)
{
    try {
        $tr = AccepteOrderModel::find($id);
        $tr->delete();
        return $this->Response(true,"ok",200);
    } catch (\Throwable $th) {
        return $this->Response(false,$th,500);

        // throw $th;
    }
}
public function receved_deliveris()
{
    try {
        $tr = DeliveryAccepdedModel::all();
        
        return $this->Response(true,$tr,200);
    } catch (\Throwable $th) {
        return $this->Response(false,$th,500);

        // throw $th;
    }
}
public function receved_deliveris_delete($id)
{
    try {
        $data = DeliveryAccepdedModel::find($id);
        $data->delete();
        return $this->Response(true,"ok",200);
    } catch (\Throwable $th) {
        //throw $th;
        return $this->Response(false,$th,500);

    }
}
public function none_deliveris()
{
    try {
        $tr = DeliveryModel::all();
        
        return $this->Response(true,$tr,200);
    } catch (\Throwable $th) {
        return $this->Response(false,$th,500);

        // throw $th;
    }
}
public function none_deliveris_delete($id)
{
    try {
        $data = DeliveryModel::find($id);
        $data->delete();
        return $this->Response(true,"ok",200);
    } catch (\Throwable $th) {
        //throw $th;
        return $this->Response(false,$th,500);

    }
}
public function none_deliveris_delivered($id)
{
    try {
        $data = DeliveryModel::find($id);
        $data2 = new DeliveryAccepdedModel();
        $data2->factor_number = $data->factor_number;
        $data2->user_id = $data->user_id;
        $data2->pr_id = $data->pr_id;
        $data2->count = $data->count;
        $data2->address = $data->address;
        $data2->post_id = $data->post_id;
        $data2->save();
        $data->delete();
        
        return $this->Response(true,"ok",200);
    } catch (\Throwable $th) {
        //throw $th;
        return $this->Response(false,$th,500);

    }
}
public function all_address()
{
    try {
        $data = AdressModel::all();

        return $this->Response(true,$data,200);
    } catch (\Throwable $th) {
        //throw $th;
        return $this->Response(false,$th,500);

    }
}
public function delete_address($id)
{
    try {
        $data = AdressModel::find($id);
        $data->delete();
        return $this->Response(true,"ok",200);
    } catch (\Throwable $th) {
        //throw $th;
        return $this->Response(false,$th,500);

    }
}
public function address_info($id)
{
    try {
        $data = AdressModel::find($id);
        
        return $this->Response(true,$data,200);
    } catch (\Throwable $th) {
        //throw $th;
        return $this->Response(false,$th,500);

    }
}
public function address_update(Request $request,$id)
{
    try {
        $data = AdressModel::find($id);
        $data->address = $request->address;
        $data->user_id = $request->user_id;
        $data->post_id = $request->post_id;
        $data->save();
        return $this->Response(true,"ok",200);
    } catch (\Throwable $th) {
        //throw $th;
        return $this->Response(false,$th,500);

    }

    

}
public function product_view()
{
    try {
        $data = viewProductModel::all();

        return $this->Response(true,$data,200);
    } catch (\Throwable $th) {
        //throw $th;
        return $this->Response(true,$th,500);

    }
    

}

public function blog_view()
{
    try {
        $data = viewblogModel::all();

        return $this->Response(true,$data,200);
    } catch (\Throwable $th) {
        //throw $th;
        return $this->Response(true,$th,500);

    }
    

}

public function other_view()
{
    try {
        $data = viewOtherModel::all();

        return $this->Response(true,$data,200);
    } catch (\Throwable $th) {
        //throw $th;
        return $this->Response(true,$th,500);

    }
    

}
public function sendsms(Request $request)
{
    try {
        

        return $this->Response(true,$request->all(),200);
    } catch (\Throwable $th) {
        //throw $th;
        return $this->Response(true,$th,500);

    }
    

}

public function ContactApi()
{


    $all_contacts = ContactModel::all();

    return $this->Response(true,$all_contacts,200);




}
public function DeleteContactApi($id)
{


    $contact = ContactModel::find($id);
    $contact->delete();

    return $this->Response(true,"ok",200);




}

}
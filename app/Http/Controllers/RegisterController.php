<?php  

namespace App\Http\Controllers;  

use Illuminate\Http\Request;  
use App\Models\PersonalUser;  
use Illuminate\Support\Facades\Auth;  

class RegisterController extends Controller  
{  
    public function generateRandomNumber($length = 5) {
        $min = pow(10, $length - 1); // حداقل مقدار (مثلاً 10000 برای 5 رقم)
        $max = pow(10, $length) - 1; // حداکثر مقدار (مثلاً 99999 برای 5 رقم)
        return mt_rand($min, $max);
    }
    public function Activated_number()
    {
        while (true) {
            $rand_token = $this->generateRandomNumber(); // متد به درستی فراخوانی شد
            $check_token = PersonalUser::where('avrivated_token', $rand_token)->exists(); // فرض بر تصحیح نام فیلد
            if (!$check_token) { // بهینه‌تر
                return $rand_token;
            }
        }
    }
    public function check_login()  
    {  
        return Auth::check();  
    }  

    public function UserRegisterget()  
    {  
        if($this->check_login())
        {
            return  redirect()->route('home');
        }
        return view('Register.register', ['e_msg' => '']);  
    }  
    public function UserRegisterpost(Request $request)  
    {  
        if ($this->check_login()) {  
            return  redirect()->route('home');
        }  
        $number = $request->phone_number;    
        // بررسی طول شماره تلفن  
        if (strlen($number) !== 10) {  
            return view('Register.register', ['e_msg' => 'شماره تلفن باید 10 رقم باشد']);  
        }
        // بررسی وجود کاربر
        $user = PersonalUser::where('phone_number', $number)->first();

        if ($user) {  
            $user->avrivated_token = $this->generateRandomNumber();
            $user->save();
   
            return redirect()->route('ActivatedRegisterget'); // انتقال به صفحه خانه  
        }  

        // ایجاد کاربر جدید  
        $user = new PersonalUser();  
        $user->phone_number = $number;  
        $user->avrivated_token = $this->Activated_number();  
        $user->save();  
        return redirect()->route('ActivatedRegisterget'); // انتقال به صفحه خانه  
    }  
    public function ActivatedRegisterget()
    {
        if($this->check_login())
        {
            return  redirect()->route('home');
        }
        return view('Register.actived',['e_msg'=>'']);
    }
    public function ActivatedRegisterpost(Request $request)
    {
            if($this->check_login())
            {
                return  redirect()->route('home');
            }
            else{
                $t_1 = $request->in1;
                $t_2 = $request->in2;
                $t_3 = $request->in3;
                $t_4 = $request->in4;
                $t_5 = $request->in5;
                $combined_token = $t_5 . $t_4 . $t_3 . $t_2 . $t_1;
                $combined_token_integer = (int) $combined_token;
                
                $is_token_valid  = PersonalUser::where('avrivated_token', $combined_token_integer)->exists();
                if($is_token_valid == true)
                {
                    $user = PersonalUser::where('avrivated_token', $combined_token_integer)->first();

                    Auth::login($user);
                    
                    return redirect()->route('home'); // انتقال به صفحه خانه  
                }
                else{
                    return View('Register.actived',['e_msg'=>'کد نامعتبر است']);
                }
            }
    }
    
}

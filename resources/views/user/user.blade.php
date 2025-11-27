@extends('Base.base')


@section('title','پنل کاربری')


@section('content')
<section class="container-xxl" style="margin-top: 60px;">
    <div style=" width: 100%; display: flex; justify-content: space-around;  align-items: center; flex-direction: row; padding: 10px; background-color: #0053FF;border-radius: 10px; box-shadow:  2px 2px 2px 2px green;">
        <div style="display: flex; flex-direction: column; align-items: center; cursor: pointer;">
            <svg style="color: white;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart-check" viewBox="0 0 16 16">
                <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
              </svg>
            <span style="color: green; font-weight: bold;">نحویل داده شده</span>
            <span style="color: green;">0</span>
    
        </div>
        <div style="display: flex; flex-direction: column; align-items: center; cursor: pointer;">
            <svg style="color: white;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart-check" viewBox="0 0 16 16">
                <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
              </svg>
            <span style="color: yellow;">در انتظار پرداخت</span>
            <span style="color: yellow;" >0</span>
    
        </div>
      
        <div style="display: flex; flex-direction: column; align-items: center; cursor: pointer;">
            <img src="/public/gifs/user_prof.gif" alt="" srcset="" style="border-radius: 50px; width: 50px; height: 50px; ">
            <span class="h4" style="color: white;">User</span>
    
        </div>
    
        <div style="display: flex; flex-direction: column; align-items: center; cursor: pointer;">
            <svg style="color: white;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart-check" viewBox="0 0 16 16">
                <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
              </svg>
            <span style="color: red;">لغو شده</span>
            <span style="color: red;">0</span>
    
        </div>
        <div style="display: flex; flex-direction: column; align-items: center; cursor: pointer;">
            <svg style="color: white;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart-check" viewBox="0 0 16 16">
                <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
              </svg>
            <span>تحویل داده شده </span>
            <span>0</span>
    
        </div>
      
    </div>
    <div>
        
        <div>  
            <div class="container mt-5">  
                <div class="profile-header">  

                    <img src="/public/gifs/user_prof.gif" alt="Profile Image" class="profile-image" style="widows: 100px;height:100px;" >  
                    <h2> نام کاربری:{{ Auth::user()->user_name }}</h2>  
                    
                </div>  
        
                <!-- فرم ویرایش پروفایل -->  
                <div class="card mb-4">  
                    <div class="card-body">  
                        <h5 class="card-title">ویرایش پروفایل</h5>  
                        <form action="/user" method="POST">  
                            @csrf
                            <div class="mb-3" style="width: 60%">  
                                <label for="name" class="form-label">نام</label>  
                                <input type="text" class="form-control" name='inp_name' id="name" placeholder="نام کاربر را وارد کنید">  
                            </div>  
                   
                            <div class="mb-3">  
                                <label for="phone" class="form-label">شماره تماس</label>  
                                <span style="width: 100%;padding:10px; color:#0053FF">{{ Auth::user()->phone_number }}</span>
                                <span style="color: #0053FF; ">98+</span>

                            </div>  
                            <button type="submit" class="btn btn-primary">ذخیره تغییرات</button>  
                        </form>  
                    </div>  
                </div>  
        
                <!-- جدول پرداخت‌ها -->  
                <div class="card">  
                    <div class="card-body">  
                        <h5 class="card-title">وضعیت پرداخت‌ها</h5>  
                        <table class="table">  
                            <thead>  
                                <tr>  
                                    <th>وضعیت</th>  
                                    <th>قیمت</th>  
                                    <th>تاریخ</th>  
                                    <th>عملیات</th>  
                                </tr>  
                            </thead>  
                            <tbody>  
                         
                            </tbody>  
                        </table>  
                    </div>  
                </div>  
            </div>  
        </div>
      
    
    
    </div>

</section>

@endsection
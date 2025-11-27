@extends('Base.base')

@section('title', 'محصول')
<style>
    .container {  
       max-width: 800px; /* حداکثر عرض */  
       margin: 0 auto; /* مرکز چین */  
    }  
   
    .emotion {  
        text-align: center; /* مرکز چینی متن */  
        margin-bottom: 20px; /* فضای زیر حس */  
        font-size: 1.5em; /* اندازه بزرگ‌تر برای متن حس */  
    }  
   
    .comment {  
       border: 1px solid #ddd; /* حاشیه */  
       border-radius: 5px; /* گوشه‌های گرد */  
       padding: 15px; /* فاصله داخلی */  
       margin-bottom: 15px; /* فاصله زیر هر کامنت */  
       background-color: #f9f9f9; /* رنگ پس‌زمینه */  
    }  
   
    .comment-header {  
       display: flex; /* استفاده از فلکس باکس برای چیدمان */  
       justify-content: space-between; /* فاصله بین عناصر */  
    }  
   
    .date {  
       font-size: 0.85em; /* اندازه‌ متن تاریخ */  
       color: #888; /* رنگ خاکستری */  
    }
   </style>

@section('content')
    <br class="d-xl-inline d-none">
    <br class="d-xl-inline d-none">
    <br class="d-xl-inline d-none">

    <div>
        <div class="container product_image ">
            <div class="product_image_left">
                <img src="http://192.168.1.134:8000/storage/{{ $data->img1 }}" id="c1" alt="" onclick="change1('http://192.168.1.134:8000/storage/{{ $data->img1 }}')"
                    style="cursor: pointer;">
                <img src="http://192.168.1.134:8000/storage/{{ $data->img2 }}" id="c2" alt="" onclick="change2('http://192.168.1.134:8000/storage/{{ $data->img2 }}')"
                    style="cursor: pointer;">
                <img src="http://192.168.1.134:8000/storage/{{ $data->img3 }}" id="c3" alt="" onclick="change3('http://192.168.1.134:8000/storage/{{ $data->img3 }}')"
                    id="c3" alt="" onclick="change3('{{ $data->img1 }}')" style="cursor: pointer;">
            </div>
            <div class="product_image_main">
                <div class="d-flex flex-row justify-content-between p_img_top">
                    <div style="cursor: pointer;">

                    </div>
                    <div>
                        @if ($data->is_offer)
                          <span
                          style="font-weight: bold; display: flex; justify-content: center; align-items: center; flex-direction: row; text-align: center ;padding: 4px 10px 0; border: 1px solid #F0003C ; box-shadow: inset 0 0 25px #FFFFFF; color: #F0003C; border-radius: 25px;"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-fire" viewBox="0 0 16 16">
                            <path
                                d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16m0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15" />
                          </svg>
                          <p style="position: relative; top: 2px;">فروش ویژه</p>
                          </span>
                            
                        @else
                            
                        @endif
                     
                    </div>
                </div>
                <img src="http://192.168.1.134:8000/storage/{{ $data->img }}" alt="" class="img-fluid" id="img_product_main">

            </div>
        </div>
        <div class="product_cap">
            <h1>{{ $data->title }}</h1>
            <div>
                <svg style="color: gold;" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
                <svg style="color: gold;" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
                <svg style="color: gold;" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
                <svg style="color: gold;" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
                <svg style="color:#fcb900;" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
            </div>
            @if ($data->integer > 0)
                <div class="product_price">
                    <span style="color: #0068C8;">شروع قیمت از:</span>
                    @if ($data->is_offer)
                        <del style="padding-right: 1%;" id="price">{{ $data->price }}</del>
                        <span style="padding-right: 1%;
                 "
                            id="price">{{ $data->is_offer_price }}</span>
                    @else
                        <span style="padding-right: 1%;" id="price">{{ $data->price }}</span>
                    @endif

                </div>
            @else
                <span class="h3" style="color: #F0003C">اتمام موجودی!!</span>

            @endif

            <div class="product_short">
                <p>{{ $data->short_des }} </p>
            </div>
            <div class="exist_product">
                <span>موجودی:</span>
                @if ($data->integer > 0)
                    <span style="color: green;">موجود است</span>
                @else
                    <span style="color: red;">موجود نیست</span>
                @endif

            </div>
            @if ($data->exist)
             
            
                <div class="add_to_boy">
                    @if (Auth::check())
                        @if ($data->integer == 0)
                            <span>اتمام موجودی</span>
                        @else
                            <button class="bt_add_pro" id="bt_add_pro"
                                onclick="bt_add_pro({{ $data->id }},{{ Auth::user()->id }})">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                    <path
                                        d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z" />
                                    <path
                                        d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                                </svg>
                                <span>افزودن به سبد خرید</span>
                                
                            </button>
                       
                        
                            <span class="h3" id="msg" style="color: #F0003C"></span>
                                
                                
                            </button>
                            
                           
                            <div class="counter-container">

                                <button id="decrease" class="counter-button" onclick="dunder_number()">-</button>
                                <input type="text" id="product-count" value="1" readonly>
                                <button id="increase" class="counter-button"
                                    onclick="add_number({{ $data->integer }})">+</button>
                            </div>
                        @endif
                    @else
                        <a style="margin: 10px" class="btn btn-danger" href="/register" style="float: inline-start">لطفا ابتدا وارد شوید</a>
                    @endif



                </div>


            @endif

            <div>
           
                <h6>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-clipboard-data" viewBox="0 0 16 16">
                        <path
                            d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0z" />
                        <path
                            d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z" />
                        <path
                            d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z" />
                    </svg>
                    <span>تضمین کیفیت</span>
                </h6>
                <h6>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-clock" viewBox="0 0 16 16">
                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                    </svg>
                    <span>ارسال در سریع ترین زمان ممکن</span>
                </h6>
            </div>
            <div class="d-flex flex-column" style="margin-top: 3%;">
                <span
                    style="color: #989899;">{{ $data->tags }}</span>
                <span style="color: #989899;">دسته بندی: {{ $data->cat1 }}>{{ $data->cat2 }}>{{$data->cat3}}>{{ $data->cat4 }}</span>
            </div>

        </div>





    </div>
    <div class="container mt-5 abt_t_p " id="abt_t_p">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">نام</th>
                    <th scope="col">نام خانوادگی</th>
                    <th scope="col">شناسه</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">۱</th>
                    <td>مارک</td>
                    <td>اوتو</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">۲</th>
                    <td>جیکوب</td>
                    <td>تورنتون</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">۳</th>
                    <td>لری</td>
                    <td>پرنده</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>


    <div>
        <div class="about_pro" style="float: inline-start; margin-top: 3%;" id="about_pro">
            <h3 style="text-align: center; margin-top: 8%;">توضیحات</h3>
            <div
                style="line-height: 35px; font-size: 15px; margin-top: 2%; margin-left: 10%; margin-right: 10%; text-align: justify;">
                <p>
                    {{ $data->des }}

                </p>
            </div>

        </div>
        <div class="container-xxl abt_t_p " id="abt_t_p1" style="height: fit-content; margin-top: 10%;">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">نام</th>
                        <th scope="col">نام خانوادگی</th>
                        <th scope="col">شناسه</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">۱</th>
                        <td>مارک</td>
                        <td>اوتو</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">۲</th>
                        <td>جیکوب</td>
                        <td>تورنتون</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">۳</th>
                        <td>لری</td>
                        <td>پرنده</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    @if (Auth::check())
     <div class="container mt-5">  
        <form id="commentForm" method="POST" action="http://192.168.1.134:8000/product/{{$data->title}}" >  
            @csrf
            <div class="form-group">  
                <input type="text" class="form-control" name="name" id="name" placeholder="نام خود را وارد کنید" required>  
            </div>   
            <div class="form-group">  
                <label for="comment">نظر:</label>  
                <textarea class="form-control" id="comment" name="qu" rows="4" placeholder="نظر خود را بنویسید" required></textarea>  
            </div>  
            <button type="submit" class="btn btn-primary">ارسال نظر</button>  
        </form>  
      
      
      </div>  
      <div class="container mt-5">  
        <h2 class="text-center mb-4">نظرات کاربران</h2>  
        <div class="emotion">  
            <h4>حس من: 😊</h4> <!-- حس کاربر -->  
        </div>  
   
        @foreach ($not_ans as $c )
         <div class="comment">  
          
            <div class="comment-header">  
                <strong>{{ $c->user_name }}</strong>   
                <span class="date">{{ $c->created_at }}</span>  
            </div>  
            <div class="comment-body" style="display: flex; justify-content:space-between; flex-direction:row; ">  
                <div>
                    <span style="color: #0068C8;">سوال:</span>
                    <br>
                    <span class="date" >{{ $c->qu }}</span>  

                </div>
                <div style="background-color: #5e3030;padding:1px;border-radius:30px;color:white;display:flex;align-items:center">
                      <span> پاسخی وجو ندارد</span>  

                </div>
                
                

            </div>  
         </div>  
                
        @endforeach
        @foreach ($ans as $c )
         <div class="comment">  
          
            <div class="comment-header">  
                <strong>{{ $c->user_name }}</strong>   
                <span class="date">{{ $c->created_at }}</span>  
            </div>  
            <div class="comment-body" style="display: flex; justify-content:space-between; flex-direction:row; ">  
                <div>
                    <span style="color: #0068C8;">سوال:</span>
                    <br>
                    <span class="date" >{{ $c->qu }}</span>  
                    <span style="color: #0068C8;">پاسخ:</span>
                    <br>
                    <span class="date" >{{ $c->qu }}</span>  

                </div>
                <div style="background-color: #40ce64;padding:1px;border-radius:30px;color:white;display:flex;align-items:center">
                      <span> یک پاسخ</span>  

                </div>
                
                

            </div>  
         </div>  
                
        @endforeach
      
        
        <!-- نظرات بیشتر در اینجا -->  
    </div>
     
        
    @else
    <div class="container">
        <a style="margin: 10px;float:inline-start;" class="btn btn-danger" href="/register" style="float: inline-start">لطفا ابتدا وارد برای دیدن نظرات</a>


    </div>

        
    @endif



                <script>
                    function change1(url) {
                        document.getElementById("img_product_main").setAttribute("src", url);

                        document.getElementById("c1").style.border = '3px solid black';
                        document.getElementById("c1").style.opacity = '1';
                        document.getElementById("c2").style.border = '';
                        document.getElementById("c2").style.opacity = '0.5';

                        document.getElementById("c3").style.border = '';
                        document.getElementById("c3").style.border = '0.5';


                    }

                    function change2(url) {
                        document.getElementById("img_product_main").setAttribute("src", url);

                        document.getElementById("c2").style.border = '3px solid black';
                        document.getElementById("c2").style.opacity = '1';

                        document.getElementById("c1").style.border = '';
                        document.getElementById("c1").style.opacity = '0.5';
                        document.getElementById("c3").style.border = '';
                        document.getElementById("c3").style.border = '0.5';


                    }

                    function change3(url) {
                        document.getElementById("img_product_main").setAttribute("src", url);

                        document.getElementById("c3").style.border = '3px solid black';
                        document.getElementById("c3").style.opacity = '1';
                        document.getElementById("c2").style.border = '';
                        document.getElementById("c2").style.opacity = '0.5';
                        document.getElementById("c1").style.border = '';
                        document.getElementById("c1").style.opacity = '0.5';

                    }

                    function product_img_round() {
                        c = 1;
                        var urls = [document.getElementById("c1").getAttribute('src'), document.getElementById('c2').getAttribute(
                            'src'), document.getElementById('c3').getAttribute('src')]
                        setInterval(() => {
                            if (c == 1) {
                                document.getElementById(`c3`).style.border = '';
                                document.getElementById(`c3`).style.opacity = '0.5';
                                document.getElementById(`c2`).style.border = '';
                                document.getElementById(`c2`).style.opacity = '0.5';
                            }
                            if (c == 2) {
                                document.getElementById(`c3`).style.border = '';
                                document.getElementById(`c3`).style.opacity = '0.5';
                                document.getElementById(`c1`).style.border = '';
                                document.getElementById(`c1`).style.opacity = '0.5';
                            } else if (c == 3) {
                                document.getElementById(`c1`).style.border = '';
                                document.getElementById(`c1`).style.opacity = '0.5';
                                document.getElementById(`c2`).style.border = '';
                                document.getElementById(`c2`).style.opacity = '0.5';
                            }
                            document.getElementById("img_product_main").setAttribute('src', urls[c - 1]);
                            document.getElementById(`c${c}`).style.border = '3px solid black';
                            document.getElementById(`c${c}`).style.opacity = '1';

                            c++;
                            if (c - 1 == 3 && c == 4) {
                                c = 1
                            }



                        }, 5000);
                    }

                    function dunder_number() {

                        var counter = document.getElementById('product-count').getAttribute('value')

                        document.getElementById('product-count').setAttribute('value', counter - 1);
                        if (counter <= 1) {
                            counter = 1;
                            document.getElementById('product-count').setAttribute('value', 1);
                        }

                    }
                    var counter_add = 0

                    function add_number(count) {
                        console.log(count);

                        var counter = document.getElementById('product-count').getAttribute('value');
                        if (counter_add >= count) {
                            document.getElementById('product-count').setAttribute('value', counter_add);
                        } else {
                            document.getElementById('product-count').setAttribute('value', counter_add++);

                        }




                    }

                    function ul_pro_1() {
                        document.getElementById("about_pro").style.display = "block";
                        document.getElementById("abt_t_p1").style.display = "none";
                        document.getElementById("p_abouts1").style.backgroundColor = '#0068C8'
                        document.getElementById("p_abouts1").style.color = 'white'
                        document.getElementById("p_abouts2").style.backgroundColor = '#FFFFFF'
                        document.getElementById("p_abouts2").style.color = 'black'
                        document.getElementById("p_abouts3").style.backgroundColor = '#FFFFFF'
                        document.getElementById("p_abouts3").style.color = 'black'
                    }

                    function ul_pro_2() {
                        document.getElementById("about_pro").style.display = "none";
                        document.getElementById("abt_t_p1").style.display = "block";
                        document.getElementById("p_abouts1").style.backgroundColor = '#FFFFFF'
                        document.getElementById("p_abouts1").style.color = 'black'
                        document.getElementById("p_abouts2").style.backgroundColor = '#0068C8'
                        document.getElementById("p_abouts2").style.color = 'white'
                        document.getElementById("p_abouts3").style.backgroundColor = '#FFFFFF'
                        document.getElementById("p_abouts3").style.color = 'black'
                    }

                    product_img_round();

                    function bt_add_pro(p_id, u_id) {
                        var counter = document.getElementById('product-count').getAttribute('value');
                        $.ajax({
                            url: `http://192.168.1.134:8000/api/cart/add_to_cart/${p_id}/${counter}/${u_id}`,
                            type: 'GET',
                            dataType: 'json',
                            success: function(response) {
                                console.log('دریافت موفق: ', response);
                                console.log(response['msg']);

                                // به روز رسانی محتویات المان msg  
                                var msgElement = document.getElementById('msg');
                                msgElement.innerHTML = response['msg'];

                                // نمایش پیام  
                                msgElement.style.display = 'block'; // پیام را نمایان کنید  

                                // تنظیم زمان برای ناپدید شدن با انیمیشن  
                                setTimeout(function() {
                                    msgElement.style.transition = 'opacity 0.5s ease'; // تغییرات انیمیشن  
                                    msgElement.style.opacity = 0; // ناپدید شدن پیام  

                                    // بعد از 500 میلی‌ثانیه، پیام را پنهان کنیم  
                                    setTimeout(function() {
                                        msgElement.style.display =
                                        'none'; // مخفی کردن پیام پس از ناپدید شدن  
                                        msgElement.style.opacity =
                                        1; // بازگشت به حالت اولیه برای استفاده‌های بعدی  
                                    }, 500);
                                }, 300); // تأخیر 300 میلی‌ثانیه قبل از شروع ناپدید شدن  
                                location.reload();
                            },
                            error: function(xhr, status, error) {
                                console.error('خطا در دریافت داده: ', error);
                            }
                        });
                    }
                </script>





            @endsection

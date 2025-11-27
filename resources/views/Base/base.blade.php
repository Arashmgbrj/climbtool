<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- Demo styles -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
    <style>
        .swiper {
            width: 80%;
            height: 10%;
            margin: 0;

        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 200px;
            position: relative;
            top: 0;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .h_inp_btn {
            padding: 15px 20px 11px 40px;
            text-align: center;
            background-color: rgba(0, 104, 200, 1);
            font-weight: bolder;
            color: white;
            border-radius: 10px 0px 0px 10px;
            border-right: 0px;
            border: 0;
            position: relative;
            left: 2px;
        }

        body a {
            text-decoration: none;
        }

        .product_image {
            width: 40%;
        }

        .product_cap {
            width: 50%;
        }

        @media only screen and (max-width: 400px) {
            .ul_pro {
                display: grid;
                grid-template-columns: repeat(2, 50%);
                grid-template-rows: repeat(2, 50%);
                text-align: center;
                position: relative;
                right: 50px;
            }




        }

        @media only screen and (max-width: 1200px) {
            .product_image {
                float: inline-start;
                margin-right: 0%;
                width: 100%;
                justify-content: center;

            }

            .product_cap {
                float: inline-start;
                width: 100%;
                margin-left: 0%;
            }

            .p_img_top {
                position: relative;
                top: 50px;
            }

            .product_image_left img {
                width: 93px;
                height: 93px;
                background-color: #FFFFFFFF;
                padding: 10px;
                border-radius: 10px;
            }

            .product_cap {
                padding-left: 3%;
                padding-right: 3%;
            }





        }

        @media only screen and (max-width: 600px) {
            .ul_pro li span {
                font-size: 10px;
                font-weight: bolder;




            }

            .ul_pro li span svg {
                width: 10px;
                height: 10px;
                font-weight: bolder;
            }





        }

        @media only screen and (max-width: 500px) {
            .product_image {
                display: flex;
                flex-direction: column-reverse;
            }

            .product_image_left {
                display: grid;
                grid-template-columns: repeat(3, 30%);
            }

            .ul_pro li span {
                font-size: 13px;



            }

            .add_to_boy {
                flex-direction: column;
            }

            .counter-container {
                width: 100%;
                justify-content: center;
            }



            a {
                text-decoration: none;
            }
        }

        #price {
            font-size: 40px;
            font-weight: bolder;
            color: #F0003C;
        }

        .p_abouts span {
            margin: 0;
            line-height: 1.2;
            padding: 15px 45px;
            position: relative;
            z-index: 1;
            width: 100%;
            display: inline-block;
            border-width: 1px;
            border-style: solid;
            border-radius: 40px;
            border-color: #989899;
            transition: 300ms ease 0s;
            font-weight: 700;
            color: rgb(0 0 0);
            font-size: 30px;
            cursor: pointer;
        }

        .p_abouts {
            border-radius: 50px;
        }

        .about {

            position: relative;
            top: 20px;


        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('style/bootstrap-rtl.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('style/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('style/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('style/style2.css')}}">
    





</head>

<body style="overflow-x: hidden; background-color: #EEF7FF;">

    <header class="container-xxl">
        <div class="master_header">
            <div class="d-flex d-xl-none ham_icon">
                <svg style="width: 20px; height:20px; color:#7CF5FF;" xmlns="http://www.w3.org/2000/svg" id="Outline"
                    viewBox="0 0 24 24" width="512" height="512">
                    <path style="color: #16C207;"
                        d="M7,0H4A4,4,0,0,0,0,4V7a4,4,0,0,0,4,4H7a4,4,0,0,0,4-4V4A4,4,0,0,0,7,0ZM9,7A2,2,0,0,1,7,9H4A2,2,0,0,1,2,7V4A2,2,0,0,1,4,2H7A2,2,0,0,1,9,4Z">
                    </path>
                    <path
                        d="M20,0H17a4,4,0,0,0-4,4V7a4,4,0,0,0,4,4h3a4,4,0,0,0,4-4V4A4,4,0,0,0,20,0Zm2,7a2,2,0,0,1-2,2H17a2,2,0,0,1-2-2V4a2,2,0,0,1,2-2h3a2,2,0,0,1,2,2Z">
                    </path>
                    <path
                        d="M7,13H4a4,4,0,0,0-4,4v3a4,4,0,0,0,4,4H7a4,4,0,0,0,4-4V17A4,4,0,0,0,7,13Zm2,7a2,2,0,0,1-2,2H4a2,2,0,0,1-2-2V17a2,2,0,0,1,2-2H7a2,2,0,0,1,2,2Z">
                    </path>
                    <path
                        d="M20,13H17a4,4,0,0,0-4,4v3a4,4,0,0,0,4,4h3a4,4,0,0,0,4-4V17A4,4,0,0,0,20,13Zm2,7a2,2,0,0,1-2,2H17a2,2,0,0,1-2-2V17a2,2,0,0,1,2-2h3a2,2,0,0,1,2,2Z">
                    </path>
                </svg>

            </div>
            <div>
                <img src="/public/Logo.webp" alt=""
                    class="logo">
            </div>
            <div class="d-xl-block d-none search_pc">
                <div class="input-group mb-3" style="position: relative; top:4px;">

                    <input id='pc_search' type="text" class="form-control serach_pc_inp" placeholder="جستجو...."
                        aria-label="" aria-describedby="basic-addon1"
                        style="width: 415px; background-color: #FFFFFF; border: 0; border-radius: 0px 10px 10px 0px; height:44px;">
                    <div class="input-group-prepend" style="position: relative;left: 10px;height: 42px;bottom: 10px;">
                        <button id='btn_serach_pc' class="btn btn-outline-secondary" type="button"
                            style="border-radius:100px; height:44px; border: 0; background-color: #FFFFFF; border-radius: 10px 0px 0px 10px;">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color:rgb(90, 114, 160);" width="16"
                                height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg>
                        </button>
                    </div>
                </div>

            </div>
            <div class="d-flex flex-row align-items-center">
                <div class="d-xl-flex d-none align-items-center  flex-column l_ico">

                    <div class="login_ico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>

                    </div>
                    <div>
                        @if (Auth::check())
                      
                          <a href="{{route('UserGet')}}" style="font-size: 10px; color: #5A72A0; cursor: pointer;">98{{ Auth::user()->phone_number }}+</a>
                     

                            
                        @else
                         <a href="{{route('UserRegisterget')}}" style="font-size: 10px; color: #5A72A0; cursor: pointer;">ورود/عضویت</a>

                            
                        @endif



                    </div>

                </div>
                <div>
                    <div style="position: relative; right: 10px;">
                        <button onclick="order()"  type="button" class="btn position-relative "
                            style="background-color: #16C207; border-radius: 100px;padding: 10px;">
                          
                            <svg xmlns="http://www.w3.org/2000/svg" style="color:white" width="20" height="20"
                                fill="currentColor" class="bi bi-basket2" viewBox="0 0 16 16">
                                <path
                                    d="M4 10a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0zm3 0a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0zm3 0a1 1 0 1 1 2 0v2a1 1 0 0 1-2 0z">
                                </path>
                                <path
                                    d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-.623l-1.844 6.456a.75.75 0 0 1-.722.544H3.69a.75.75 0 0 1-.722-.544L1.123 8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.163 8l1.714 6h8.246l1.714-6z">
                                </path>
                            </svg>

                        </button>
                    </div>
                </div>
            </div>



        </div>
        <div class="d-xl-flex d-none flex-row justify-content-between align-items-center">
            <div class="d-flex flex-row align-items-center h_pc">
                <div class="category">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" style="color: #EEF7FF;" height="16"
                        fill="currentColor" class="bi bi-list-nested" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.5 11.5A.5.5 0 0 1 5 11h10a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5m-2-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m-2-4A.5.5 0 0 1 1 3h10a.5.5 0 0 1 0 1H1a.5.5 0 0 1-.5-.5" />
                    </svg>
                    <a href="{{ route('Storeget') }}" class="h6"> فروشگاه</a>
              

                </div>

                <div class="d-flex flex-row align-items-center h_pc_items">
                    
                    <div>
                        <a href="{{ route('home') }}">خانه</a>
                    </div>
                    <div>
                        <a href="{{ route('blog_main') }}">مقالات</a>
                    </div>
                    <div>
                        <a href="{{ route('ContactView') }}">تماس باما </a>
                    </div>
                   


                </div>

            </div>
            <div class="contact">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" class="num"
                    fill="currentColor" class="bi bi-person-fill-exclamation" viewBox="0 0 16 16">
                    <path
                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4" />
                    <path
                        d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-3.5-2a.5.5 0 0 0-.5.5v1.5a.5.5 0 0 0 1 0V11a.5.5 0 0 0-.5-.5m0 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1" />
                </svg>
                <span class="num">پشتیبانی</span>
                <span class="num">:</span>
                <span class="num">0666-4231-33</span>
            </div>


        </div>
        <div class="hamber " id="hamber">

            <div class="ham_dest">
                <div class="dest_hamber" id="dest_ham">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-x-square" viewBox="0 0 16 16">
                        <path
                            d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                        <path
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                    </svg>
                </div>
                <div class="exit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                        <path fill-rule="evenodd"
                            d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                    </svg>
                </div>
            </div>
            <div style=" display: flex; align-items: center; justify-content: center; flex-direction: column;">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
                @if (Auth::check())
                <a href="{{ route('UserGet') }}">مشاهده پروفایل </a>
                    
                @else
                <a href="{{ route('UserRegisterget') }}">ورود /عضویت</a>

                    
                @endif
            </div>
            <div style="margin-top: 20px;">
                <div class="input-group mb-3">
                    <input id='pc_search1' type="text" class="form-control" style="border: 0;"
                        placeholder="جستجو کنید..." aria-label="Recipient's username"
                        aria-describedby="button-addon2">
                    <div id="btn_serach_pc1"
                        style="height: 43px; background-color: #FFFFFF;display:flex;align-items:center; border-radius:50px;">
                        <button class="btn btn-outline-secondary" style="border: 0; background-color: #FFFFFF;"
                            type="button">

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg>
                        </button>

                    </div>

                </div>

            </div>
            <div
                style="margin-top: 50px; display: flex; flex-direction: row; align-items: center; justify-content:space-between; text-align: center;">
                <div style="width: 100%; padding: 10px; cursor: pointer;" id="pages">
                    <span style="font-weight: bold;">صفحات وبسایت</span>
                </div>
                <div style="width: 100%; padding: 10px; cursor: pointer;" id="cat" class="c_green">
                    <span style="font-weight: bold;">دسته بندی ها </span>
                </div>

            </div>
            <div class="categorys" id = "cat_data">
                <ul>
                    <li><svg xmlns="http://www.w3.org/2000/svg" style="color: #5A72A0;" width="16"
                            height="16" fill="currentColor" class="bi bi-person-standing-dress"
                            viewBox="0 0 16 16">
                            <path
                                d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 12.25V12h1v3.25a.75.75 0 0 0 1.5 0V12h1l-1-5v-.215a.285.285 0 0 1 .56-.078l.793 2.777a.711.711 0 1 0 1.364-.405l-1.065-3.461A3 3 0 0 0 8.784 3.5H7.216a3 3 0 0 0-2.868 2.118L3.283 9.079a.711.711 0 1 0 1.365.405l.793-2.777a.285.285 0 0 1 .56.078V7l-1 5h1v3.25a.75.75 0 0 0 1.5 0Z" />
                        </svg><a href="http://192.168.1.134:8000/product?category%5B%5D=%DA%A9%DB%8C%D9%81&min_price=0&max_price=10000000">کیف</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" style="color: #5A72A0;" width="16"
                            height="16" fill="currentColor" class="bi bi-person-standing-dress"
                            viewBox="0 0 16 16">
                            <path
                                d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 12.25V12h1v3.25a.75.75 0 0 0 1.5 0V12h1l-1-5v-.215a.285.285 0 0 1 .56-.078l.793 2.777a.711.711 0 1 0 1.364-.405l-1.065-3.461A3 3 0 0 0 8.784 3.5H7.216a3 3 0 0 0-2.868 2.118L3.283 9.079a.711.711 0 1 0 1.365.405l.793-2.777a.285.285 0 0 1 .56.078V7l-1 5h1v3.25a.75.75 0 0 0 1.5 0Z" />
                        </svg><a href="http://192.168.1.134:8000/product?category%5B%5D=%DA%86%D8%A7%D9%82%D9%88&min_price=0&max_price=10000000"> چاقو</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" style="color: #5A72A0;" width="16"
                            height="16" fill="currentColor" class="bi bi-person-standing-dress"
                            viewBox="0 0 16 16">
                            <path
                                d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 12.25V12h1v3.25a.75.75 0 0 0 1.5 0V12h1l-1-5v-.215a.285.285 0 0 1 .56-.078l.793 2.777a.711.711 0 1 0 1.364-.405l-1.065-3.461A3 3 0 0 0 8.784 3.5H7.216a3 3 0 0 0-2.868 2.118L3.283 9.079a.711.711 0 1 0 1.365.405l.793-2.777a.285.285 0 0 1 .56.078V7l-1 5h1v3.25a.75.75 0 0 0 1.5 0Z" />
                        </svg><a href="http://192.168.1.134:8000/product?category%5B%5D=%D8%AA%D8%B4%DA%A9&min_price=0&max_price=10000000"> تشک</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" style="color: #5A72A0;" width="16"
                            height="16" fill="currentColor" class="bi bi-person-standing-dress"
                            viewBox="0 0 16 16">
                            <path
                                d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 12.25V12h1v3.25a.75.75 0 0 0 1.5 0V12h1l-1-5v-.215a.285.285 0 0 1 .56-.078l.793 2.777a.711.711 0 1 0 1.364-.405l-1.065-3.461A3 3 0 0 0 8.784 3.5H7.216a3 3 0 0 0-2.868 2.118L3.283 9.079a.711.711 0 1 0 1.365.405l.793-2.777a.285.285 0 0 1 .56.078V7l-1 5h1v3.25a.75.75 0 0 0 1.5 0Z" />
                        </svg><a href="http://192.168.1.134:8000/product?category%5B%5D=%D9%88%D8%B3%D8%A7%DB%8C%D9%84+%DA%A9%D9%88%D9%87%D9%86%D9%88%D8%B1%D8%AF%DB%8C&min_price=0&max_price=10000000">وسایل کوهنوردی</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" style="color: #5A72A0;" width="16"
                            height="16" fill="currentColor" class="bi bi-person-standing-dress"
                            viewBox="0 0 16 16">
                            <path
                                d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 12.25V12h1v3.25a.75.75 0 0 0 1.5 0V12h1l-1-5v-.215a.285.285 0 0 1 .56-.078l.793 2.777a.711.711 0 1 0 1.364-.405l-1.065-3.461A3 3 0 0 0 8.784 3.5H7.216a3 3 0 0 0-2.868 2.118L3.283 9.079a.711.711 0 1 0 1.365.405l.793-2.777a.285.285 0 0 1 .56.078V7l-1 5h1v3.25a.75.75 0 0 0 1.5 0Z" />
                        </svg><a href="#">دسته اول</a></li>



                </ul>
            </div>
            <div class="main_page_dr " id="pages_data">
                <ul>
                    <li><svg xmlns="http://www.w3.org/2000/svg" style="color: #5A72A0;" width="16"
                            height="16" fill="currentColor" class="bi bi-person-standing-dress"
                            viewBox="0 0 16 16">
                            <path
                                d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 12.25V12h1v3.25a.75.75 0 0 0 1.5 0V12h1l-1-5v-.215a.285.285 0 0 1 .56-.078l.793 2.777a.711.711 0 1 0 1.364-.405l-1.065-3.461A3 3 0 0 0 8.784 3.5H7.216a3 3 0 0 0-2.868 2.118L3.283 9.079a.711.711 0 1 0 1.365.405l.793-2.777a.285.285 0 0 1 .56.078V7l-1 5h1v3.25a.75.75 0 0 0 1.5 0Z" />
                        </svg><a href="{{ route('home') }}">خانه</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" style="color: #5A72A0;" width="16"
                            height="16" fill="currentColor" class="bi bi-person-standing-dress"
                            viewBox="0 0 16 16">
                            <path
                                d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 12.25V12h1v3.25a.75.75 0 0 0 1.5 0V12h1l-1-5v-.215a.285.285 0 0 1 .56-.078l.793 2.777a.711.711 0 1 0 1.364-.405l-1.065-3.461A3 3 0 0 0 8.784 3.5H7.216a3 3 0 0 0-2.868 2.118L3.283 9.079a.711.711 0 1 0 1.365.405l.793-2.777a.285.285 0 0 1 .56.078V7l-1 5h1v3.25a.75.75 0 0 0 1.5 0Z" />
                        </svg><a href="{{ route('blog_main') }}">وبلاگ ها</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" style="color: #5A72A0;" width="16"
                            height="16" fill="currentColor" class="bi bi-person-standing-dress"
                            viewBox="0 0 16 16">
                            <path
                                d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 12.25V12h1v3.25a.75.75 0 0 0 1.5 0V12h1l-1-5v-.215a.285.285 0 0 1 .56-.078l.793 2.777a.711.711 0 1 0 1.364-.405l-1.065-3.461A3 3 0 0 0 8.784 3.5H7.216a3 3 0 0 0-2.868 2.118L3.283 9.079a.711.711 0 1 0 1.365.405l.793-2.777a.285.285 0 0 1 .56.078V7l-1 5h1v3.25a.75.75 0 0 0 1.5 0Z" />
                        </svg><a href="#"> درباره ی ما</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" style="color: #5A72A0;" width="16"
                            height="16" fill="currentColor" class="bi bi-person-standing-dress"
                            viewBox="0 0 16 16">
                            <path
                                d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 12.25V12h1v3.25a.75.75 0 0 0 1.5 0V12h1l-1-5v-.215a.285.285 0 0 1 .56-.078l.793 2.777a.711.711 0 1 0 1.364-.405l-1.065-3.461A3 3 0 0 0 8.784 3.5H7.216a3 3 0 0 0-2.868 2.118L3.283 9.079a.711.711 0 1 0 1.365.405l.793-2.777a.285.285 0 0 1 .56.078V7l-1 5h1v3.25a.75.75 0 0 0 1.5 0Z" />
                        </svg><a href="#"> تماس با ما</a></li>




                </ul>
            </div>


        </div>
        <span id="u_id" style="display: none">
            @if (Auth::check())
             {{Auth::user()->id}}     
            @else
            
                
            @endif
           
        </span>

    </header>
    <section class="container-xxl ex" id="ex">
        @yield('content')
     <footer style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%); color: white; padding: 40px 0 20px;">
    <!-- بخش خدمات -->
    <section class="container" style="margin-bottom: 40px;">
        <div class="row text-center">
            <!-- ارسال سریع -->
            <div class="col-6 col-md-3 mb-4">
                <div class="d-flex flex-column align-items-center">
                    <div class="mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" 
                             class="bi bi-truck" viewBox="0 0 16 16" style="color: #4ECDC4;">
                            <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7z"/>
                        </svg>
                    </div>
                    <h6 style="color: #4ECDC4; font-weight: bold;">ارسال سریع و مطمئن</h6>
                    <small>تحویل در کمترین زمان ممکن</small>
                </div>
            </div>

            <!-- تضمین کیفیت -->
            <div class="col-6 col-md-3 mb-4">
                <div class="d-flex flex-column align-items-center">
                    <div class="mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" 
                             class="bi bi-award" viewBox="0 0 16 16" style="color: #FF6B6B;">
                            <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z"/>
                            <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                        </svg>
                    </div>
                    <h6 style="color: #FF6B6B; font-weight: bold;">تضمین کیفیت</h6>
                    <small>کالاهای اورجینال و با کیفیت</small>
                </div>
            </div>

            <!-- پشتیبانی -->
            <div class="col-6 col-md-3 mb-4">
                <div class="d-flex flex-column align-items-center">
                    <div class="mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" 
                             class="bi bi-headset" viewBox="0 0 16 16" style="color: #45B7D1;">
                            <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/>
                        </svg>
                    </div>
                    <h6 style="color: #45B7D1; font-weight: bold;">پشتیبانی 24/7</h6>
                    <small>همراه شما در تمام مراحل</small>
                </div>
            </div>

            <!-- بازگشت کالا -->
            <div class="col-6 col-md-3 mb-4">
                <div class="d-flex flex-column align-items-center">
                    <div class="mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" 
                             class="bi bi-arrow-clockwise" viewBox="0 0 16 16" style="color: #96CEB4;">
                            <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                            <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                        </svg>
                    </div>
                    <h6 style="color: #96CEB4; font-weight: bold;">بازگشت 7 روزه</h6>
                    <small>امکان بازگشت کالا تا 7 روز</small>
                </div>
            </div>
        </div>
    </section>

    <!-- بخش اطلاعات تماس و لینک ها -->
    <section class="container" style="margin-bottom: 40px;">
        <div class="row">
            <!-- اطلاعات تماس -->
            <div class="col-md-4 mb-4 text-center text-md-right">
                <img src="/public/logo.svg" 
                     alt="فروشگاه ابزار کوهنوردی" class="img-fluid mb-3" style="width: 160px; height: 42px;">
                <p class="mb-3" style="color: #E0E0E0;">
                    تامین کننده تجهیزات حرفه ای کوهنوردی و طبیعت گردی
                </p>
                <div class="contact-info">
                    <p class="mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
                             class="bi bi-telephone-fill me-2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>
                        021-88776655
                    </p>
                    <p class="mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
                             class="bi bi-envelope-fill me-2" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                        </svg>
                        Support@ClimbingShop.com
                    </p>
                    <a href="#" class="btn btn-outline-light btn-sm mt-2">تماس با ما</a>
                </div>
            </div>

            <!-- لینک های مفید -->
            <div class="col-md-8">
                <div class="row">
                    <div class="col-6 col-md-3 mb-4">
                        <h6 style="color: #4ECDC4; border-bottom: 2px solid #4ECDC4; padding-bottom: 8px; display: inline-block;">
                            محصولات
                        </h6>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2"><a href="#" style="color: #E0E0E0; text-decoration: none;">کفش کوهنوردی</a></li>
                            <li class="mb-2"><a href="#" style="color: #E0E0E0; text-decoration: none;">کوله پشتی</a></li>
                            <li class="mb-2"><a href="#" style="color: #E0E0E0; text-decoration: none;">طناب و کارابین</a></li>
                            <li class="mb-2"><a href="#" style="color: #E0E0E0; text-decoration: none;">لباس کوهنوردی</a></li>
                            <li class="mb-2"><a href="#" style="color: #E0E0E0; text-decoration: none;">لوازم جانبی</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-3 mb-4">
                        <h6 style="color: #FF6B6B; border-bottom: 2px solid #FF6B6B; padding-bottom: 8px; display: inline-block;">
                            راهنما
                        </h6>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2"><a href="#" style="color: #E0E0E0; text-decoration: none;">راهنمای اندازه</a></li>
                            <li class="mb-2"><a href="#" style="color: #E0E0E0; text-decoration: none;">نحوه سفارش</a></li>
                            <li class="mb-2"><a href="#" style="color: #E0E0E0; text-decoration: none;">روش های پرداخت</a></li>
                            <li class="mb-2"><a href="#" style="color: #E0E0E0; text-decoration: none;">سوالات متداول</a></li>
                            <li class="mb-2"><a href="#" style="color: #E0E0E0; text-decoration: none;">راهنمای انتخاب</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-3 mb-4">
                        <h6 style="color: #45B7D1; border-bottom: 2px solid #45B7D1; padding-bottom: 8px; display: inline-block;">
                            خدمات
                        </h6>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2"><a href="#" style="color: #E0E0E0; text-decoration: none;">گارانتی</a></li>
                            <li class="mb-2"><a href="#" style="color: #E0E0E0; text-decoration: none;">بازگرداندن کالا</a></li>
                            <li class="mb-2"><a href="#" style="color: #E0E0E0; text-decoration: none;">حریم خصوصی</a></li>
                            <li class="mb-2"><a href="#" style="color: #E0E0E0; text-decoration: none;">قوانین و مقررات</a></li>
                            <li class="mb-2"><a href="#" style="color: #E0E0E0; text-decoration: none;">باشگاه مشتریان</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-3 mb-4">
                        <h6 style="color: #96CEB4; border-bottom: 2px solid #96CEB4; padding-bottom: 8px; display: inline-block;">
                            ما را دنبال کنید
                        </h6>
                        <div class="social-links mt-3">
                            <a href="#" class="d-block mb-2" style="color: #E0E0E0; text-decoration: none;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
                                     class="bi bi-instagram me-2" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.92 3.92 0 0 0-1.417.923A3.92 3.92 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.92 3.92 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.92 3.92 0 0 0-.923-1.417A3.92 3.92 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                </svg>
                                اینستاگرام
                            </a>
                            <a href="#" class="d-block mb-2" style="color: #E0E0E0; text-decoration: none;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
                                     class="bi bi-telegram me-2" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                                </svg>
                                تلگرام
                            </a>
                            <a href="#" class="d-block mb-2" style="color: #E0E0E0; text-decoration: none;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
                                     class="bi bi-whatsapp me-2" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                </svg>
                                واتساپ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- بخش کپی رایت -->
    <section class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <span style="color: #B0B0B0; font-size: 0.9rem;">
                    © 2024 فروشگاه ابزار کوهنوردی. تمامی حقوق محفوظ است.
                </span>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <div class="payment-methods">
                    <span class="me-3" style="color: #B0B0B0; font-size: 0.9rem;">پرداخت امن:</span>
                    <span class="badge bg-light text-dark me-2">شتاب</span>
                    <span class="badge bg-light text-dark me-2">زرین پال</span>
                    <span class="badge bg-light text-dark">پی پال</span>
                </div>
            </div>
        </div>
    </section>
</footer>
    </section>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        AOS.init(); // شروع AOS
   
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/header.js') }}"></script>
    <script src="{{ asset(' js/product.js ') }}"></script>

    <script>
        const button = document.querySelector('.hover-button');
        const category = document.querySelector('.product-category');

        button.addEventListener('mouseover', () => {
            category.classList.add('show');
        });

        button.addEventListener('mouseout', () => {
            category.classList.remove('show');
        });

        // برای اینکه دسته بندی در صورت قرار گرفتن موس روی آن باقی بماند  
        category.addEventListener('mouseover', () => {
            category.classList.add('show');
        });

        category.addEventListener('mouseout', () => {
            category.classList.remove('show');
        });
    </script>
    <script>
        function filter() {
            var defrence = document.getElementById("filter_nav").style.right;
            console.log(defrence)
            if (defrence == "200%") {
                document.getElementById("filter_nav").style.right = "0%";
            } else {
                document.getElementById("filter_nav").style.right = "200%";
            }
        }

        function s1() {
            number_of_products = console.log(document.getElementsByClassName("top_items").length)
            for (var i = 0; i < number_of_products; i++) {
                document.getElementById(`p${i}`).classList.remove("col")
                document.getElementById(`p${i}`).classList.remove("col")
            }

        }
    </script>
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
    <script>
        $(document).ready(function() {
            $("#btn_serach_pc").click(function(e) {
                const a = $('#pc_search').val();
                window.location.href = `product?search=${a}`;



            });
            $("#btn_serach_pc1").click(function(e) {
                const a = $('#pc_search1').val();
                window.location.href = `product?search=${a}`;



            });
        });
    </script>
    <script>  
        function getCookie(name) {  
            const nameEQ = name + "=";  
            const ca = document.cookie.split(';');  
            for (let i = 0; i < ca.length; i++) {  
                let c = ca[i];  
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);  
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);  
            }  
            return null;  
        }  
    
        function setCookie(name, value, days) {  
            // بررسی وجود کوکی  
            if (getCookie(name) === null) {  
                const d = new Date();  
                d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000)); // روزها به milliseconds تبدیل می‌شود  
                const expires = "expires=" + d.toUTCString();  
                document.cookie = name + "=" + value + ";" + expires + ";path=/"; // مسیر کوکی  
                console.log(`کوکی "${name}" با مقدار "${value}" ایجاد شد.`);  
            } else {  
                console.log(`کوکی "${name}" وجود دارد و ایجاد نمی‌شود.`);  
            }  
        }  
    
        const id = document.getElementById("u_id").innerHTML;  
        
        if (id) {  

            fetch(`http://192.168.1.134:8000/api/cart/get_count/${id}`)  
                .then(response => {  
                    if (!response.ok) {  
                        throw new Error('شبکه خطا: ' + response.status);  
                    }  
                    return response.json();  
                })  
                .then(data => {  
                    console.log('دریافت موفق: ', data);  
                    console.log(data['msg']);  
    
                    // به روز رسانی محتویات المان msg  
                    var msgElement = document.getElementById('msg');  
                    msgElement.innerHTML = data['msg'];  
    
                    // نمایش پیام  
                    msgElement.style.display = 'block'; // پیام را نمایان کنید  
    
                    // تنظیم زمان برای ناپدید شدن با انیمیشن  
                    setTimeout(function() {  
                        msgElement.style.transition = 'opacity 0.5s ease'; // تغییرات انیمیشن  
                        msgElement.style.opacity = 0; // ناپدید شدن پیام  
    
                        // بعد از 500 میلی‌ثانیه، پیام را پنهان کنیم  
                        setTimeout(function() {  
                            msgElement.style.display = 'none'; // مخفی کردن پیام پس از ناپدید شدن  
                            msgElement.style.opacity = 1; // بازگشت به حالت اولیه برای استفاده‌های بعدی  
                        }, 500);  
                    }, 300); // تأخیر 300 میلی‌ثانیه قبل از شروع ناپدید شدن  
                    location.reload();  
                })  
                .catch(error => {  
                    console.error('خطا در دریافت داده: ', error);  
                });  
        } else {  
            console.log("sadsa");  
        }  
        function get_categorys()
        {

        

            fetch(`http://192.168.1.134:8000/api/cart/get_count/${id}`)  
                .then(response => {  
                    if (!response.ok) {  
                        throw new Error('شبکه خطا: ' + response.status);  
                    }  
                    return response.json();  
                })  
                .then(data => {  
                    console.log('دریافت موفق: ', data);  
                    console.log(data['msg']);  
    
                    // به روز رسانی محتویات المان msg  
                    var msgElement = document.getElementById('msg');  
                    msgElement.innerHTML = data['msg'];  
    
                    // نمایش پیام  
                    msgElement.style.display = 'block'; // پیام را نمایان کنید  
    
                    // تنظیم زمان برای ناپدید شدن با انیمیشن  
                    setTimeout(function() {  
                        msgElement.style.transition = 'opacity 0.5s ease'; // تغییرات انیمیشن  
                        msgElement.style.opacity = 0; // ناپدید شدن پیام  
    
                        // بعد از 500 میلی‌ثانیه، پیام را پنهان کنیم  
                        setTimeout(function() {  
                            msgElement.style.display = 'none'; // مخفی کردن پیام پس از ناپدید شدن  
                            msgElement.style.opacity = 1; // بازگشت به حالت اولیه برای استفاده‌های بعدی  
                        }, 500);  
                    }, 300); // تأخیر 300 میلی‌ثانیه قبل از شروع ناپدید شدن  
                    location.reload();  
                })  
                .catch(error => {  
                    console.error('خطا در دریافت داده: ', error);  
                });  
        }
       

        
   
    </script>
    
  <!-- jQery -->
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

    <script>
        function order()
        {
            window.location = "http://192.168.1.134:8000/orders/";
        }
    </script>

    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('js/popper.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/select2.min.js')}}"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
	<script src="{{asset('js/main.js')}}"></script>


</body>

</html>

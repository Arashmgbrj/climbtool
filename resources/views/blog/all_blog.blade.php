@extends('Base.base')

@section('title',"وبلاگ ها")

@section('content')
    <!--headbar-->
    <section class="head_bar container-xxl" >
        <a href="#">خانه</a>
        <span>/</span>
        <a href="#">وبلاگ</a>
        <span>/</span>



    </section>
    <!--pic-->
<section class="container-xxl" style="margin-top: 50px;">
    <div class="row">
        <!-- اطلاعیه ۱: دوره آموزشی -->
        <div class="col blog_item it">
            <div>
                <div class="blog_tiny">
                    <div>
                        <svg style="color: white;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-megaphone-fill" viewBox="0 0 16 16">
                            <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-11zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25 25 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56V3.224zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2 2 0 0 0 0 7v2c0 1.1.9 2 2 2a2 2 0 0 0 1.992-2.049a12 12 0 0 1 .01-.128zm1 0V4.935a25 25 0 0 1 1.088.085A25 25 0 0 1 5 6.909v4.41c-.256-.07-.508-.144-.756-.223a1.7 1.7 0 0 1-.244-.075z"/>
                        </svg>
                        <span style="white-space: nowrap;color: white;">25 دی 1403</span>
                    </div>
                    <div>
                        <svg style="color: white;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                        </svg>
                        <span style="white-space: nowrap; color: white;">۱۵۲ بازدید</span>
                    </div>
                </div>
                <div>
                    <p style="color: white; text-align: center;">📢 دوره رایگان آموزش کوهنوردی مقدماتی - شروع از ۱ بهمن</p>
                </div>
            </div>
        </div>

        <!-- اطلاعیه ۲: حراجی -->
        <div class="col blog_item it">
            <div>
                <div class="blog_tiny">
                    <div>
                        <svg style="color: white;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag-fill" viewBox="0 0 16 16">
                            <path d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        </svg>
                        <span style="white-space: nowrap;color: white;">22 دی 1403</span>
                    </div>
                    <div>
                        <svg style="color: white;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                        </svg>
                        <span style="white-space: nowrap; color: white;">۲۳۴ بازدید</span>
                    </div>
                </div>
                <div>
                    <p style="color: white; text-align: center;">🏷️ حراج ویژه زمستانه تجهیزات - تا 50% تخفیف</p>
                </div>
            </div>
        </div>

        <!-- اطلاعیه ۳: هشدار آب و هوا -->
        <div class="col blog_item it">
            <div>
                <div class="blog_tiny">
                    <div>
                        <svg style="color: white;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                        <span style="white-space: nowrap;color: white;">20 دی 1403</span>
                    </div>
                    <div>
                        <svg style="color: white;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                        </svg>
                        <span style="white-space: nowrap; color: white;">۳۰۱ بازدید</span>
                    </div>
                </div>
                <div>
                    <p style="color: white; text-align: center;">⚠️ هشدار زمستانی: برنامه‌ریزی صعود به ارتفاعات شمالی</p>
                </div>
            </div>
        </div>
    </div>

    <!-- اطلاعیه ویژه -->
    <div class="it d-xl-flex d-none" style="display: flex; align-items: flex-end; justify-content: center; width: 100%; background-image: url('/images/urgent-news.jpg'); height: 30vh; background-repeat: no-repeat; background-size: cover; border-radius: 50px; background-position: center;">
        <div class="sdwq">
            <div style="display: flex; flex-direction: row;">
                <div>
                    <svg style="color: white;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                    </svg>
                    <span style="white-space: nowrap;color: white;">18 دی 1403</span>
                </div>
                <div>
                    <svg style="color: white;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                    </svg>
                    <span style="white-space: nowrap; color: white;">۴۲۷ بازدید</span>
                </div>
            </div>
            <div>
                <p style="color: white; text-align: center; font-size: 1.2rem; font-weight: bold;">🚨 اطلاعیه مهم: تعطیلی موقت مسیرهای کوهنوردی البرز مرکزی</p>
            </div>
        </div>
    </div>
</section>
    <!--cat_blog-->
    <section class="container-xxl" style="margin-top: 50px;">
      <div  style="cursor: pointer; display: flex; align-items: center; justify-content: center; flex-direction: column;" >
        <img src="./public/gifs/categorys.gif" alt="" srcset="" style="width: 70px; height: 70px;">
        <span class="h4">دسته بندی ها</span>
        <span style="color: #5A72A0;">دسته بندی های اخبار و مقالات

        </span>
      </div>
      <div class="row cat_blog"  style="margin-top: 50px;">
        @foreach ($cat as $c )
          <div class="col" style="padding: 30px; border-radius: 50px; background-image: url('./public/blogs/bl.jpg'); background-size: cover; background-repeat: no-repeat;">
          <div style="display: flex; align-items: center; justify-content: space-between;">
            <span style="color: white;">{{ $c->cat_name }}</span>

          </div>
        

          </div>
          
        @endforeach

  

      </div>

    </section>
    <!--blogs-->
    <section class="container-xxl" style="margin: 50px; ">
      <div style="display: flex; align-items: center; justify-content: space-between; ">
        <div style="display: flex; ">
          <img src="./public/gifs/blog.gif" alt="" srcset="" style="width: 60px; height: 60px;">
          <span class="h3" style="position: relative; top: 50px;">مقالات</span>
          <br>
          <div  style="margin-top: 10%; display: flex; flex-direction: row; ">
            <div class="row item_blogs_a">
               @foreach ($data as $d )
                 <div class="col-4 " id="blog_item" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                    <a href="http://192.168.1.134:8000/weblog/{{ $d->title }}">
                     <img src="http://192.168.1.134:8000/storage/{{ $d->img1 }}" alt="{{$d->alt1}}" class="img-thumbnail" style=" border-radius:20px 20px 0px 0px; border: 0px;">
                     <h2 style="font-size: 15px; width: 90%; line-height: 25px;">{{ $d->title }}</h2>
 
                     <div class="d-flex flex-row justify-content-between" style="margin-top: 40%; padding: 2%; background-color: #dfe6e9; border-radius: 10px;">
                   <div>
                     <svg xmlns="http://www.w3.org/2000/svg" style="color: #0053FF;" width="25" height="25" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                       <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                     </svg>
                     <span style="color: #0053FF;"></span>
                   </div>
                   <div class="d-flex flex-column" style="text-align: center;">
                      <span style="font-weight: bold;font-size:10px;">{{ jdate($d->created_at)->format('Y/m/d') }}
                       <svg xmlns="http://www.w3.org/2000/svg" style="color: #0053FF;" width="16" height="16" fill="currentColor" class="bi bi-calendar2-week-fill" viewBox="0 0 16 16">
                         <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5m9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5M8.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM3 10.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
                       </svg>
                      </span>
             
                   </div>
 
 
                     </div>
                    </a> 
                 </div>
                 
               @endforeach
            
       
           
 
            
       
    
     
     
    
            </div>
  
    
          </div>

          

        </div>
       

      </div>
     

    </section>
@endsection
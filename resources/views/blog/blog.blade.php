@extends('Base.base')


@section('title',$title)
@section('content')

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
    p {
        color: #9b9ea2;
        text-align: justify;
        line-height: 30px;
        font-size: 13px;
      }
     h1 {
        color: #575852;
        font-size: 20px;
        cursor: pointer;
        transition: all 300ms ease-in;
      }
      h2,
      h3,
      h4,
      h5,
      h6 {
        cursor: pointer;
        color: #595b53;
        font-size: 17px;
        transition: all 300ms ease-in;
      }
      img {
        border-radius: 20px;

        margin-top: 10px;
        width: fit-content;
        width: 100%;
      }
     .l_bar div {
        margin: 3px;
      }
      figcaption {
        text-align: center;
        font-size: 10px;
        color: #9b9ea2;
      }
      .bl_content{
        width: 60%;
      }
      .ite {
        display: grid;
        grid-template-columns: repeat(4,23%);
        text-align: center;
        

      }
      .ite div{
        margin:20px;
      }
      .cont{
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        margin-top: 30px;

      }
      @media only screen and (max-width: 1100px) { 
        .bl_content{
            width: 100%;
        }
        .cont{
          margin-top: 10px;
        }
        .ite{
          grid-template-columns: repeat(2,50%);
        }
      }
</style>
<div
class="container-xxl cont"

>
<div style="display: flex; flex-direction: row">
  <div class="bl_content" >
    <main>
      <article>
        <section>
          <h1>{{ $data->title }}</h1>
          <div class="blog_tips ite">
            <div>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="13"
                height="13"
                fill="currentColor"
                class="bi bi-calendar4-week"
                viewBox="0 0 16 16"
              >
                <path
                  d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"
                />
                <path
                  d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"
                />
              </svg>

              <span>{{ jdate($data->created_at)->format('Y/m/d') }}</span>
            </div>
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
              </svg>
              

              <span>{{ $data->auth }}</span>
            </div>
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
                <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8m0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0M4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0"/>
              </svg>
              
          

              <span>{{ $data->cat1 }}</span>
            </div>
         
          </div>
        </section>

        <section>
          <h2>مقدمه</h2>
          <p>
            {{ $data->intro }}
          

          </p>
          <figure>
            <img
              src="http://192.168.1.134:8000/storage/{{$data->img1}}"
              alt="{{$data->alt1}}"
            />
            <figcaption> {{ $data->alt1 }}</figcaption>
          </figure>
        </section>
        <section>
          <h2>مقدمه</h2>
          <p>
            {{ $data->intro }}
          

          </p>
          <figure>
            <img
              src="http://192.168.1.134:8000/storage/{{$data->img1}}"
              alt="{{$data->alt1}}"
            />
            <figcaption> {{ $data->alt1 }}</figcaption>
          </figure>
        </section>
        <section>
          <h2>{{ $data->titr1 }}</h2>
          <p>
            {{ $data->par1 }}
          

          </p>
          <figure>
            <img
              src="http://192.168.1.134:8000/storage/{{$data->img2}}"
              alt="{{$data->alt2}}"
            />
            <figcaption> {{ $data->alt2 }}</figcaption>
          </figure>
        </section>
        <section>
          <h2>{{$data->titr2}}</h2>
          <p>
            {{ $data->par2 }}
          

          </p>
          <figure>
            <img
              src="http://192.168.1.134:8000/storage/{{$data->img3}}"
              alt="{{$data->alt3}}"
            />
            <figcaption> {{ $data->alt3 }}</figcaption>
          </figure>
        </section>
        <section>
          <h2>{{$data->titr3}}</h2>
          <p>
            {{ $data->par3 }}
          

          </p>
          <figure>
            <img
              src="http://192.168.1.134:8000/storage/{{$data->img4}}"
              alt="{{$data->alt4}}"
            />
            <figcaption> {{ $data->alt4 }}</figcaption>
          </figure>
        </section>
        <section>
          <h2>{{ $data->titr4 }}</h2>
          <p>
            {{ $data->par4 }}
          

          </p>
          <figure>
            <img
              src="http://192.168.1.134:8000/storage/{{$data->img5}}"
              alt="{{$data->alt5}}"
            />
            <figcaption> {{ $data->alt5 }}</figcaption>
          </figure>
        </section>
        <section>
          <h2>{{ $data->titr5 }}</h2>
          <p>
            {{ $data->par5 }}
          

          </p>
          <figure>
            <img
              src="http://192.168.1.134:8000/storage/{{$data->img6}}"
              alt="{{$data->alt6}}"
            />
            <figcaption> {{ $data->alt6 }}</figcaption>
          </figure>
        </section>
        <section>
          <h2>{{ $data->titr6 }}</h2>
          <p>
            {{ $data->par6 }}
          

          </p>
          <figure>
            <img
              src="http://192.168.1.134:8000/storage/{{$data->img7}}"
              alt="{{$data->alt7}}"
            />
            <figcaption> {{ $data->alt7 }}</figcaption>
          </figure>
        </section>
        <section>
          <h2>{{ $data->titr7 }}</h2>
          <p>
            {{ $data->par7 }}
          

          </p>
          <figure>
            <img
              src="http://192.168.1.134:8000/storage/{{$data->img8}}"
              alt="{{$data->alt8}}"
            />
            <figcaption> {{ $data->alt8 }}</figcaption>
          </figure>
        </section>
        <section>
          <h2>{{ $data->titr8 }}</h2>
          <p>
            {{ $data->par8 }}
          

          </p>
          <figure>
            <img
              src="http://192.168.1.134:8000/storage/{{$data->img9}}"
              alt="{{$data->alt9}}"
            />
            <figcaption> {{ $data->alt9 }}</figcaption>
          </figure>
        </section>
        <section>
          <h2>{{ $data->titr9 }}</h2>
          <p>
            {{ $data->par9 }}
          

          </p>
          <figure>
            <img
              src="http://192.168.1.134:8000/storage/{{$data->img10}}"
              alt="{{$data->alt10}}"
            />
            <figcaption> {{ $data->alt10 }}</figcaption>
          </figure>
        </section>
        <section>
          <h2>{{ $data->titr10 }}</h2>
          <p>
            {{ $data->par10 }}
          

          </p>
      
        </section>
        

      </article>
    </main>
    <div class="d-lg-none d-inline" style="margin-right: 30px">
      <div>
        <svg
          style="
            position: relative;
            bottom: 10px;
            right: 4px;
            color: #0053ff;
          "
          xmlns="http://www.w3.org/2000/svg"
          width="30"
          height="30"
          fill="currentColor"
          class="bi bi-chat-quote-fill"
          viewBox="0 0 16 16"
        >
          <path
            d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M7.194 6.766a1.7 1.7 0 0 0-.227-.272 1.5 1.5 0 0 0-.469-.324l-.008-.004A1.8 1.8 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.5 2.5 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.5 2.5 0 0 0-.228-.4 1.7 1.7 0 0 0-.227-.273 1.5 1.5 0 0 0-.469-.324l-.008-.004A1.8 1.8 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z"
          />
        </svg>
        <span>جدیدترین مقالات</span>
      </div>
      <div class="  l_bar">
        @foreach ($recentPosts as $rp )
        <div>
          <img
            src="http://192.168.1.134:8000/storage/{{$rp->img1}}"
         
            style="width: 50px; height: 50px; border-radius: 6px"
          />
          <a href="#" style="font-size: 13px"
            >  {{$rp->title}} </a
          >
          <div
            style="
              display: flex;
              flex-direction: row;
              justify-content: space-between;
            "
          >
            <span></span>
            <a href="192.168.1.134/weblog/{{$rp->title}}" style="font-size: 10px">ادامه مطلب</a>
          </div>
        </div>
          
        @endforeach
     
   
      </div>
      <div style="margin-top: 10px">
        <svg
          style="
            position: relative;
            bottom: 10px;
            right: 4px;
            color: #0053ff;
          "
          xmlns="http://www.w3.org/2000/svg"
          width="30"
          height="30"
          fill="currentColor"
          class="bi bi-chat-heart-fill"
          viewBox="0 0 16 16"
        >
          <path
            d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9 9 0 0 0 8 15m0-9.007c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132"
          />
        </svg>
        <span>بامادرارتباط باشد</span>
      </div>
      <div>
        <div style="width: 100%">
          <div
            style="
              display: flex;
              align-items: center;
              justify-content: space-between;
              background-image: linear-gradient(
                115deg,
                #ff3287 10%,
                #854cf8 100%
              );
              padding: 10px;
              border-radius: 10px;
              border: 1px solid #0053ff;
            "
          >
            <div>
              <svg
                style="color: white"
                xmlns="http://www.w3.org/2000/svg"
                width="14"
                height="14"
                fill="currentColor"
                class="bi bi-instagram"
                viewBox="0 0 16 16"
              >
                <path
                  d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
                />
              </svg>
              <span style="font-size: 12px; color: white"
                >اینستاگرام+78k</span
              >
            </div>
            <div>
              <a href="#" style="font-size: 12px; color: white"
                >دنبال کردن+</a
              >
            </div>
          </div>
          <div
            style="
              margin-top: 5px;
              display: flex;
              align-items: center;
              justify-content: space-between;
              background-image: linear-gradient(
                -115deg,
                #29c451 10%,
                #30dd70 100%
              );
              padding: 10px;
              border-radius: 10px;
              border: 1px solid #0053ff;
            "
          >
            <div>
              <svg
                style="color: white"
                xmlns="http://www.w3.org/2000/svg"
                width="14"
                height="14"
                fill="currentColor"
                class="bi bi-whatsapp"
                viewBox="0 0 16 16"
              >
                <path
                  d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"
                />
              </svg>
              <span style="font-size: 12px; color: white"
                >اینستاگرام+78k</span
              >
            </div>
            <div>
              <a href="#" style="font-size: 12px; color: white"
                >دنبال کردن+</a
              >
            </div>
          </div>
          <div
            style="
              margin-top: 5px;
              display: flex;
              align-items: center;
              justify-content: space-between;
              background-image: linear-gradient(
                -115deg,
                #34a5e2 10%,
                #40cfec 100%
              );
              padding: 10px;
              border-radius: 10px;
              border: 1px solid #0053ff;
            "
          >
            <div>
              <svg
                style="color: white"
                xmlns="http://www.w3.org/2000/svg"
                width="14"
                height="14"
                fill="currentColor"
                class="bi bi-telegram"
                viewBox="0 0 16 16"
              >
                <path
                  d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09"
                />
              </svg>
              <span style="font-size: 12px; color: white"
                >اینستاگرام+78k</span
              >
            </div>
            <div>
              <a href="#" style="font-size: 12px; color: white"
                >دنبال کردن+</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
   
  </div>
  <div class="d-lg-inline d-none" style="margin-right: 30px">
    <div>
      <svg
        style="
          position: relative;
          bottom: 10px;
          right: 4px;
          color: #0053ff;
        "
        xmlns="http://www.w3.org/2000/svg"
        width="30"
        height="30"
        fill="currentColor"
        class="bi bi-chat-quote-fill"
        viewBox="0 0 16 16"
      >
        <path
          d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M7.194 6.766a1.7 1.7 0 0 0-.227-.272 1.5 1.5 0 0 0-.469-.324l-.008-.004A1.8 1.8 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.5 2.5 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.5 2.5 0 0 0-.228-.4 1.7 1.7 0 0 0-.227-.273 1.5 1.5 0 0 0-.469-.324l-.008-.004A1.8 1.8 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z"
        />
      </svg>
      <span>جدیدترین مقالات</span>
    </div>
    <div class="  l_bar">
      @foreach ($recentPosts as $rp )
      <div>
        <img
          src="http://192.168.1.134:8000/storage/{{$rp->img1}}"
       
          style="width: 50px; height: 50px; border-radius: 6px"
        />
        <a href="#" style="font-size: 13px"
          >  {{$rp->title}} </a
        >
        <div
          style="
            display: flex;
            flex-direction: row;
            justify-content: space-between;
          "
        >
          <span></span>
          <a href="/weblog/{{$rp->title}}" style="font-size: 10px">ادامه مطلب</a>
        </div>
      </div>
        
      @endforeach
   
 
    </div>
    <div style="margin-top: 10px">
      <svg
        style="
          position: relative;
          bottom: 10px;
          right: 4px;
          color: #0053ff;
        "
        xmlns="http://www.w3.org/2000/svg"
        width="30"
        height="30"
        fill="currentColor"
        class="bi bi-chat-heart-fill"
        viewBox="0 0 16 16"
      >
        <path
          d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9 9 0 0 0 8 15m0-9.007c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132"
        />
      </svg>
      <span>بامادرارتباط باشد</span>
    </div>
    <div>
      <div style="width: 100%">
        <div
          style="
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-image: linear-gradient(
              115deg,
              #ff3287 10%,
              #854cf8 100%
            );
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #0053ff;
          "
        >
          <div>
            <svg
              style="color: white"
              xmlns="http://www.w3.org/2000/svg"
              width="14"
              height="14"
              fill="currentColor"
              class="bi bi-instagram"
              viewBox="0 0 16 16"
            >
              <path
                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
              />
            </svg>
            <span style="font-size: 12px; color: white"
              >اینستاگرام+78k</span
            >
          </div>
          <div>
            <a href="#" style="font-size: 12px; color: white"
              >دنبال کردن+</a
            >
          </div>
        </div>
        <div
          style="
            margin-top: 5px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-image: linear-gradient(
              -115deg,
              #29c451 10%,
              #30dd70 100%
            );
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #0053ff;
          "
        >
          <div>
            <svg
              style="color: white"
              xmlns="http://www.w3.org/2000/svg"
              width="14"
              height="14"
              fill="currentColor"
              class="bi bi-whatsapp"
              viewBox="0 0 16 16"
            >
              <path
                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"
              />
            </svg>
            <span style="font-size: 12px; color: white"
              >اینستاگرام+78k</span
            >
          </div>
          <div>
            <a href="#" style="font-size: 12px; color: white"
              >دنبال کردن+</a
            >
          </div>
        </div>
        <div
          style="
            margin-top: 5px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-image: linear-gradient(
              -115deg,
              #34a5e2 10%,
              #40cfec 100%
            );
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #0053ff;
          "
        >
          <div>
            <svg
              style="color: white"
              xmlns="http://www.w3.org/2000/svg"
              width="14"
              height="14"
              fill="currentColor"
              class="bi bi-telegram"
              viewBox="0 0 16 16"
            >
              <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09"
              />
            </svg>
            <span style="font-size: 12px; color: white"
              >اینستاگرام+78k</span
            >
          </div>
          <div>
            <a href="#" style="font-size: 12px; color: white"
              >دنبال کردن+</a
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
 
<section class="container-xxl" style="margin-top: 60px">
<div
  style="
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
  "
>

  @if (Auth::check())
  <div class="container mt-5">  
    <h2>ثبت نظر</h2>  
    <form id="commentForm" method="POST" action="http://192.168.1.134:8000/weblog/{{$data->title}}" >  
        @csrf
        <div class="form-group">  
            <label for="name">نام:</label>  
            <input type="text" class="form-control" id="name"  name="name" placeholder="نام خود را وارد کنید" required>  
        </div>   
        <div class="form-group">  
            <label for="comment">نظر:</label>  
            <textarea class="form-control" id="comment" rows="4" name="comment" placeholder="نظر خود را بنویسید" required></textarea>  
        </div>  
        <button type="submit" class="btn btn-primary">ارسال نظر</button>  
    </form>  
  
    <h3 class="mt-5">نظرات</h3>  
  
  </div> 
   
   <div class="container mt-5">  
     <div class="emotion">  
         <h4>حس من: 😊</h4> <!-- حس کاربر -->  
     </div>  

     @foreach ($comment_n as $c )
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
     @foreach ($comment_an as $c )
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

</section>
<style>  
  .l_bar {  
    position: relative; /* یا absolute بسته به نیاز */  
    background-color: white; /* برای بهتر دیده شدن در فیکس */  
    transition: top 0.3s; /* برای انیمیشن نرم */  
  }  

  .fixed {  
    position: fixed;  
    top: 10px; /* فاصله از بالای پنجره */  
    left: 10px; /* فاصله از سمت چپ (می‌توانید تغییر دهید) */  
    width: 200px; /* عرض ثابت */  
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* سایه برای زیبایی */  
  }  
</style>  

<script>  
  window.onscroll = function() {  
    var lBar = document.querySelector('.l_bar');  
    var sticky = lBar.offsetTop; // موقعیت اصلی لایه  

    // وقتی کاربر به پایین صفحه میره  
    if (window.pageYOffset > sticky) {  
      lBar.classList.add("fixed");  
    } else {  
      lBar.classList.remove("fixed");  
    }  

    // اگر بخواهید که لایه فقط تا یک حد خاص پایین‌تر قفل باشد  
    var bottomLimit = 500; // حداکثر میزان اسکرول تا فیکس شود  
    if (window.pageYOffset > bottomLimit) {  
      lBar.style.position = 'absolute';  
      lBar.style.top = bottomLimit + 'px';  
    } else {  
      lBar.style.position = 'fixed';  
      lBar.style.top = '10px';  
    }  
  };  
</script>
@endsection

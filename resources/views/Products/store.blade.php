@extends('Base.base')


@section('title',"فروشگاه")
@section('content')
<div class="container-xxl" style="margin-top: 100px;"  >

  
  <div class="filter_nav" style="position: fixed; width: fit-content; height: fit-content; right:200% ;bottom:200px;" id="filter_nav">
    <form action="http://192.168.1.134:8000/product" method="GET"> <!-- فرض بر این است که آدرس فیلتر درخواست GET است -->
        
        <div>
            <p>
                <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                    <strong style="color: black; margin: 0 0 15px;">دسته بندی محصولات</strong>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1"/>
                    </svg>
                    <hr>
                </button>
            </p>
            <div class="collapse" id="collapseExample1">
                <div class="card card-body" style="border: 0;">
                    <ul class="filter_cat">
                        @foreach ($cat as $c )
                         <li><input type="checkbox" name="category[]" value="{{ $c->cat_name }}" id="category1"><label for="category1">{{ $c->cat_name }}</label></li>

                          
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div>
            <p>
                <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                    <strong style="border-bottom: 2px black;">فیلتر براساس قیمت:</strong>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1"/>
                    </svg>
                    <hr>
                </button>
            </p>
            <div class="collapse" id="collapseExample2">
                <div class="card card-body" style="border: 0;">
                    <!-- ولوم حداقل قیمت -->
                    <label for="minPrice" class="form-label">حداقل قیمت: <span id="minPriceValue">0</span> تومان</label>
                    <input type="range" class="form-range" name="min_price" id="minPrice" min="0" max="10000000" value="0" oninput="document.getElementById('minPriceValue').textContent = this.value" />

                    <!-- ولوم حداکثر قیمت -->
                    <label for="maxPrice" class="form-label">حداکثر قیمت: <span id="maxPriceValue">10000000</span> تومان</label>
                    <input type="range" class="form-range" name="max_price" id="maxPrice" min="0" max="10000000" value="10000000" oninput="document.getElementById('maxPriceValue').textContent = this.value" />
                </div>
            </div>
        </div>

        <!-- دکمه فیلتر -->
        <div>
            <button type="submit" class="btn btn-primary">فیلتر</button>
        </div>

    </form>
</div>


    <div class="container-fluid s_item s_item_se" style="margin-top: 100px;">
      <div class="container-fluid">
        <div style="display: flex; justify-content: space-between; align-items: center;">
          <div class="d-flex flex-row">
            <div id="btnFullWidth" style="cursor: pointer">
              <svg  xmlns="http://www.w3.org/2000/svg" width="40" height="40" style="cursor: pointer;"  fill="currentColor" class="bi1 bi-list-task" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5zM3 3H2v1h1z"/>
                <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1z"/>
                <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5zM2 7h1v1H2zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm1 .5H2v1h1z"/>
              </svg>

            </div>
            <div id="btnDefaultWidth"  style="cursor: pointer">
              <svg  xmlns="http://www.w3.org/2000/svg" style="margin-right: 20px;" width="40" height="40" fill="currentColor" class="bi1 bi-columns-gap" viewBox="0 0 16 16">
                <path d="M6 1v3H1V1zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1zm14 12v3h-5v-3zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM6 8v7H1V8zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1zm14-6v7h-5V1zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1z"/>
              </svg>

            </div>
          
           
          </div>
          @if ($name)
            <h1>نتایج جستجو برای "{{$name}}"</h1>
            
          @else
           <h1 class="h1_serch" >فروشگاه</h1>
            
          @endif
          
          <div >
               <button class="a_bt1 filter_btn" style="padding: 5px; background-color: #007aff; border-radius: 50px; border: 0; box-shadow: 1px 5px 5px 1px #222;" onclick="filter()"> 
                   <span>فیلتر</span>
                   <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-sort-up" viewBox="0 0 16 16">
                    <path d="M3.5 12.5a.5.5 0 0 1-1 0V3.707L1.354 4.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.5.5 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L3.5 3.707zm3.5-9a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5M7.5 6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z"/>
                  </svg>
               </button>
          </div>


        </div>
        <div id="productRow" class="row top" style="margin-top: 70px;">
            @foreach ($data as $d )
            
            <div class="col-4 top_items top_items_se" id="p1" style="margin:5px; background-color: white;padding:10px; border-radius:50px; border:1px solid rgb(6, 141, 194);">
                <a href="http://192.168.1.134:8000/product/{{ $d->title }}">
                 <div class="d-flex align-items-center flex-column">
                   <img src="http://192.168.1.134:8000/storage/{{ $d->img }}" alt="" width="250px" height="250px" class="img-fluid" style="border-radius: 50px">
                   <br/>
                   <span style="font-size: 9px; font-weight: bold; color: #222;">{{ $d->cat4 }}/{{ $d->cat3 }}/{{$d->cat2}} /{{$d->cat1}}</span>
                   <h2><a href="">{{ $d->title }}</a></h2>
                   <div class="d-flex flex-row justify-content-between" style="width: 90%">
                      <div class="d-flex flex-column" >
                          <span style="font-size: 13px;">شروع قیمت از:</span>
                          @if ($d->is_offer)
                           <del style="font-size: 17px; color:rgb(0 104 200); font-weight: bold;">{{ $d->price }}</del>
                           <span style="font-size: 17px; color:rgb(0 104 200); font-weight: bold;">{{ $d->is_offer_price }}</span>


                              
                          @else
                          <span style="font-size: 17px; color:rgb(0 104 200); font-weight: bold;">{{ $d->price }}</span>



                              
                          @endif
                      </div>
                      <div class="d-flex justify-content-between" style="color:wheat; font-size: 17px; background-color: rgb(0 104 200); border: 3px solid ddd; border-radius: 50%; height: fit-content; width: fit-content; padding: 6px;     box-shadow: 0 0 0 3px #2ea2cc4d; cursor: pointer; margin-top: 15px;">
                       <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                         <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                         <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                       </svg>
                      </div>
                   </div>  
   
                 </div>
                </a>
               
                </div>
                
                
            @endforeach
      

          
           
        </div>
         
    </div>
    </div>
    <br>
    <br>
    <br>
    <br>

</div>
<script>
  // گرفتن دکمه‌ها
  const btnFullWidth = document.getElementById('btnFullWidth');
  const btnDefaultWidth = document.getElementById('btnDefaultWidth');
  
  // گرفتن ردیف محصولات
  const productRow = document.getElementById('productRow');
  
  // اضافه کردن رویداد به دکمه‌ی نمایش تمام عرض
  btnFullWidth.addEventListener('click', function() {
      console.log("A");
      
      // تغییر دادن تمام کلاس‌ها به col-12
      const cols = productRow.getElementsByClassName('col');
      for (let col of cols) {
          col.classList.remove('col');
          col.classList.add('col-12');
      }
  });

  // اضافه کردن رویداد به دکمه‌ی نمایش عرض پیش‌فرض
  btnDefaultWidth.addEventListener('click', function() {
      // تغییر دادن تمام کلاس‌ها به col-4 (عرض پیش‌فرض)
      const cols = productRow.getElementsByClassName('col-12');
      for (let col of cols) {
          col.classList.remove('col-12');
          col.classList.add('col');
      }
  });
</script>


@endsection
@extends('Base.base')

@section('title','تصویه حساب')


@section('content')
<div class="container-xxl list_data" >
    <div class="container mt-5 form_order" >
      <h2 class="mb-4 text-center">جزئیات صورت حساب</h2>
      <form action="http://192.168.1.134:8000/payment/addr" method="POST">  
        @csrf  
        <div class="mb-3">  
            <label for="customerName" class="form-label">نام مشتری</label>  
            <input type="text" name="name" class="form-control" id="customerName" placeholder="نام مشتری را وارد کنید" value="{{ Auth::user()->phone_number }}" disabled>   
        </div>  
    
        <!-- Address Section -->  
        <div class="mb-3">  
            <label for="postalCode" class="form-label">کد پستی</label>  
            <input type="text" class="form-control" name="addr" id="postalCode" placeholder="کد پستی" required value="{{ $add ? $add->post_id : '' }}">  
            <div id="postal-error" style="color: red; display: none;">کد پستی باید 16 رقم باشد.</div>  
        </div>  
    
        <div class="mb-3">  
            <label for="notes" class="form-label">نشانی گیرنده</label>  
            <textarea class="form-control" id="notes" rows="8" name="post_id" placeholder="نشانی گیرنده" required>{{ $add ? $add->address : '' }}</textarea>  
            <div id="address-error" style="color: red; display: none;">لطفاً نشانی گیرنده را وارد کنید.</div>  
        </div>  
    
        <button type="submit" id="submit-btn" class="btn btn-danger" style="background-color: #007aff; border: 0;" disabled>اعمال</button>  
    </form>  
    
    <script>  
        const postalCodeInput = document.getElementById('postalCode');  
        const addressInput = document.getElementById('notes');  
        const submitBtn = document.getElementById('submit-btn');  
        const postalError = document.getElementById('postal-error');  
        const addressError = document.getElementById('address-error');  
    
        function validateForm() {  
            const postalCodeValue = postalCodeInput.value;  
            const addressValue = addressInput.value;  
    
            // Validate postal code for length of 16  
            if (postalCodeValue.length !== 16) {  
                postalError.style.display = 'block';  
                submitBtn.disabled = true;  
            } else {  
                postalError.style.display = 'none';  
            }  
    
            // Validate address  
            if (!addressValue.trim()) {  
                addressError.style.display = 'block';  
                submitBtn.disabled = true;  
            } else {  
                addressError.style.display = 'none';  
            }  
    
            // Enable the submit button only if both validations pass  
            if (postalCodeValue.length === 16 && addressValue.trim()) {  
                submitBtn.disabled = false;  
            }  
        }  
    
        postalCodeInput.addEventListener('input', validateForm);  
        addressInput.addEventListener('input', validateForm);  
    </script>
    
   
  </div>
  <div >
      <div class="orders" >
       <div style="font-weight: bolder;">سفارش شما</div>
       <hr>
       <div style="display: flex; justify-content: space-between;">
           <span>محصول</span>
           <span> تعداد</span>
       </div>
       <hr>
       <div style="display: flex; justify-content: space-between; margin-top: 20px;"> 
          @foreach ($data as $d )
          <div style="display: flex; flex-direction: row;">
            <img src="/storage/{{ $d->img }}" alt="" style="width: 50px; height: 50px;">
            <span>{{$d->name}} 
            </span>
        </div>
        <div>
            <span style="font-weight: bold; color:#007aff;padding:5px">تعداد:{{ $d->count }}</span>
        </div>
            
          @endforeach
      
          
        
       </div>
       <hr>
       <div style="display: flex; justify-content: space-between;">
          <div>
              جمع جز
          </div>
          <div style="font-weight: bolder;" >
              {{ $price }}تومان
          </div>
      </div>
      <hr>
      <div>
          <div style="font-weight: bold;">
              حمل و نقل
          </div>
          <div>
              
              <input type="radio" value="" name="iran_post">
              <label for="iran_post">پست ایران</label>
          </div>
          <hr>
          <div class="d-flx flex-row align-items-center">
            <form action="{{route('payingPost')}}" method="post">
              @csrf
              <a class="btn btn-danger" href="http://192.168.1.134:8000/orders/paying/delete">لغوسفارش</a>
              <button class="btn btn-danger" style="background-color: #007aff; border: #007aff;" type="submit">انتقال به درگاه پرداخت</button>

            
            </form>
            

          </div>
          
      </div>
      </div>



  </div>

  </div> 


  <style> 
         .list_data{
          display: flex ; flex-direction: row;
        

         }
      
         .orders{
           margin: 20px;
           margin-top: 100px;

           border: 1px solid #007aff; padding: 10px; border-radius: 10px; width: fit-content; height: fit-content;
         }  
         .form_order{
          float: right; width: 70%; margin-right: 10px;
         }   
          @media only screen and (max-width: 1200px) {
             .form_order{
              width: 50%;
             }
          }
          @media only screen and (max-width: 768px) {
             .list_data{
              flex-direction: column;
              width: 100%;
             }
             .form_order{
              width: 100%;
              margin-right: 0;
              float: none;
          
              
             }
             .orders{
              width: 80%;
              margin: 0px;
             }
          }
          @media only screen and (max-width: 600px) {
             .form_order{
              float: none;
              width: 100%;
             }
             .orders{
              width: 100%; 
              margin-left: 10px;
              margin-right: 10px;
              
             }
          }
  
  </style>


@endsection
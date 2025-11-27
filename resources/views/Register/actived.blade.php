@extends('Base.base')

@section('title', 'اعتبارسنجی کد')

@section('content')
<section class="container-xxl" style="display: flex; align-items: center; justify-content: center;">
    <form action="{{route('ActivatedRegisterpost')}}" method="POST">
      @csrf
      <div class="register_div">
        <div style="margin-top: 50px;">
            <span>کد تایید:</span>
        </div>
        <div style="margin-top: 20px; display: flex; gap: 10px; justify-content: center;">
            @for ($i = 1; $i <= 5; $i++)
            <input type="text" name="in{{$i}}"  class="form-control text-center" maxlength="1" id="code-{{ $i }}" style="width: 50px; height: 50px; font-size: 24px;" >
            @endfor
        </div>

        <div style="margin-top: 20px;">
            <button id="submit-btn" type="submit" class="btn btn-danger" style="background-color: #0053FF;border:#0053FF;" >تایید</button>
        </div>
        <div>
          <ul>
            <li>
              {{ $e_msg }}
            </li>
          </ul>
        </div>

        <div id="timer" style="margin-top: 20px; font-size: 18px; color:#0053FF; font-size:10px">
            زمان باقی‌مانده: 
            <span id="time-remaining" style="font-size:10px color:red;"></span>
        </div>

        <div id="resend-section" style="margin-top: 20px; display: none;">
            <a id="resend-btn" href="{{route('UserRegisterget')}}" >ارسال مجدد</a>
        </div>
    </div>

    </form>
  

</section>
<br>
<br>
<br>
<script>  
  document.addEventListener('DOMContentLoaded', function() {  
      let timeRemaining = 100; // 5 minutes in seconds  
      const timerDisplay = document.getElementById('time-remaining');  
      const resendSection = document.getElementById('resend-section');  
      const submitButton = document.getElementById('submit-btn');  

      const timerInterval = setInterval(() => {  
          if (timeRemaining <= 0) {  
              clearInterval(timerInterval);  
              timerDisplay.textContent = "00:00"; // Display 00:00 when time is up  
              resendSection.style.display = 'block'; // Show resend button  
              submitButton.disabled = true; // Disable the submit button  
              return;  
          }  

          const minutes = Math.floor(timeRemaining / 60);  
          const seconds = timeRemaining % 60;  
          timerDisplay.textContent = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;  
          timeRemaining--;  
      }, 1000);  
  });  
</script>
@endsection

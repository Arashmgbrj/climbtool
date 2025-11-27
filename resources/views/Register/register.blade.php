@extends('Base.base')

@section('title','ورود')

@section('content')
<section class="container-xxl" style="display: flex; align-items: center; justify-content: center;">
    <form action="{{route('UserRegisterpost')}}" class="d-flex justify-content-center" method="POST" style="width: 100%;">
        @csrf
        <div class="register_div">
            <div style="margin-top: 50px;">
                <span>شماره تلفن:</span>
            </div>
            <div style="margin-top: 50px;">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="r_inp" name="phone_number" placeholder="شماره تلفن" aria-label="Username" aria-describedby="basic-addon1">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">+98</span>
                    </div>
                </div>
            </div>
            <div style="cursor: pointer; margin-top: 50px; display: flex; justify-content: space-between; align-items: center; width: 400px;">
                <div style="display: flex; flex-direction: column; align-items: center; flex-direction: row;">
                    <div class="form-check" style="cursor: pointer;">
                        <input class="form-check-input" type="checkbox" id="flexCheckDefault" style="direction: rtl;">
                    </div>
                    <span>پذیزش قوانین</span>
                    <ul>
                        <li id="error-msg" style="position: relative; bottom:50px; color:red; display:none;">شماره تلفن باید دقیقاً 10 رقم باشد</li>
                    </ul>
                </div>
            </div>
            <div style="margin-top: 50px;">
                <button type="submit" id="submit-btn" class="btn btn-danger" disabled style="cursor: pointer; background-color:#0053FF;color:white;border:0px;width:200px;">ورود</button>
            </div>
        </div>
    </form>
</section>
<br>
<br>
<br>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const phoneInput = document.getElementById('r_inp');
        const checkbox = document.getElementById('flexCheckDefault');
        const submitButton = document.getElementById('submit-btn');
        const errorMsg = document.getElementById('error-msg');

        function validate() {
            const phoneNumber = phoneInput.value;
            const isChecked = checkbox.checked;

            // اعتبارسنجی شماره تلفن (دقیقاً 10 رقم)
            if (phoneNumber.length !== 10) {
                errorMsg.style.display = 'block'; // نمایش پیام خطا
                submitButton.disabled = true; // غیرفعال کردن دکمه
                return;
            } else {
                errorMsg.style.display = 'none'; // مخفی کردن پیام خطا
            }

            // بررسی چک‌باکس
            if (isChecked) {
                submitButton.disabled = false; // فعال کردن دکمه
            } else {
                submitButton.disabled = true; // غیرفعال کردن دکمه
            }
        }

        // رویدادهای ورودی
        phoneInput.addEventListener('input', validate);
        checkbox.addEventListener('change', validate);
    });
</script>
@endsection

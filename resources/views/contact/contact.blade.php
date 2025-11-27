@extends('Base.base')



@section('title','تماس با ما')



@section('content')

	<!--====================form======================-->
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="http://192.168.1.134:8000/contact-us" method="POST"> 
				@csrf
				<span class="contact100-form-title">
				ارسال پیام
				</span>
				<label class="label-input100" for="first-name">اطلاعات خود را در این قسمت وارد کنید *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="وارد کردن نام الزامی است">
					<input id="first-name" class="input100" type="text" name="name" placeholder="نام" >
					<span class="focus-input100"></span>
				</div>
		
				<label class="label-input100" for="email">  ایمیل خود را در این قسمت وارد کنید *</label>
				<div class="wrap-input100 validate-input" data-validate = "لطفا ایمیل معتبر وارد کنید ">
					<input id="email" class="input100" type="text" name="email" placeholder="eg.example@email.com">
					<span class="focus-input100"></span>
				</div>
		
				<label class="label-input100" for="message">متن پیام *</label>
				<div class="wrap-input100 validate-input" data-validate = "وارد کردن پیام الزامی است">
					<textarea id="message" class="input100" name="message" placeholder="پیام خود را در این قسمت وارد کنید"></textarea>
					<span class="focus-input100"></span>
				</div>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="submit">
						ارسال پیام 
					</button>
				</div>
			</form>
			<div class="contact100-more flex-col-c-m" style="background-image: url('bg-01.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>
					<div class="flex-col size2">
						<span class="txt1 p-b-20 p-r-25">
							آدرس
						</span>
						<span class="txt2 p-r-25">
							شیراز، خیابان زند، کوچه 12 ، پلاک 139، طبقه دوم
						</span>
					</div>
				</div>
				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>
					<div class="flex-col size2">
						<span class="txt1 p-b-20  p-r-25">
							شماره تماس
						</span>
						<span class="txt3 p-r-25">
							07132324546
						</span>
					</div>
				</div>
				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>
					<div class="flex-col size2">
						<span class="txt1 p-b-20 p-r-25">
							ایمیل 
						</span>
						<span class="txt3 p-r-25">
							contact@example.com
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--====================form /======================-->
	<div id="dropDownSelect1"></div>


@endsection



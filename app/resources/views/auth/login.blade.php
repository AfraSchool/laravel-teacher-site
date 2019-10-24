@extends('layouts.auth')
@section('content')
    <div class="container-login100" dir="rtl">
        <div class="wrap-login100">
            <form method="post" class="login100-form validate-form">
                <div id="loginDiv1">
                <span class="login100-form-title p-b-48">
						<img src="{{asset('images/loading.png')}}" width="40%"/>
					</span>
                    <span class="login100-form-title p-b-18">خوش آمدید</span>
                </div>
                <div id="loginSuccess">
                <span class="login100-form-title p-b-48">
						<img src="{{asset('images/success.gif')}}" width="50%"/>
					</span>
                    <span class="login100-form-title p-b-18">موفقیت  آمیز!</span>
                    <span class="login100-form-text p-b-18">لطفا شکیبا باشید...</span>
                </div>
                <div id="loginError">
                <span class="login100-form-title p-b-48">
						<img src="{{asset('images/error.gif')}}" width="30%"/>
					</span>
                    <span class="login100-form-title p-b-18">خطا!</span>
                    <span class="login100-form-text p-b-18" id="errorText">لطفا شکیبا باشید...</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="فرمت ایمیل وارد شده صحیح نمی باشد!">
                    <input class="input100" id="userName"  type="text" name="userName">
                    <span class="focus-input100" id="spnUserName" data-placeholder="پست الکترونیک"> </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="لطفا رمز عبور خود را وارد کنید!">
							<span class="btn-show-pass">
								<i class="zmdi zmdi-eye"></i>
							</span>
                    <input class="input100" id="password" type="password" name="password">
                    <span class="focus-input100" id="spnPassword" data-placeholder="رمز عبور"></span>
                </div>
                <div id="loading">
                <span class="login100-form-title p-b-48">
						<img src="{{asset('images/iconLoading.gif')}}" width="20%"/>
					</span>
                </div>

            </form>
            <div class="container-login100-form-btn">
                <div class="wrap-login100-form-btn">
                    <div class="login100-form-bgbtn"></div>
                    <button class="login100-form-btn" id="loginButton">ورود</button>
                </div>
            </div>


        </div>
        <div id="snackbar"></div>
    </div>
@stop

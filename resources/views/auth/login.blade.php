<!doctype html>
<html lang="en" dir="rtl" data-theme-mode="teal">
<head>
    <title>تسجيل دخول الأدارة</title>
    @include('backend.layout.header')
</head>

<body style="background-image: url({{asset('upload/setting/'.getSetting()->bg)}});background-color: #cccccc;background-size: cover">
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="card-body pt-0">

                        <h3 class="text-center mt-5 mb-4">
                            <a href="{{ route('login') }}" class="d-block auth-logo">
                                <img src="{{asset('upload/setting/'.getSetting()->logo)}}" alt="" height="30" class="auth-logo-dark">
                                <img src="{{asset('upload/setting/'.getSetting()->logo)}}" alt="" height="30" class="auth-logo-light">
                            </a>
                        </h3>

                        <div class="p-3">
                            <h4 class="text-muted font-size-18 mb-1 text-center">مرحباًَ بعودتك مرة أخرى !</h4>
                            <p class="text-muted text-center">برجاء تسجيل الدخول لأستكمال مهامك !</p>
                            <form class="form-horizontal mt-4" action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="username">البريد الألكتروني</label>
                                    <input type="email" name="email" class="form-control" id="username" placeholder="Enter البريد الألكتروني" required>
                                </div>
                                <div class="mb-3">
                                    <label for="user password">كلمة المرور</label>
                                    <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter كلمة المرور">
                                </div>
                                <div class="mb-3 row mt-4">
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customControlInline">
                                            <label class="form-check-label" for="customControlInline">تذكرني
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">تسجيل الدخول</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    © {{date('Y')}} {{getSetting()->name}} <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Comma Code.</span>
                </div>
            </div>
        </div>
    </div>
</div>

@include('backend.layout.script')
</body>
</html>

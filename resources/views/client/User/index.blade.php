@extends('client.layout.master')
@section('master')
<body class="form-membership">

<!-- begin::page loader-->
{{--<div class="page-loader">--}}
{{--    <div class="spinner-border"></div>--}}
{{--</div>--}}
<!-- end::page loader -->

<div class="form-wrapper">

    <!-- logo -->
    <div class="logo">
        <img src="assets/media/image/logo-sm.png" alt="image">
    </div>
    <!-- ./ logo -->

    <h5>ورود</h5>

    <!-- form -->
    <form action="{{route('users.login')}}" method="post">
        @csrf
        <div class="form-group">
            <input type="email" name="email" class="form-control text-left" placeholder="ایمیل" dir="ltr" required autofocus>
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control text-left" placeholder="رمز عبور" dir="ltr" required>
        </div>
        <div class="form-group d-sm-flex justify-content-between text-left mb-4">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" checked id="customCheck1">
                <label class="custom-control-label" for="customCheck1">به خاطر سپاری</label>
            </div>
            <a class="d-block mt-2 mt-sm-0 line-height-28" href="recover-password.html">بازنشانی رمز عبور</a>
        </div>
        <button class="btn btn-primary btn-block">ورود</button>
        <hr>
        <p class="text-muted">با حساب شبکه اجتماعی خود وارد شوید.</p>
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-facebook">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-twitter">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-dribbble">
                    <i class="fa fa-dribbble"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-linkedin">
                    <i class="fa fa-linkedin"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-google">
                    <i class="fa fa-google"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-behance">
                    <i class="fa fa-behance"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-instagram">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
        </ul>
        <hr>
        <p class="text-muted">حسابی ندارید؟</p>
        <a href="{{route('users.create')}}" class="btn btn-outline-light btn-sm">هم اکنون ثبت نام کنید!</a>
    </form>
    <!-- ./ form -->

</div>

<!-- Plugin scripts -->
<script src="/vendors/bundle.js"></script>

<!-- App scripts -->
<script src="/assets/js/app.js"></script>


</body>

@endsection

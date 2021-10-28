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
            <img width="80px" src="{{url('')}}/assets/media/image/logoasra.png" alt="image">
        </div>
        <!-- ./ logo -->
        <h1 class="bg-warning font-italic text-center text-white">Asratrade</h1>

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
            <button class="btn btn-primary btn-block">ورود</button>
            <hr>
            <p class="text-muted">حسابی ندارید؟</p>
            <a href="{{route('users.register')}}" class="btn btn-outline-light btn-sm">هم اکنون ثبت نام کنید!</a>
        </form>
        <!-- ./ form -->

    </div>

    <!-- Plugin scripts -->
    <script src="{{url('')}}/vendors/bundle.js"></script>

    <!-- App scripts -->
    <script src="{{url('')}}/assets/js/app.js"></script>


    </body>

@endsection

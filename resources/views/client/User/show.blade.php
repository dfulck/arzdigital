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

        <h5>بازیابی رمز عبور</h5>

        <!-- form -->
        <form action="{{route('forgot.password')}}" method="post">
            @csrf
            <div class="form-group">
                <input type="email" name="email" class="form-control text-left" placeholder="ایمیل" dir="ltr" required autofocus>
            </div>
            <button type="submit" class="btn btn-primary btn-block">ارسال ایمیل</button>
            <hr>
        </form>
        <!-- ./ form -->

    </div>

    <!-- Plugin scripts -->
    <script src="{{url('')}}/vendors/bundle.js"></script>

    <!-- App scripts -->
    <script src="{{url('')}}/assets/js/app.js"></script>


    </body>

@endsection

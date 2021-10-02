@extends('client.layout.master')
@section('master')

    <body class="form-membership">

    <!-- end::page loader -->

    <div class="form-wrapper">

        <!-- logo -->
        <div class="logo">
            <img src="/assets/media/image/logo-sm.png" alt="image">
        </div>
        <!-- ./ logo -->

        <h5>ایجاد حساب</h5>

        <!-- form -->
        <form action="{{route('users.store')}}" method="post" >
            @csrf
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="نام" required autofocus>
            </div>
            <div class="form-group">
                <input type="text" name="lastname" class="form-control" placeholder="نام خانوادگی" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control text-left" placeholder="ایمیل" dir="ltr" required>
            </div>
            <div class="form-group">
                <input type="text" name="number" class="form-control text-left" placeholder="شماره تلفن" dir="ltr" required>
            </div>
            @if($collection)
            <div hidden class="form-group">
                <label for="collection">دعوت کننده شما به این سایت</label>
                <input id="collection" type="text" class="form-control text-left" name="collection" value="{{$collection}}">
            </div>
            @endif
            <input type="submit" class="btn btn-primary btn-block" value="ثبت نام">
        </form>
        <hr>
        <p class="text-muted">حساب کاربری دارید؟</p>
        <a href="{{route('users.index')}}" class="btn btn-outline-light btn-sm">وارد شوید!</a>
        <!-- ./ form -->

    </div>

    <!-- Plugin scripts -->
    <script src="/vendors/bundle.js"></script>

    <!-- App scripts -->
    <script src="/assets/js/app.js"></script>
    </body>

@endsection

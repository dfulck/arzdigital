@extends('Panel.layout.master')

@section('master')

    <body class="dark">

    @include('Panel.layout.sidebar')

    @include('Panel.layout.navigation')


    <!-- begin::main content -->
    <main class="main-content">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('etsos.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">فرم ایجاد </label>
                                <input name="title" type="text" class="form-control text-left" id="exampleInputEmail1"
                                       aria-describedby="emailHelp" placeholder="اسم شهر مورد نطر را وارد نمایید" dir="ltr">
                                <small id="emailHelp" class="form-text text-muted">بعد از ایجاد شهر میتوانید برای اضافه کردن لیست اتحادیه برای شهر مورد نطر به قسمت مدیریت لیست شهر ها و اضافه کردن اتحادیه مراجعه فرمایید</small>
                            </div>
                            <button type="submit" class="btn btn-primary">افزودن</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- end::main content -->

    <!-- Plugin scripts -->
    @include('Panel.layout.script')
    </body>

@endsection

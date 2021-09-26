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
                    <h6 class="card-title">اضافه کردن سرگروه مطالب</h6>
                    <form action="{{route('leaders.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">نام </label>
                            <input name="title" type="text" class="form-control text-left" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="سرگروه مطالب" dir="ltr">
                            <small id="emailHelp" class="form-text text-muted">مطالب نیازمند سرگروه و دسته بندی هستند در
                                این جا دسته بندی مطالب رو ایجاد و مشخص میکنید
                            </small>
                        </div>
                        <button type="submit" class="btn btn-primary">ارسال</button>
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

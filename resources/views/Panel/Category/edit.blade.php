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
                    <h6 class="card-title">ویرایش کردن {{$category->title}}</h6>
                    <form action="{{route('categories.update',$category)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="exampleInputEmail1">نام دسته بندی</label>
                            <input name="title" value="{{$category->title}}" type="text" class="form-control text-left" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="دسته بندی" dir="ltr">
                            <small id="emailHelp" class="form-text text-muted">این دسته بندی در منوی اصلی قرار میگیرد و میتواند زیر دسته داشته باشد
                            </small>
                        </div>
                        <button type="submit" class="btn btn-primary">ویرایش</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</main>
<!-- end::main content -->

@include('Panel.layout.script')
</body>

@endsection

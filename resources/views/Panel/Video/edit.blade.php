@extends('Panel.layout.master')

@section('master')

<body class="dark">


@include('Panel.layout.sidebar')

@include('Panel.layout.navigation')


<main class="main-content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-body">
                        <h6 class="card-title">ویرایش کردن {{$videocat->title}}</h6>
                        <form action="{{route('videocats.update',$videocat)}}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="exampleFormControlInput1">اسم گالری ویدیو</label>
                                <input type="text" value="{{$videocat->title}}" name="title" class="form-control text-left"
                                       id="exampleFormControlInput1" placeholder="Video Gallery Name" dir="ltr">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-info btn-block" value="edit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@include('Panel.layout.script')

</body>
@endsection

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
                        <h6 class="card-title">ویرایش کردن post</h6>
                        <form action="{{route('posts.update',$post)}}" enctype="multipart/form-data"
                              method="post">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="exampleFormControlInput1">هدر مطلب</label>
                                <input value="{{$post->header}}" type="text" name="header"
                                       class="form-control text-left"
                                       id="exampleFormControlInput1" placeholder="header text" dir="ltr">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">زمان مطالعه</label>
                                <input value="{{$post->TimeRead}}" type="text" name="TimeRead" class="form-control text-left"
                                       id="exampleFormControlInput1" placeholder="header text" dir="ltr">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">مطلب </label>
                                <div class="card">
                                    <div class="card-body">
                                        <textarea name="body" id="editor-demo1">{!! $post->body !!}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <img width="100%" height="400px" src="{{url('/storage/app/'.$post->image)}}" alt="image not found">
                                <label for="exampleFormControlFile1">تصویر مطلب</label>
                                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="edit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Plugin scripts -->
@include('Panel.layout.script')

</body>

@endsection

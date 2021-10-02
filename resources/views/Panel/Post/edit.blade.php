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
                        <form action="{{route('posts.update',$post)}}" enctype="multipart/form-data" method="post">
                            @csrf
                            @method('PATCH')
                            <h1>اضافه کردن مطالب آنالیز </h1>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">هدر مطلب</label>
                                <input type="text" name="part_header" class="form-control text-left"
                                       id="exampleFormControlInput1" placeholder="header text" dir="ltr">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">متن اصلی </label>
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">ویرایشگر کلاسیک</h6>
                                        <textarea name="part_body" id="editor-demo2"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">تصویر مطلب</label>
                                <input type="file" name="part_image" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-block" value="send">
                            </div>
                        </form>
                        @foreach($parts as $part)
                            <div class="card col-md-6">
                                <img src="{{url('/storage/app/'.$part->part_image)}}" class="card-img-top" alt="image">
                                <div class="card-body">
                                    <h6 class="card-title">{{$part->part_header}}</h6>
                                    <p class="card-text">{{$part->part_body}}</p>
                                    <p class="card-text">
                                        <small class="text-muted">{{$part->created_at}}</small>
                                    </p>
                                </div>
                            </div>
                        @endforeach
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

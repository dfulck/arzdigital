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
                        <h6 class="card-title">اضافه کردن مطلب</h6>
                        <form action="{{route('content.leader',$leader)}}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1">هدر مطلب</label>
                                <input type="text" name="header" class="form-control text-left"
                                       id="exampleFormControlInput1" placeholder="header text" dir="ltr">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">مطلب </label>
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">ویرایشگر کلاسیک</h6>
                                        <textarea name="body" id="editor-demo1"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">تصویر مطلب</label>
                                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="send">
                            </div>
                        </form>
                    </div>
                    <br>
                    <br>
                    @foreach($contents as $content)
                        <div class="card-group">
                            <div class="card">
                                <img height="400px" src="{{url('/storage/app/'.$content->image)}}" class="card-img-top"
                                     alt="image">
                                <div class="card-body">
                                    <h6 class="card-title">{{$content->header}}</h6>
                                    <p class="card-text">{!! $content->body !!}</p>
                                    <p class="card-text">
                                        <small class="text-muted">{{$content->created_at}}</small>
                                    </p>
                                </div>
                                <a href="{{route('contents.edit',$content)}}" class="btn btn-success form-control">edit</a>
                                <form class="mt-3" action="{{route('contents.destroy',$content)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger form-control" type="submit" value="delete">
                                </form>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>


@include('Panel.layout.script')

</body>
@endsection

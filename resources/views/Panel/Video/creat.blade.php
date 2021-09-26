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
                        <h6 class="card-title">اضافه کردن ویدیو به {{$videocat->title}}</h6>
                        <form action="{{route('videocats.videos.store',$videocat)}}" enctype="multipart/form-data"
                              method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlFile2">متن ویدیو</label>
                                <input type="text" name="title" class="form-control-file" id="exampleFormControlFile2">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">کاور ویدیو</label>
                                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">ویدیو خود را اپلود کنید</label>
                                <input type="file" name="video" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success btn-block" value="send">
                            </div>
                        </form>
                    </div>
                    <br>
                    <br>
                    @foreach($videos as $video)
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <video style="width: 100%"
                                           id="my-video"
                                           class="video-js"
                                           controls
                                           width="640"
                                           preload="auto"
                                           height="600px"
                                           poster="/{{str_replace('public','storage',$video->image)}}"
                                           data-setup="{}"
                                    >
                                        <source src="/{{str_replace('public','storage',$video->video)}}"
                                                type="video/mp4"/>
                                    </video>
                                    <form class="m-2" enctype="multipart/form-data" action="{{route('videocats.videos.update',[$videocat,$video])}}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-group">
                                            <input type="text" class="form-control"  name="title" style="border: 0" value="{{$video->title}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="ImageVideo">بروزرسانی کاور ویدیو</label>
                                            <input type="file" id="ImageVideo" name="image" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="بروزرسانی" class="form-control">
                                        </div>
                                    </form>
                                    <form class="mt-3" action="{{route('videocats.videos.destroy',[$videocat,$video])}}"
                                          method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input class="btn btn-danger form-control" type="submit" value="delete">
                                    </form>
                                    <hr>
                                </div>
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

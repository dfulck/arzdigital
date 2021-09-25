<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>قالب Nextable - قالب مدیریتی نکستیبل</title>
    <link href="https://vjs.zencdn.net/7.15.4/video-js.css" rel="stylesheet"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/media/image/favicon.png">

    <!-- Theme Color -->
    <meta name="theme-color" content="#5867dd">

    <!-- Plugin styles -->
    <link rel="stylesheet" href="/vendors/bundle.css" type="text/css">

    <!-- Select2 -->
    <link rel="stylesheet" href="/vendors/select2/css/select2.min.css" type="text/css">

    <!-- Range slider -->
    <link rel="stylesheet" href="/vendors/range-slider/css/ion.rangeSlider.min.css" type="text/css">

    <!-- Tagsinput -->
    <link rel="stylesheet" href="/vendors/tagsinput/bootstrap-tagsinput.css" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="/assets/css/app.css" type="text/css">
</head>

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

<script src="https://vjs.zencdn.net/7.15.4/video.min.js"></script>

<script src="/vendors/bundle.js"></script>
<!-- CKEditor -->
<script src="/vendors/ckeditor/ckeditor.js"></script>
<script src="/assets/js/examples/ckeditor.js"></script>

<script src="/assets/js/app.js"></script>

</body>

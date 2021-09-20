<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>قالب Nextable - قالب مدیریتی نکستیبل</title>

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
                                <img width="100%" height="400px" src="/{{str_replace('public','storage',$post->image)}}" alt="image not found">
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
<script src="/vendors/bundle.js"></script>

<!-- CKEditor -->
<script src="/vendors/ckeditor/ckeditor.js"></script>
<script src="/assets/js/examples/ckeditor.js"></script>

<!-- Select2 -->
<script src="/vendors/select2/js/select2.min.js"></script>
<script src="/assets/js/examples/select2.js"></script>

<!-- Range slider -->
<script src="/vendors/range-slider/js/ion.rangeSlider.min.js"></script>
<script src="/assets/js/examples/range-slider.js"></script>

<!-- Input mask -->
<script src="/vendors/input-mask/jquery.mask.js"></script>
<script src="/assets/js/examples/input-mask.js"></script>

<!-- Tagsinput -->
<script src="/vendors/tagsinput/bootstrap-tagsinput.js"></script>
<script src="/assets/js/examples/tagsinput.js"></script>

<!-- App scripts -->
<script src="/assets/js/app.js"></script>

</body>

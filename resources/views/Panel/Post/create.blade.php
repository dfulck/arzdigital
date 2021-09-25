<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arz Digital</title>

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
                        <h6 class="card-title">اضافه کردن مطلب</h6>
                        <form action="{{route('posts.subcategory',$subcategory)}}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1">هدر مطلب</label>
                                <input type="text" name="header" class="form-control text-left"
                                       id="exampleFormControlInput1" placeholder="header text" dir="ltr">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">زمان مطالعه</label>
                                <input type="text" name="TimeRead" class="form-control text-left"
                                       id="exampleFormControlInput1" placeholder="header text" dir="ltr">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">post مطلب </label>
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">ویرایشگر کلاسیک</h6>
                                        <textarea name="body" id="editor-demo1"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="TagInput">برچسب مورد نطر را وارد نمایید </label>
                                <select class="form-control" name="tag" id="TagInput">
                                    @foreach($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->title}}</option>
                                    @endforeach
                                </select>
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
                    @foreach($posts as $post)
                        <div class="card-group">
                            <div class="card">
                                <img height="400px" src="/{{str_replace('public','storage',$post->image)}}" class="card-img-top"
                                     alt="image">
                                <div class="card-body">
                                    <h6 class="card-title">{{$post->header}}</h6>
                                    <p class="card-text">{!! $post->body !!}</p>
                                    <p class="card-text">
                                        <small class="text-muted">{{$post->created_at}}</small>
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted">{{$post->creator}}</small>
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted">{{$post->TimeRead}}</small>
                                    </p>
                                </div>
                                <a href="{{route('posts.edit',$post)}}" class="btn btn-success form-control">edit</a>
                                <form class="mt-3" action="{{route('posts.destroy',$post)}}" method="post">
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


<script src="/vendors/bundle.js"></script>
<!-- CKEditor -->
<script src="/vendors/ckeditor/ckeditor.js"></script>
<script src="/assets/js/examples/ckeditor.js"></script>

<script src="/assets/js/app.js"></script>

</body>

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
                    @foreach($contents as $content)
                        <div class="card-group">
                            <div class="card">
                                <img height="400px" src="/{{str_replace('public','storage',$content->image)}}" class="card-img-top"
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


<script src="/vendors/bundle.js"></script>
<script src="/vendors/dataTable/jquery.dataTables.min.js"></script>
<script src="/vendors/dataTable/dataTables.bootstrap4.min.js"></script>
<script src="/vendors/dataTable/dataTables.responsive.min.js"></script>
<script src="/assets/js/examples/datatable.js"></script>
<!-- CKEditor -->
<script src="/vendors/ckeditor/ckeditor.js"></script>
<script src="/assets/js/examples/ckeditor.js"></script>

<script src="/assets/js/app.js"></script>

</body>

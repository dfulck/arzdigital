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
                        <h6 class="card-title">اضافه کردن مطلب</h6>
                        <form action="{{route('massages.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">پیفام</label>
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">ویرایشگر کلاسیک</h6>
                                        <textarea name="title" id="editor-demo1"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Role">ارسال ایمیل به این گروه از کاربران</label>
                                <select class="js-example-basic-single" multiple name="role[]" id="Role">
                                    @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Check">کاربرانی که ایمیل خود را در سایت وارد کرده اند</label>
                                <input class="form-check" id="Check" type="checkbox" name="WebUser">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success btn-block" value="send">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<script src="/vendors/bundle.js"></script>
<!-- CKEditor -->
<!-- Select2 -->
<script src="/vendors/select2/js/select2.min.js"></script>
<script src="/assets/js/examples/select2.js"></script>

<script src="/vendors/ckeditor/ckeditor.js"></script>
<script src="/assets/js/examples/ckeditor.js"></script>

<script src="/assets/js/app.js"></script>

</body>

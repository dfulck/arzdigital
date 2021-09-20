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

    <!-- App styles -->
    <link rel="stylesheet" href="/assets/css/app.css" type="text/css">
</head>

<body class="dark">

@include('Panel.layout.sidebar')

@include('Panel.layout.navigation')



<!-- begin::main content -->
<main class="main-content">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">ویرایش کردن سرگروه مطالب</h6>
                    <form action="{{route('leaders.update',$leader)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="exampleInputEmail1">نام </label>
                            <input value="{{$leader->title}}" name="title" type="text" class="form-control text-left" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="سرگروه مطالب" dir="ltr">
                            <small id="emailHelp" class="form-text text-muted">مطالب نیازمند سرگروه و دسته بندی هستند در
                                این جا دسته بندی مطالب رو ایجاد و مشخص میکنید
                            </small>
                        </div>
                        <button type="submit" class="btn btn-primary">ارسال</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</main>
<!-- end::main content -->

<!-- Plugin scripts -->
<script src="vendors/bundle.js"></script>

<!-- App scripts -->
<script src="assets/js/app.js"></script>
</body>

</html>

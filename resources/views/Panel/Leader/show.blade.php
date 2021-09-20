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

<!-- begin::header -->
<div class="header">

    <!-- begin::header logo -->
    <div class="header-logo">
        <a href="index.html">
            <img class="large-logo" src="/assets/media/image/logo.png" alt="image">
            <img class="small-logo" src="/assets/media/image/logo-sm.png" alt="image">
            <img class="dark-logo" src="/assets/media/image/logo-dark.png" alt="image">
        </a>
    </div>
    <!-- end::header logo -->

    <!-- begin::header body -->
    <div class="header-body">

        <div class="header-body-left">

            <h3 class="page-title">فرم های پیشرفته</h3>

            <!-- begin::breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">اضافه کردن</a></li>
                    <li class="breadcrumb-item active" aria-current="page">مطلب</li>
                </ol>
            </nav>
            <!-- end::breadcrumb -->

        </div>

        <div class="header-body-right">
            <!-- begin::navbar main body -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="جستجو">
                            <div class="input-group-append">
                                <button class="btn btn-light" type="button">
                                    <i class="ti-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                        <i class="ti-plus"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                        <div class="p-3">
                            <h6 class="font-size-13 m-b-15">دسترسی سریع</h6>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#">
                                        <div
                                            class="d-flex flex-column font-size-13 bg-danger-bright bg-hover pt-3 pb-3 border-radius-1 text-danger text-center mb-3">
                                            <i class="fa fa-sitemap mb-2 font-size-20"></i>
                                            دسته‌بندی ها
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="#">
                                        <div
                                            class="d-flex flex-column font-size-13 bg-info-bright bg-hover pt-3 pb-3 border-radius-1 text-info text-center mb-3">
                                            <i class="ti-game mb-2 font-size-20"></i>
                                            محصولات
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="#">
                                        <div
                                            class="d-flex flex-column font-size-13 bg-warning-bright bg-hover pt-3 pb-3 border-radius-1 text-warning text-center">
                                            <i class="ti-bar-chart-alt mb-2 font-size-20"></i>
                                            گزارشات
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="#">
                                        <div
                                            class="d-flex flex-column font-size-13 bg-secondary-bright bg-hover pt-3 pb-3 border-radius-1 text-secondary text-center">
                                            <i class="fa fa-share mb-2 font-size-20"></i>
                                            سایر
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link nav-link-notify" data-toggle="dropdown">
                        <i class="ti-comment"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                        <div class="p-4 text-center" data-backround-image="assets/media/image/image1.png">
                            <h6 class="m-b-0">پیام ها</h6>
                            <small class="font-size-13 opacity-7 d-inline-block m-t-5">1 پیام خوانده نشده</small>
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                <li>
                                    <a href="#"
                                       class="p-3 list-group-item d-flex align-items-center link-1 hide-show-toggler">
                                        <div>
                                            <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-success rounded-circle">آ</span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 d-flex justify-content-between primary-font">
                                                استیو راجرز
                                                <i title="علامت خوانده نشده" data-toggle="tooltip"
                                                   class="hide-show-toggler-item fa fa-check font-size-13"></i>
                                            </h6>
                                            <span class="text-muted m-r-10 small">08:50 ب.ظ</span>
                                            <span class="text-muted small line-height-24">لورم ایپسوم متن ساختگی</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="p-3 list-group-item d-flex align-items-center link-1 bg-secondary-bright hide-show-toggler">
                                        <div>
                                            <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-primary rounded-circle">ج</span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 d-flex justify-content-between primary-font">
                                                جان اسنو
                                                <i title="علامت خوانده شده" data-toggle="tooltip"
                                                   class="hide-show-toggler-item fa fa-circle-o font-size-13"></i>
                                            </h6>
                                            <span class="text-muted m-r-10 small">10:23 ب.ظ</span>
                                            <span class="text-muted small line-height-24">لورم ایپسوم متن ساختگی</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="p-3 list-group-item d-flex align-items-center link-1 hide-show-toggler">
                                        <div>
                                            <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-danger rounded-circle">ک</span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 d-flex justify-content-between primary-font">
                                                استیو جابز
                                                <i title="علامت خوانده نشده" data-toggle="tooltip"
                                                   class="hide-show-toggler-item fa fa-check font-size-13"></i>
                                            </h6>
                                            <span class="text-muted m-r-10 small">08:50 ب.ظ</span>
                                            <span class="text-muted small line-height-24">لورم ایپسوم متن ساختگی</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="p-3 list-group-item d-flex align-items-center link-1 hide-show-toggler">
                                        <div>
                                            <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-info rounded-circle">ن‌پ</span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 d-flex justify-content-between primary-font">
                                                ناتالی پورتمن
                                                <i title="علامت خوانده نشده" data-toggle="tooltip"
                                                   class="hide-show-toggler-item fa fa-check font-size-13"></i>
                                            </h6>
                                            <span class="text-muted m-r-10 small">20:13 ب.ظ</span>
                                            <span class="text-muted small line-height-24">لورم ایپسوم متن ساختگی</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-3 text-right">
                            <ul class="list-inline small">
                                <li class="list-inline-item">
                                    <a href="#">علامت خوانده شده به همه</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                        <i class="ti-bell"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                        <div class="p-4 text-center" data-backround-image="assets/media/image/image1.png">
                            <h6 class="m-b-0">اعلان ها</h6>
                            <small class="font-size-13 opacity-7">2 اعلان خوانده نشده</small>
                        </div>
                        <div class="p-3">
                            <div class="timeline">
                                <div class="timeline-item">
                                    <div>
                                        <figure class="avatar avatar-state-danger avatar-sm m-r-15 bring-forward">
												<span class="avatar-title bg-info-bright text-info rounded-circle">
													<i class="fa fa-file-text-o font-size-20"></i>
												</span>
                                        </figure>
                                    </div>
                                    <div>
                                        <p class="m-b-5">
                                            <a href="#">استیو جابز</a> یک ضمیمه جدید به تیکت افزود
                                            <a href="#">گزارش باگ نرم افزار</a>
                                        </p>
                                        <small class="text-muted">
                                            <i class="fa fa-clock-o m-r-5"></i> 8 ساعت پیش
                                        </small>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div>
                                        <figure class="avatar avatar-state-danger avatar-sm m-r-15 bring-forward">
												<span
                                                    class="avatar-title bg-warning-bright text-warning rounded-circle">
													<i class="fa fa-money font-size-20"></i>
												</span>
                                        </figure>
                                    </div>
                                    <div>
                                        <p class="m-b-5">
                                            <a href="#">کاترین</a> یک تیکت جدید ثبت کرد
                                            <a href="#">نحوه پرداخت</a>
                                        </p>
                                        <small class="text-muted">
                                            <i class="fa fa-clock-o m-r-5"></i> دیروز
                                        </small>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div>
                                        <figure class="avatar avatar-sm m-r-15 bring-forward">
												<span
                                                    class="avatar-title bg-success-bright text-success rounded-circle">
													<i class="fa fa-dollar font-size-20"></i>
												</span>
                                        </figure>
                                    </div>
                                    <div>
                                        <p class="m-b-5">
                                            <a href="#">کاترین</a> تنظیمات دسته تیکت را تغییر داد
                                            <a href="#">پرداخت و صورتحساب</a>
                                        </p>
                                        <small class="text-muted">
                                            <i class="fa fa-clock-o m-r-5"></i> 1 روز پیش
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 text-right">
                            <ul class="list-inline small">
                                <li class="list-inline-item">
                                    <a href="#">علامت خوانده شده به همه</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link bg-none" data-sidebar-open="#userProfile">
                        <div>
                            <figure class="avatar avatar-state-success avatar-sm">
                                <img src="/assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
                            </figure>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- end::navbar main body -->

            <div class="d-flex align-items-center">
                <!-- begin::navbar navigation toggler -->
                <div class="d-xl-none d-lg-none d-sm-block navigation-toggler">
                    <a href="#">
                        <i class="ti-menu"></i>
                    </a>
                </div>
                <!-- end::navbar navigation toggler -->

                <!-- begin::navbar toggler -->
                <div class="d-xl-none d-lg-none d-sm-block navbar-toggler">
                    <a href="#">
                        <i class="ti-arrow-down"></i>
                    </a>
                </div>
                <!-- end::navbar toggler -->
            </div>
        </div>

    </div>
    <!-- end::header body -->

</div>
<!-- end::header -->
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
                                <div id="editor-demo4" contenteditable="true">
                                    <textarea name="body" id="" class="form-control cke_dialog_ui_input_textarea" >

                                    </textarea>
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
                                <img src="/{{str_replace('public','storage',$content->image)}}" class="card-img-top"
                                     alt="image">
                                <div class="card-body">
                                    <h6 class="card-title">{{$content->header}}</h6>
                                    <div id="editor-demo4" contenteditable="true">
                                    <p class="card-text">{{$content->body}}</p>
                                    </div>
                                    <p class="card-text">
                                        <small class="text-muted">{{$content->created_at}}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>
<!-- CKEditor -->
<script src="/vendors/ckeditor/ckeditor.js"></script>
<script src="/assets/js/examples/ckeditor.js"></script>

<!-- Plugin scripts -->
<script src="/vendors/bundle.js"></script>

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

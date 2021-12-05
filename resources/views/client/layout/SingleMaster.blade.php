<!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ASRA</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/css/uikit.min.css" />

    <!-- vjs CSS -->
    <link href="https://vjs.zencdn.net/7.15.4/video-js.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="{{url('/asesst/style.css')}}">

@yield('css')
    <style>
        .search-terms-header{
            display: none;
        }
    </style>
    <style>
        .user-comment-container {
            width: 100%;
            margin-top: 3rem;
            border-top: 1px solid gainsboro;
            padding: 1rem 0;
        }

        .comment-item {
            display: flex;
            margin-bottom: 2rem;
        }

        .comment-item-image {
            width: 10%;
            display: flex;
            align-items: flex-start;
            justify-content: center;
        }

        .comment-item-info-header span {
            font-size: 12px;
            margin-left: 1rem;
        }

        .comment-item-info-body {
            width: 80%;
        }

        .comment-item-info-body p {
            text-align: justify;
            color: #000;
            font-size: 14px;
            line-height: 2rem;
        }

        .add-new-comment-form-container{
            display: flex;
            align-items: flex-start;
            margin: 1rem 0;
        }
        .add-new-comment-image {
            width: 8%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .add-new-comment-input {
            flex: 1;
        }

        .add-new-comment-input textarea {
            width: 80%;
            height: 150px;
            border: 1px solid gainsboro;
            border-radius: 5px;
            resize: none;
            outline: none;
            display: flex;
            align-items: center;
            overflow: auto;
            padding: .5rem;
        }

        .add-new-comment-container input[type='submit'] {
            background-color: #0095ad;
            margin-bottom: 2rem;
            margin-right: 5.5rem;
            padding: .3rem 2rem;
            background-color: #bdd43c;
            border: none;
            color: #fff;
        }
    </style>
</head>
<body>

<header id="header" role="header">
    <section class="bg-header" style="height: 100px;">
        <article class="container">
            <section class="header-top">
                <div id="nav-icon1" class="hamburger-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="logo-header">
                    <a href="{{url('/')}}">
                        <img src="{{url('/asesst/images/logo.png')}}" alt="asratrade">
                    </a>
                </div>

                <nav class="navbar navbar-header">
                    <ul class="menu-list">
                        @foreach($categories as $category)
                            <li class="menu-item">
                                <a href="">{{$category->title}}</a>
                                <ul class="submenu-list">
                                    @foreach($category->subcategories as $subcategory)
                                        <li class="submenu-item"><a href="{{$subcategory->link}}">{{$subcategory->title}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                            <li class="menu-item">
                                <a>حساب کاربری</a>
                                <ul class="submenu-list">
                                    @if(!auth()->check())
                                        <li class="submenu-item"><a href="{{route('login')}}">ورود</a></li>
                                    @endif
                                    @if(auth()->check())
                                        <li class="submenu-item"><a href="{{route('users.dashboard')}}">پروفایل</a></li>
                                    @endif
                                </ul>
                            </li>
                    </ul>
                </nav>

                <div class="mobile-menu">
                    <div class="menu-close-btn"><span class="material-icons">close</span></div>
                    <ul class="mobile-menu-list">
                        @foreach($categories as $category)
                            <li class="mobile-menu-item">
                                <a href="#">{{$category->title}}</a>
                                <ul class="mobile-submenu-list">
                                    @foreach($category->subcategories as $subcategory)
                                        <li class="mobile-submenu-item"><a href="{{$subcategory->link}}">{{$subcategory->title}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                            <li class="mobile-menu-item">
                                <a>حساب کاربری</a>
                                <ul class="mobile-submenu-list">
                                    @if(!auth()->check())
                                        <li class="mobile-submenu-item"><a href="{{route('login')}}">ورود</a></li>
                                    @endif
                                    @if(auth()->check())
                                        <li class="mobile-submenu-item"><a href="{{route('users.dashboard')}}">پروفایل</a></li>
                                    @endif
                                </ul>
                            </li>
                    </ul>
                </div>

                <div class="left-icons">
                    <ul>
                        <li>
                            <div class="search-header hvr-glow hvr-wobble-skew">
                                <a class="uk-navbar-toggle" href="#search" uk-search-icon uk-toggle>
                                    <i class="fas fa-search"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

            </section>

        </article>
    </section>
</header>

<div id="search" class="uk-modal-full uk-modal" uk-modal>
    <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" uk-height-viewport>
        <button class="uk-modal-close-full" type="button" uk-close></button>
        <form class="uk-search uk-search-large">
            <input class="uk-search-input uk-text-center" type="search" id="search-products" placeholder="Search" autofocus>
        </form>
        <div id="search-show">

        </div>
    </div>
</div>

@yield('master')


<footer class="footer-section">
    <div class="footer-container">
        <div class="footer-logo">
            <!-- <div class="footer-logo-right"></div> -->
            <!-- <div class="footer-logo-left"></div> -->
            <div class="footer-category">
                <div class="footer-category-right">
                    <ul class="footer-category-items">
                        <li class="footer-category-item">
                            {!! $footer1->title !!}
                        </li>
                        <li class="footer-category-item">
                            {!! $footer2->title !!}
                        </li>
                    </ul>
                </div>

                <div class="footer-category-left">
                    <div class="footer-category-left-section3">
                        <span>ثبت نام در خبرنامه</span>
                        <form action="{{route('newsemail')}}" method="post">
                            @csrf
                            <input type="email" name="email">
                            <button type="submit"><span class="material-icons">west</span></button>
                        </form>
                    </div>
                    <div class="footer-category-left-section2">
                        <a href="{{url('').$instagram->link}}"><img src="{{url('/asesst/images/instagram.png')}}"></a>
                        <a href="{{url('').$telegram->link}}"><img src="{{url('/asesst/images/telegram.png')}}"></a>
                        <a href="{{url('').$twitter->link}}"><img src="{{url('/asesst/images/whatsapp.png')}}"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="copy-right">
            <a href="#">طراحی و توسعه توسط شرکت کیان فناوران ویرا</a>
        </div>
    </div>
</footer>
<script>
    window.alert = function() {};
    // or simply
    alert = function() {};
</script>
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit-icons.min.js"></script>

<!-- vjs link -->
<script src="https://vjs.zencdn.net/7.15.4/video.min.js"></script>

<!-- jquery link -->

<script src="{{url('asesst/assest/js/jquery-3.6.0.min.js')}}"></script>

<script>
    $(document).ready(function () {
        $('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function () {
            $(this).toggleClass('open');

            $('.mobile-menu').addClass('show-mobile-menu');
        });

        $('.menu-close-btn').click(function() {
            $('.mobile-menu').removeClass('show-mobile-menu');
        });
    });
</script>
<script>
    $('body').on('keyup','#search-products',function () {
        var serachQuset = $(this).val();
        $.ajax({
            method: 'POST',
            url: '{{route("search.Home")}}',
            dataType: 'json',
            data: {
                '_token':'{{csrf_token()}}',
                serachQuset : serachQuset
            },
            success: function (res) {
                var tableRow = '';
                $('#search-show').html("");
                if(res.length==0){
                    $('#search-show').append('<td>پیدا نشد</td>');
                    return;
                }
                $.each(res , function (index ,value) {
                    tableRow = '<div class="search-box-body"><div class="images-show"> <img width="50" src="/storage/app'+value.image+'" alt="'+value.header+'"></div> <div class="cotent-search-show"><h1>'+value.header+'</h1><a href="/post/show/'+value.id+'" > مشاهده </a></div></div> ';
                    $('#search-show').append(tableRow);
                } );
            }
        });
    });
</script>

@yield('js')
</body>

</html>

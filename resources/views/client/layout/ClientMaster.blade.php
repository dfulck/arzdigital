<!doctype html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ASRA</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/css/uikit.min.css"/>

    <!-- vjs CSS -->
    <link href="https://vjs.zencdn.net/7.15.4/video-js.css" rel="stylesheet"/>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="{{url('/asesst/style.css')}}">
    <style>
        .search-terms-header {
            display: none;
        }
        .information li span{
            color: white !important;
        }
    </style>

    @yield('css')
</head>

<body>

<header id="header" role="header">
    <section class="bg-header">
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
                                <a>{{$category->title}}</a>
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

            <section class="header-main">
                <section class="header-main-detail">
                    <div class="header-main-detail-slider uk-position-relative uk-visible-toggle uk-light"
                         tabindex="-1" uk-slider="sets: true">

                        <ul class="header-main-detail-ul uk-slider-items uk-child-width-2-2 ">
                            <li>
                                <div class="arz-slider-item">
                                    <div class="arz-slider-header">
                                        <div class="arz-slider-header"><img
                                                src="https://nobitex.ir/_nuxt/img/btc.28cfbb7.svg"></div>
                                        <span>BTC</span>
                                        <span>بیت‌کوینس</span>
                                    </div>
                                    <div class="arz-slider-chart">
                                        <p>نمودار هفتگی</p>
                                        <img src="https://cdn.nobitex.ir/charts/btc.png">
                                    </div>
                                    <div class="arz-slider-main">
                                        <div class="arz-slider-main-dolar">
                                            <span>قیمت به دلار</span>
                                            <span>{{$response->getPrice('bitcoin', 'usd')['bitcoin']['usd']}}</span>

                                        </div>
                                        <div class="arz-slider-main-toman">
                                            <span>قیمت به تومان</span>
                                            <span>{{$dollar*$response->getPrice('bitcoin', 'usd')['bitcoin']['usd']}}</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="arz-slider-item">
                                    <div class="arz-slider-header">
                                        <div class="arz-slider-header"><img
                                                src="https://nobitex.ir/_nuxt/img/eth.474c5d1.svg"></div>
                                        <span>ETH</span>
                                        <span>اتریم</span>
                                    </div>
                                    <div class="arz-slider-chart">
                                        <p>نمودار هفتگی</p>
                                        <img src="https://cdn.nobitex.ir/charts/eth.png">
                                    </div>
                                    <div class="arz-slider-main">
                                        <div class="arz-slider-main-dolar">
                                            <span>قیمت به دلار</span>
                                            <span>{{$response->getPrice('ethereum', 'usd')['ethereum']['usd']}}</span>
                                        </div>
                                        <div class="arz-slider-main-toman">
                                            <span>قیمت به تومان</span>
                                            <span>{{$dollar*$response->getPrice('ethereum', 'usd')['ethereum']['usd']}}</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="arz-slider-item">
                                    <div class="arz-slider-header">
                                        <div class="arz-slider-header"><img
                                                src="https://nobitex.ir/_nuxt/img/usdt.56872fc.svg"></div>
                                        <span>USDT</span>
                                        <span>تتر</span>
                                    </div>
                                    <div class="arz-slider-chart">
                                        <p>نمودار هفتگی</p>
                                        <img src="https://cdn.nobitex.ir/charts/usdt.png">
                                    </div>
                                    <div class="arz-slider-main">
                                        <div class="arz-slider-main-dolar">
                                            <span>قیمت به دلار</span>
                                            <span>{{$response->getPrice('tether', 'usd')['tether']['usd']}}</span>
                                        </div>
                                        <div class="arz-slider-main-toman">
                                            <span>قیمت به تومان</span>
                                            <span>{{$dollar*$response->getPrice('tether', 'usd')['tether']['usd']}}</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="arz-slider-item">
                                    <div class="arz-slider-header">
                                        <div class="arz-slider-header"><img
                                                src="https://nobitex.ir/_nuxt/img/ada.a429378.svg"></div>
                                        <span>ADA</span>
                                        <span>کاردانو</span>
                                    </div>
                                    <div class="arz-slider-chart">
                                        <p>نمودار هفتگی</p>
                                        <img src="https://cdn.nobitex.ir/charts/ada.png">
                                    </div>
                                    <div class="arz-slider-main">
                                        <div class="arz-slider-main-dolar">
                                            <span>قیمت به دلار</span>
                                            <span>{{$response->getPrice('cardano', 'usd')['cardano']['usd']}}</span>
                                        </div>
                                        <div class="arz-slider-main-toman">
                                            <span>قیمت به تومان</span>
                                            <span>{{$dollar*$response->getPrice('cardano', 'usd')['cardano']['usd']}}</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <a class="arz-slider-btn-next uk-position-center-left uk-position-small uk-hidden-hover"
                           href="#" uk-slidenav-previous uk-slider-item="next"></a>
                        <a class="arz-slider-btn-previous uk-position-center-right uk-position-small uk-hidden-hover"
                           href="#" uk-slidenav-next uk-slider-item="previous"></a>

                    </div>
                </section>

                <section class="header-main-left">
                    <div class="header-main-left-title">
                        <a href="{{route('calector')}}"><i class="fas fa-calculator"></i>ماشین حساب</a>
                    </div>

                </section>
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

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit-icons.min.js"></script>

<!-- vjs link -->
<script src="https://vjs.zencdn.net/7.15.4/video.min.js"></script>

<!-- jquery link -->
<script src="asesst/assest/js/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        $('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function () {
            $(this).toggleClass('open');

            $('.mobile-menu').addClass('show-mobile-menu');
        });

        $('.menu-close-btn').click(function () {
            $('.mobile-menu').removeClass('show-mobile-menu');
        });

        $('.mobile-menu-item').click(function () {
            $('.mobile-submenu-list').toggleClass('show-mobile-submenu-list');
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

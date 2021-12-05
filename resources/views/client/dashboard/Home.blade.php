@extends('client.layout.ClientMaster')

@section('master')

    <div class="introducing-services">
        <div class="introducing-services-right">
            <div class="introducing-services-right-top">
                <p>کتاب قوانین</p>
            </div>

            <div class="introducing-services-right-main">
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها
                    و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
            </div>
        </div>

        <div class="introducing-services-left">
            <div class="introducing-services-left-top">
                <div class="introducing-services-left-top-title">
                    <form action="{{route('serachgavanin')}}" method="post">
                        @csrf
                        <label>جستجو در کتاب قوانین صادرات و واردات سال 1399 </label>
                        <input class="search form-control" type="search" name="search">
                        <input type="submit" value="جستجو">
                    </form>
                </div>
            </div>
            @if($BookSearch)
                <div id="search-show" class="introducing-services-left-main">
                    {!! $BookSearch !!}
                </div>
            @endif
        </div>
    </div>

    <div class="last-news-section">
        <div class="last-news-container">
            <div class="last-news-container-title ">
                <a href="{{route('NewsAll')}}">آرشیو اخبار</a>
            </div>

            <div class="last-news-items">
                @foreach($contents as $content)
                    <div class="last-news-item">
                        <div class="last-news-item-data">
                            <p>{{$content->created_at}}</p>
                        </div>

                        <div class="last-news-item-title">
                            <p>{{$content->header}}</p>
                        </div>
                        <div style="height: 190px ; overflow: hidden;" class="last-news-item-main">
                            <p>{!! $content->body !!}</p>
                        </div>

                        <div class="last-news-item-btn">
                            <a href="{{route('show.artical',$content)}}">
                                بیشتر
                                <span class="material-icons">chevron_left</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
@if($firstcontent)
            <div class="last-news-gallery">
                <div class="last-news-gallery-info">
                    <div class="last-news-gallery-top">
                        <h1>{{$firstcontent->header}}</h1>
                    </div>
                    <div style="height: 195px ; overflow: hidden;" class="last-news-gallery-main">
                        <p>{!! $firstcontent->body !!}</p>
                    </div>
                    <div class="last-news-gallery-bottom">
                        <a href="{{route('show.artical',$firstcontent)}}">ادامه مطلب</a>
                    </div>
                </div>
                <div style="background-image: url('{{(url('/storage/app/'.$firstcontent->image))}}')"
                     class="last-news-gallery-image">
                </div>
            </div>
    @endif
        </div>
    </div>

    <section class="map-info">

        <div class="map-info-container">
@section('css')

                <script src="https://cdn.jsdelivr.net/npm/svg-pan-zoom@3.6.1/dist/svg-pan-zoom.min.js"></script>

                <link href="{{url('')}}/assets/demo.css" rel="stylesheet" />
                <link href="{{url('')}}/assets/svgMap.css" rel="stylesheet" />
                <link href="{{url('')}}/assets/svgMap.min.css" rel="stylesheet" />
                <script src="{{url('')}}/assets/svgMap.js"></script>
                <script src="{{url('')}}/assets/svgMap.min.js"></script>

    @endsection
            <div class="map-image" style="width: 100%;height: 80%;">
                <div id="svgMapGPD"></div>
                <script src="{{url('')}}/assets/gdp.js"></script>
                <script>
                    new svgMap({
                        targetElementID: 'svgMapGPD',
                        data: svgMapDataGPD,
                        mouseWheelZoomEnabled: true,
                        mouseWheelZoomWithKey: true
                    });
                </script>
            </div>
        </div>
    </section>
    <section class="commercial-services">
        <div class="commercial-services-container">
            <ul uk-switcher class="commercial-services-items">
                @foreach($kalas as $kala)
                    <li class="commercial-services-btn-item">
                        <span class="material-icons">swipe_left</span>
                        <div class="services-btn-totip">{{$kala->title}}</div>
                    </li>
                @endforeach
            </ul>
            <ul class="uk-switcher commercial-services-info">
                @foreach($kalas as $kala)
                    <li>
                        <img src="{{url('/storage/app/'.$kala->image)}}">
                        <div class="commercial-services-header">
                            <span>{{$kala->title}}</span>
                            <span>واحد: {{$kala->Unit}}</span>
                        </div>
                        <div class="commercial-services-body">
                            <div class="commercial-services-body-item"><span>رتبه ایران در تولید:{{$kala->Top_importing_countries}}</span>
                            </div>
                            <div class="commercial-services-body-item"><span>تعداد کدهای تعرفه گروه کالا:{{$kala->Top_exporting_countries}}</span></div>
                            <div class="commercial-services-body-item"><span>ارزش واردات جهانی:{{$kala->Total_volume_of_world_trade}}</span></div>
                            <div class="commercial-services-body-item"><span>میزان تولید (تن):{{$kala->Value_of_Iranian_imports}}</span></div>
                            <div class="commercial-services-body-item"><span>ارزش صادرات ایران:{{$kala->Global_export_value}}</span></div>
                            <div class="commercial-services-body-item"><span>ارزش صادرات جهانی:{{$kala->Value_of_Iranian_exports}}</span></div>
                            <div class="commercial-services-body-item"><span>ارزش واردات ایران:{{$kala->Production_rate}}</span></div>
                            <div class="commercial-services-body-item"><span>حجم کل تجارت جهانی:{{$kala->Global_import_value}}</span></div>
                            <div class="commercial-services-body-item"><span>5 کشور عمده صادرکننده:{{$kala->Iran_rank_in_production}}</span></div>
                            <div class="commercial-services-body-item"><span>5 کشور عمده واردکننده:{{$kala->Number_of_commodity_group_tariff_codes}}</span></div>
                        </div>
                    </li>
                @endforeach
            </ul>

        </div>
        <!-- This is the container of the content items -->


    </section>
@if($post)
    <div class="article-section">
        <div class="article-container">
            <div class="article-archive-container">
                <div class="article-archive">
                    <div class="article-archive-title">
                        <a href="{{route('ArticalAll')}}">آرشیو مقالات</a>
                    </div>
                    <div class="article-archive-main">
                        <div class="article-archive-main-title">
                            <p>{{$post->header}}</p>
                        </div>

                        <div class="article-archive-main-data">
                            <p>{{$post->TimeRead}}</p>
                            <p>نویسنده: {{$post->creator}}</p>
                        </div>

                        <div style="height: 50px ; overflow: hidden" class="article-archive-main-text">
                            <p>{!! $post->body !!}</p>
                        </div>

                        <a href="{{route('show.posts',$post)}}" class="article-archive-main-btn">
                            ادامه مطلب
                            <span class="material-icons">chevron_left</span>
                        </a>
                    </div>
                </div>

                <div class="educational-archive">
                    <div class="educational-archive-title">
                        <a href="#">برچسب مقالات</a>
                    </div>
                    <div class="educational-archive-main">
                        @foreach($tags as $tag)
                            <a href="{{route('show.tags',$tag)}}">{{$tag->title}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="investment">
            <div class="investment-title">
                <a href="{{route('VideoAll')}}">
                <p>گالری ویدئو</p></a>
                <h1>Video Gallery</h1>
            </div>

            <div class="investment-video">
                <video style="width: 100%; height: 100%;"
                       id="my-video"
                       class="video-js"
                       controls
                       width="640"
                       preload="auto"
                       height="600px"
                       poster="{{url('/storage/app/'.$video->image)}}"
                       data-setup="{}"
                >
                    <source src="{{url('/storage/app/'.$video->video)}}"
                            type="video/mp4"/>

                    <p class="vjs-no-js">
                        {{$video->title}}
                    </p>
                </video>
            </div>

            <div class="investment-list">
                <ul class="investment-items">
                    @foreach($videocats as $videocat)
                        <li class="investment-item">
                            <span class="investment-item-dot"></span>
                            <p>
                                <a href="{{route('show.video',$videocat)}}">{{$videocat->title}}</a>
                            </p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif
    @if($city)
    <section id="footer-top-index">
        <div class="info-city">
            <div class="info-city-container">
                <div class="info-city-text">
                    <div class="info-city-text-title">
                        <h3>{{$city->title}}</h3>
                    </div>

                    <div class="info-city-text-main">
                        <p>{!! $city->body !!}</p>
                    </div>
                </div>
                <div style="background-image: url('{{url('/storage/app/'.$city->image)}}')"
                     class="info-city-image">
                </div>
            </div>
        </div>
    </section>
@endif
@endsection

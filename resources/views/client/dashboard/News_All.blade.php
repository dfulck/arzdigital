@extends('client.layout.SingleMaster')

@section('master')

    <main class="single-page-main">
        <div class="single-page-title"><p>آرشیو اخبار</p></div>
        <div class="news-category-container">
            <ul class="news-category-list">
{{--                active-category--}}
                @foreach($leaders as $leader)
                <li data-cat="{{$leader->id}}" class="news-category-item "><a href="{{route('show.leaders',$leader)}}" class="category">{{$leader->title}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="single-page-main-container">
            @foreach($contents as $content)
                <div class="single-articles-item">
                    <div class="single-articles-item-image">
                        <img src="{{url('/storage/app/'.$content->image)}}" >
                    </div>
                    <div class="single-articles-item-text">
                        <div class="single-articles-item-title">
                            <p>{{$content->header}}</p>
                        </div>
                        <div class="single-articles-item-body">
                            <p>
                                {!! $content->body !!}
                            </p>
                        </div>
                        <div class="single-articles-item-info">
                            <a href="{{route('show.artical',$content)}}">
                                <span>بیشتر بدانید</span>
                                <span></span>
                            </a>
                            <p>
                                <span>تاریخ : </span>
                                <span>{{$content->created_at}}</span>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </main>

@endsection




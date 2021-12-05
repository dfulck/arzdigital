@extends('client.layout.SingleMaster')

@section('master')

    <main class="articales-single-page">
        <div class="articales-single-page-container">
            <div class="articales-single-page-body">
                <div class="articales-single-page-image">
                    <img src="{{url('/storage/app/'.$content->image)}}">
                </div>

                <div class="articales-single-page-title">
                    <p>{{$content->header}}</p>
                </div>

                <div class="articales-single-page-text">
                   <p>
                       {!! $content->body !!}
                   </p>
                </div>
            </div>
            <div class="articales-single-page-sidebar">
                <div class="articales-single-page-category">
                    <div class="articales-single-category-title">دسته‌بندی‌ها</div>
                    <div class="articales-single-category-text">
                        @foreach($leaders as $leader)
                        <p><a href="{{route('show.leaders',$leader)}}">{{$leader->title}}</a></p>
                        @endforeach
                    </div>
                </div>
                <div class="articales-single-page-tag">
                    <div class="articales-single-category-title">برچسب‌ها</div>
                    <div class="articales-single-category-text">
                        @foreach($tags as $tag)
                        <p><a href="{{route('show.tags',$tag)}}">{{$tag->title}}</a></p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

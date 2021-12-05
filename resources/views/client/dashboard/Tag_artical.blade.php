@extends('client.layout.SingleMaster')
@section('master')

    <main class="single-page-main">
        <div class="single-page-title"><p>{{$tag->title}}</p></div>
        <div class="single-page-main-container">
            @foreach($tag->posts as $post)
                <div class="single-articles-item">
                    <div class="single-articles-item-image">
                        <img src="{{url('/storage/app/'.$post->image)}}" >
                    </div>
                    <div class="single-articles-item-text">
                        <div class="single-articles-item-title">
                            <p>{{$post->header}}</p>
                        </div>
                        <div class="single-articles-item-body">
                            <p>
                                {!! $post->body !!}
                            </p>
                        </div>
                        <div class="single-articles-item-info">
                            <a href="{{route('show.posts',$post)}}">
                                <span>بیشتر بدانید</span>
                                <span></span>
                            </a>

                            <p>
                                <span>تاریخ : </span>
                                <span>{{$post->created_at}}</span>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </main>

@endsection

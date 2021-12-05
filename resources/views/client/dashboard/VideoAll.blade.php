@extends('client.layout.SingleMaster')
@section('master')
    <main class="single-page-main">
        <div class="single-page-title"><p>گالری ویدئو</p></div>
        <div class="single-page-main-container">
            @foreach($videos as $video)
            <div class="single-page-item">
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
            @endforeach
        </div>
    </main>

@endsection

@extends('client.layout.SingleMaster')

@section('master')
    <main class="articales-single-page">
        <div class="articales-single-page-container">
            <div class="articales-single-page-body">
                <div class="articales-single-page-image">
                    <img src="{{url('/storage/app/'.$post->image)}}">
                </div>
                <div class="articales-single-page-title">
                    <p>{{$post->header}}</p>
                </div>
                <div class="articales-single-page-text">
                    <p>
                        {!! $post->body !!}
                    </p>
                </div>
                <div>
                    {{$post->creator}}
                </div>
                <div>
                    {{$post->TimeRead}}
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

<div class="user-comment-container">
    <div class="add-new-comment-container">
        <form action="{{route('question.store',$post)}}" method="post">
            @csrf
            <div class="add-new-comment-form-container">
                <div class="add-new-comment-image">
                    @auth
                    <img src="{{url('/storage/app/'.auth()->user()->image)}}">
                    @endauth
                </div>
                <div class="add-new-comment-input">
                    <textarea name="question"  placeholder="نظر خود را در این قسمت  بنویسید"></textarea>
                </div>
            </div>
            @auth
            <input type="submit" value="ارسال">
            @else
                <br>
                <h2>برای نظر دهی لطفا وارد حساب کاربری شوید!....</h2>
                <br>
            @endauth
        </form>
    </div>
    <div class="old-comments-container">
        @foreach($questions as $question)
@if($post->Hasquestion($question))
        <div class="comment-item">
            <div class="comment-item-image">
                <img src="{{url('/storage/app/'.$question->image)}}">
            </div>
            <div class="comment-item-info">
                <div class="comment-item-info-header">
                    <span class="comment-item-writter">{{$question->name}}</span>
                    <span class="comment-item-data">{{$question->created_at->diffForHumans()}}</span>
                </div>
                <div class="comment-item-info-body">
            <p>{{$question->title}}</p>
             </div>
            </div>
        </div>
            @endif
        @endforeach
    </div>
</div>


@endsection

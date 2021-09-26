@extends('Panel.layout.master')

@section('master')

<body class="dark">


@include('Panel.layout.sidebar')

@include('Panel.layout.navigation')


<main class="main-content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @foreach($contents as $content)
                        <div class="card-group">
                            <div class="card">
                                <img height="400px" src="/{{str_replace('public','storage',$content->image)}}" class="card-img-top"
                                     alt="image">
                                <div class="card-body">
                                    <h6 class="card-title">{{$content->header}}</h6>
                                    <p class="card-text">{!! $content->body !!}</p>
                                    <p class="card-text">
                                        <small class="text-muted">{{$content->created_at}}</small>
                                    </p>
                                </div>
                                <a href="{{route('contents.edit',$content)}}" class="btn btn-success form-control">edit</a>
                                <form class="mt-3" action="{{route('contents.destroy',$content)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger form-control" type="submit" value="delete">
                                </form>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>

@include('Panel.layout.script')

</body>

@endsection

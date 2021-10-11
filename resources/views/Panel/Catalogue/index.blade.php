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
                        <div class="card-body">
                            <h6 class="card-title">لیست مطالب </h6>
                        @foreach($catalogues as $catalogue)
                            <div class="card-group">
                                <div class="card">
                                    <img height="400px" src="{{url('/storage/app/'.$catalogue->image)}}" class="card-img-top"
                                         alt="image">
                                    <div class="card-body">
                                        <h6 class="card-title">{{$catalogue->title}}</h6>
                                        <h6 class="card-title">{{$catalogue->mizan_tolid_dr_sal}}</h6>
                                        <h6 class="card-title">{{$catalogue->qymt_be_tonazh}}</h6>
                                        <p class="card-text">{!! $catalogue->body !!}</p>
                                        <p class="card-text">
                                            <small class="text-muted">{{$catalogue->created_at}}</small>
                                        </p>
                                    </div>
                                    <a href="{{route('catalogues.edite',$catalogue)}}" class="btn btn-info btn-block">ویرایش</a>
                                    <form class="mt-3" action="{{route('catalogues.destroy',$catalogue)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input class="btn btn-danger btn-block" type="submit" value="حذف">
                                    </form>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('Panel.layout.script')
    </body>
@endsection

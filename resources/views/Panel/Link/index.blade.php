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
                        <form action="{{route('links.update')}}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label class="form-control text-center">{{$instagram->title}}</label>
                                    <input class="form-control" type="text" name="instagram" value="{{$instagram->link}}">
                            </div>
                            <div class="form-group">
                                <label class="form-control text-center">{{$twitter->title}}</label>
                                    <input class="form-control" type="text" name="twitter" value="{{$twitter->link}}">
                            </div>
                            <div class="form-group">
                                <label class="form-control text-center">{{$telegram->title}}</label>
                                    <input class="form-control" type="text" name="telegram" value="{{$telegram->link}}">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="ویرایش">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('Panel.layout.script')
    </body>
@endsection



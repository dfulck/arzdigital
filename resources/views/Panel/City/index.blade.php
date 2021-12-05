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
                        <form action="{{route('cities.update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <img src="{{$city->image}}" alt="image" width="100%">
                                <label for="image" class="form-control text-center bg-primary">آپلود عکس جدید</label>
                                <input type="file" hidden  id="image" name="image">
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-control text-center">عنوان دانستنی</label>
                                <input class="form-control" type="text" id="title" name="title" value="{{$city->title}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">متن دانستنی </label>
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">ویرایشگر کلاسیک</h6>
                                        <textarea name="body" id="editor-demo1">{!! $city->body !!}</textarea>
                                    </div>
                                </div>
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



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
                            <h6 class="card-title">اضافه کردن مطلب</h6>
                            <form action="{{route('catalogues.store')}}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">عنوان</label>
                                    <input type="text" name="title" class="form-control text-left"
                                           id="exampleFormControlInput1" dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">میزان تولید بر سال</label>
                                    <input type="text" name="mizan_tolid_dr_sal" class="form-control text-left"
                                           id="exampleFormControlInput1" dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">قیمت به تناژ</label>
                                    <input type="text" name="qymt_be_tonazh" class="form-control text-left"
                                           id="exampleFormControlInput1" dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">شرح مطلب </label>
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">ویرایشگر کلاسیک</h6>
                                            <textarea name="body" id="editor-demo1"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">تصویر مطلب</label>
                                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="send">
                                </div>
                            </form>
                        </div>
                        <br>
                        <br>
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
                                    <a href="{{route('catalogues.edit',$catalogue)}}" class="btn btn-info btn-block">ویرایش</a>
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
    </main>


    @include('Panel.layout.script')

    </body>
@endsection

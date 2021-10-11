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
                            <form action="{{route('catalogues.update',$catalogue)}}" enctype="multipart/form-data" method="post">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">عنوان</label>
                                    <input value="{{$catalogue->title}}" type="text" name="title" class="form-control text-left"
                                           id="exampleFormControlInput1" dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">میزان تولید بر سال</label>
                                    <input value="{{$catalogue->mizan_tolid_dr_sal}}" type="text" name="mizan_tolid_dr_sal" class="form-control text-left"
                                           id="exampleFormControlInput1" dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">قیمت به تناژ</label>
                                    <input value="{{$catalogue->qymt_be_tonazh}}" type="text" name="qymt_be_tonazh" class="form-control text-left"
                                           id="exampleFormControlInput1" dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">شرح مطلب </label>
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">ویرایشگر کلاسیک</h6>
                                            <textarea name="body" id="editor-demo1">{{$catalogue->body}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <img height="400px" src="{{url('/storage/app/'.$catalogue->image)}}" class="card-img-top"
                                         alt="image">
                                    <label for="exampleFormControlFile1">تصویر مطلب</label>
                                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="ویرایش">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    @include('Panel.layout.script')

    </body>
@endsection

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
                        <form action="{{route('posts.store')}}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1">عنوان</label>
                                <input type="text" name="header" class="form-control text-left"
                                       id="exampleFormControlInput1" dir="ltr">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">زمان مطالعه</label>
                                <input type="text" name="TimeRead" class="form-control text-left"
                                       id="exampleFormControlInput1" dir="ltr">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">توضیحات</label>
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">ویرایشگر کلاسیک</h6>
                                        <textarea name="body" id="editor-demo1"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="TagInput">برچسب مورد نطر را انتخاب نمایید </label>
                                <select class="js-example-basic-single" multiple name="tag">
                                    @foreach($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->title}}</option>
                                    @endforeach
                                </select>
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
                </div>
            </div>
        </div>
    </div>
</main>




@include('Panel.layout.script')

</body>

@endsection

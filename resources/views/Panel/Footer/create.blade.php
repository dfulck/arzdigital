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
                    <form action="{{route('footers.store1')}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">فوتر سایت بخش اول</label>
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">ویرایشگر کلاسیک</h6>
                                    <textarea name="title" id="editor-demo1">{!! $footer1->title !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="ویرایش">
                        </div>
                    </form>
                    <form action="{{route('footers.store2')}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">فوتر سایت بخش دوم</label>
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">ویرایشگر کلاسیک</h6>
                                    <textarea name="title" id="editor-demo2">{!! $footer2->title !!}</textarea>
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



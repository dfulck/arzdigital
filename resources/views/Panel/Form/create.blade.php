@extends('Panel.layout.master')

@section('master')

    <body class="dark">

    @include('Panel.layout.sidebar')

    @include('Panel.layout.navigation')


    <!-- begin::main content -->
    <main class="main-content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('forms.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1"> عنوان </label>
                                <input name="title" type="text" class="form-control text-left" id="exampleInputEmail1"
                                        dir="ltr">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">فایل پی دی اف</label>
                                <div class="custom-file">
                                    <input name="pdf" type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">انتخاب فایل</label>
                                </div>
                                <small id="emailHelp" class="form-text text-muted">دقت کنید که باید فرمت pdf باشد</small>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-block btn-primary" value="ارسال">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- end::main content -->

    <!-- Plugin scripts -->
    @include('Panel.layout.script')
    </body>

@endsection

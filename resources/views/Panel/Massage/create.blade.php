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
                        <form action="{{route('massages.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">پیفام</label>
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">ویرایشگر کلاسیک</h6>
                                        <textarea name="title" id="editor-demo1"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Role">ارسال ایمیل به این گروه از کاربران</label>
                                <select class="js-example-basic-single" multiple name="role[]" id="Role">
                                    @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Check">کاربرانی که ایمیل خود را در سایت وارد کرده اند</label>
                                <input class="form-check" id="Check" type="checkbox" name="WebUser">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success btn-block" value="send">
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

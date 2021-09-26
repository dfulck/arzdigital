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
                    <form action="{{route('roles.store')}}" method="post">
                        @csrf
                        <h6 class="card-title">اضافه کردن</h6>
                        <div class="form-group">
                            <input placeholder="نام دسترسی" type="text" class="form-control"
                                   name="title">
                        </div>
                        <div class="form-group">
                            <select class="js-example-basic-single" multiple name="permission[]">
                                <optgroup label="دسترسی ها">
                                    @foreach($permissions as $permission)
                                        <option value="{{$permission->id}}">{{$permission->title}}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="send">
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



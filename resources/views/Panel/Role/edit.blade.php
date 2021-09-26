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
                    <form action="{{route('roles.update',$role)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <h6 class="card-title">edit {{$role->title}}</h6>
                        <div class="form-group">
                            <input value="{{$role->title}}" placeholder="نام دسترسی" type="text" class="form-control"
                                   name="title">
                        </div>
                        <div class="form-group">
                            <select class="js-example-basic-single" multiple name="permissions[]">
                                    @foreach($permissions as $permission)
                                        <option
                                            @if($role->HasPermission($permission->title))
                                            selected
                                                @endif
                                            value="{{$permission->id}}">{{$permission->title}}</option>
                                    @endforeach
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

<!-- Plugin scripts -->
@include('Panel.layout.script')
</body>
@endsection



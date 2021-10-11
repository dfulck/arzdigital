
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
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">شماره تلفن همراه</th>
                                    <th scope="col">ایمیل</th>
                                    <th scope="col">نام کاربری</th>
                                    <th class="text-right" scope="col">ویرایش دسترسی کاربر</th>
                                    <th class="text-right" scope="col">حذف کاربر</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <th>{{$user->number}}</th>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>
                                            <form action="{{route('users.updateThis',$user)}}" method="post" >
                                                @csrf
                                                @method('PATCH')
                                            <select class="form-control" name="Role_id" id="">
                                                @foreach($roles as $role)
                                                <option
                                                    @if($user->Role_id==$role->id)
                                                        selected
                                                    @endif
                                                    value="{{$role->id}}">{{$role->title}}</option>
                                                @endforeach
                                            </select>
                                                <input type="submit" class="btn btn-primary" value="ویرایش ">
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{route('users.destroy',$user)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="btn btn-danger" value="جدف کاربر">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('Panel.layout.script')
    </body>

@endsection


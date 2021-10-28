@extends('Panel.layout.master')
@section('master')
    @include('Panel.layout.sidebar')
    @include('Panel.layout.navigation')
    <!-- begin::main content -->
    <main class="main-content ">
        <div class="card card-body overflow-hidden"
             data-backround-image="{{url('/assets/media/image/profile-bg.png')}}">
            <div class="p-3 d-lg-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <div>
                        <figure class="avatar avatar-xl mr-3">
                            <img src="{{url('/storage/app/'.auth()->user()->image)}}" class="rounded-circle"
                                 alt="...">
                        </figure>
                    </div>
                    <div class="text-white">
                        <h3 class="line-height-30 m-b-10">
                            {{$user->name}}
                            <a href="{{route('users.edit',$user)}}" data-toggle="tooltip" title="ویرایش پروفایل"
                               class="font-size-15 text-white btn-floating m-l-5 align-middle">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </h3>
                        <p class="mb-0 opacity-8">{{$user->UserRoleText()}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-sm">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">لینک زیر مجموعه گیری شما </h6>
                        <div class="form-group">
                            <a class="text-white ">{{optional(auth()->user())->CollectionLink}}</a>
                        </div>
                        <hr>
                        <h2>زیر مجموعه های شما</h2>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive" tabindex="2" style="overflow: hidden; outline: none;">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">آواتار</th>
                                            <th scope="col">نام</th>
                                            <th scope="col">نام خانوادگی</th>
                                            <th scope="col">ایمیل کاربری</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach(auth()->user()->UsersCollection() as $UserCollection)
                                            <tr>
                                                <th scope="row">{{$UserCollection->id}}</th>
                                                <th>
                                                    <figure class="avatar avatar-sm">
                                                        <img src="{{url('/storage/app/'.$UserCollection->image)}}"
                                                             class="rounded-circle" alt="image">
                                                    </figure>
                                                </th>
                                                <td>{{$UserCollection->name}}</td>
                                                <td>{{$UserCollection->lastname}}</td>
                                                <td>{{$UserCollection->email}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <hr>
                        @if(auth()->id()===1)
                            <h1> ادمین اصلی</h1>
                        @else
                            @if(auth()->user()->UserparentExists())
                            <h1>معرفی شده توسط</h1>
                            <div class="form-group">
                                <a class="form-control">{{auth()->user()->UsersParent()->name}}</a>
                            </div>
                                @endif
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title d-flex justify-content-between align-items-center">
                            اطلاعات کاربری
                        </h6>
                        <div class="row mb-2">
                            <div class="col-6 text-muted">نام:</div>
                            <div class="col-6">{{$user->name}}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6 text-muted">نام خانوادگی:</div>
                            <div class="col-6">{{$user->lastname}}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6 text-muted">سن:</div>
                            <div class="col-6">{{$user->age}}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6 text-muted">شغل:</div>
                            <div class="col-6">{{$user->job}}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6 text-muted">شهر:</div>
                            <div class="col-6">{{$user->city}}، ایران</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6 text-muted">آدرس:</div>
                            <div class="col-6">{{$user->address}}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6 text-muted">تلفن:</div>
                            <div class="col-6" dir="ltr">{{$user->number}}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6 text-muted">ایمیل:</div>
                            <div class="col-6">{{$user->email}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- end::main content -->
    @include('Panel.layout.script')
@endsection

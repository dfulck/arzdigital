@extends('Panel.layout.master')

@section('master')

<body class="dark">


@include('Panel.layout.sidebar')

@include('Panel.layout.navigation')



<!-- begin::main content -->
<main class="main-content">

    <div class="card">
        <div class="card-body">
                <h6 class="card-title">نکمیل پروفایل</h6>
                <div id="wizard2">
                    <h3>اطلاعات شخصی</h3>
                    <section>
                        <h4>اطلاعات شخصی</h4>
                        <form id="form1" action="{{route('users.update',$users)}}" method="post" >
                            @csrf
                            @method('PATCH')
                            <div class="form-group wd-xs-300">
                                <input type="text" value="{{$users->name}}" name="name" class="form-control"
                                       placeholder="نام">
                                <div class="valid-feedback">
                                    صحیح است!
                                </div>
                            </div><!-- name -->
                            <div class="form-group wd-xs-300">
                                <input type="text" value="{{$users->lastname}}" class="form-control" name="lastname"
                                       placeholder="نام خانوادگی">
                                <div class="valid-feedback">
                                    صحیح است!
                                </div>
                            </div><!-- lastname-->
                            <div class="form-group wd-xs-300">
                                <input type="text" value="{{$users->username}}" class="form-control" name="username"
                                       placeholder="نام کاربری">
                                <div class="valid-feedback">
                                    صحیح است!
                                </div>
                            </div><!-- username-->
                            <div class="form-group wd-xs-300">
                                <input type="text" value="{{$users->email}}" class="form-control" name="email"
                                       placeholder="ایمیل">
                                <div class="valid-feedback">
                                    صحیح است!
                                </div>
                            </div><!-- email-->
                            <div class="form-group wd-xs-300">
                                <input type="text" value="{{$users->number}}" class="form-control" name="number"
                                       placeholder="شماره">
                                <div class="valid-feedback">
                                    صحیح است!
                                </div>
                            </div><!-- number-->
                            <div class="form-group wd-xs-300">
                                <input type="text" class="form-control" name="password" placeholder="رمز عبور">
                                <div class="valid-feedback">
                                    صحیح است!
                                </div>
                            </div><!-- password-->
                            <div class="form-group wd-xs-300">
                                <input type="submit" class="form-control" value="ویرایش">
                            </div><!-- submit-->
                        </form>
                    </section>
                    <h3>اطلاعات سکونت</h3>
                    <section>
                        <h4>اطلاعات سکونتی</h4>
                        <form id="form2" action="{{route('users.update',$users)}}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="form-group wd-xs-300">
                                <input type="text" value="{{$users->job}}" class="form-control" name="job"
                                       placeholder="شغل">
                                <div class="valid-feedback">
                                    صحیح است!
                                </div>
                            </div><!-- job-->
                            <div class="form-group wd-xs-300">
                                <input type="text" value="{{$users->city}}" class="form-control" name="city"
                                       placeholder="شهر">
                                <div class="valid-feedback">
                                    صحیح است!
                                </div>
                            </div><!-- city-->
                            <div class="form-group wd-xs-300">
                                <input type="text" value="{{$users->address}}" class="form-control" name="address"
                                       placeholder="آدرس">
                                <div class="valid-feedback">
                                    صحیح است!
                                </div>
                            </div><!-- address-->
                            <div class="form-group wd-xs-300">
                                <input type="number" value="{{$users->age}}" class="form-control" name="age"
                                       placeholder="سن">
                                <div class="valid-feedback">
                                    صحیح است!
                                </div>
                            </div><!-- age-->
                            <div class="form-group wd-xs-300">
                                <input type="submit" class="form-control" value="ویرایش">
                            </div><!-- submit-->
                        </form>
                    </section>
                    <h3>تصویر پروفایل</h3>
                    <section>
                        <form id="form3"  action="{{route('users.update',$users)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                        <div class="form-group wd-xs-300">
                            <label for="image">تصویر </label>
                            <img src="{{str_replace('public','/storage',$users->image)}}" alt="Not Found">
                            <input type="file" class="form-control form-control-file" id="image" name="image" placeholder="عکس پروفایل">
                            <div class="valid-feedback">
                                صحیح است!
                            </div>
                        </div><!-- image-->
                        <div class="form-group wd-xs-300">
                            <input type="submit" class="form-control" value="ویرایش">
                        </div><!-- submit-->
                        </form>
                    </section>
                </div>
        </div>
    </div>

</main>
<!-- end::main content -->
@include('Panel.layout.script')
</body>
@endsection

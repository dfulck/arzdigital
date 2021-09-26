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
                                <th scope="col">#</th>
                                <th scope="col">هدر مطلب</th>
                                <th scope="col">اسم آنالیز</th>
                                <th scope="col">تصویر لوگو</th>
                                <th scope="col">اضافه کردن راهنمای بخش </th>
                                <th class="text-right" scope="col">تنظیمات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($analyses as $analysis)
                                <tr>
                                    <th scope="row">{{$analysis->id}}</th>
                                    <th scope="row">{{$analysis->header}}</th>
                                    <td>{{$analysis->Fa_title}}/{{$analysis->En_title}}</td>
                                    <td>
                                        <img src="/{{str_replace('public','storage',$analysis->LogoImage)}}"
                                             style="border-radius: 50%"
                                             width="200px"
                                             alt="image not found">
                                    </td>
                                    <th scope="row">
                                        <a class="btn btn-gradient-success" href="{{route('analyses.edit',$analysis)}}">مطالب
                                        </a></th>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-light btn-floating btn-icon btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <button class="dropdown-item " type="button"><a class="text-white" href="{{route('analyses.edit',$analysis)}}">ویرایش</a></button>
                                                <form action="{{route('analyses.destroy',$analysis)}}" method="post" >
                                                    @csrf
                                                    @method('DELETE')
                                                    <input class="dropdown-item text-white" type="submit" value="DELETE">
                                                </form>
                                            </div>
                                        </div>
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

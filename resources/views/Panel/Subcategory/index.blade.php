@extends('Panel.layout.master')

@section('master')

<body class="dark">

@include('Panel.layout.sidebar')

@include('Panel.layout.navigation')


<!-- begin::main content -->
<main class="main-content">


    <div class="card">
        <div class="card-body">
            <table id="example1" class="table table-striped table-bordered" width="100%">
                <thead>
                <tr>
                    <th>نام سرگروه پست</th>
                    <th>تعداد مطالب</th>
                    <th>زمان ایجاد</th>
                    <th>لیست پست ها برای اضافه کردن پارت ها </th>
                    <th>اضافه کردن پست(ویرایش و حذف)</th>
                </tr>
                </thead>
                <tbody>
                @foreach($subcategories as $subcategory)
                    <tr>
                        <td>{{$subcategory->title}}</td>
                        <td>{{$subcategory->HasNumberPost()}}</td>
                        <td>{{$subcategory->created_at}}</td>
                        <td class="text-center"><a class="btn btn-gradient-light" href="{{route('Posts.index',$subcategory)}}">List</a></td>
                        <td class="text-center"><a class="text-white" href="{{route('subcategories.post.create',$subcategory)}}">ADD/Edit/Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>نام سرگروه پست</th>
                    <th>تعداد مطالب</th>
                    <th>زمان ایجاد</th>
                    <th>لیست پست ها برای اضافه کردن پارت ها </th>
                    <th>اضافه کردن پست(ویرایش و حذف)</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>

</main>
<!-- end::main content -->
@include('Panel.layout.script')
</body>

@endsection

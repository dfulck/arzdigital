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
                    <th>نام سرگروه مطالب</th>
                    <th>تعداد مطالب</th>
                    <th>زمان ایجاد</th>
                    <th>اضافه کردن مطلب</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                @foreach($leaders as $leader)
                    <tr>
                        <td>{{$leader->title}}</td>
                        <td>{{$leader->HasNumberContent()}}</td>
                        <td>{{$leader->created_at}}</td>
                        <td><a class="text-white" href="{{route('content.create',$leader)}}">ADD</a></td>
                        <td><a class="text-white" href="{{route('leaders.edit',$leader)}}">Edit</a></td>
                        <td>
                            <form action="{{route('leaders.destroy',$leader)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form></td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>نام سرگروه مطالب</th>
                    <th>تعداد مطالب</th>
                    <th>زمان ایجاد</th>
                    <th>اضافه کردن مطلب</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
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

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
                    <th>#</th>
                    <th>نام سرگروه ویدیو</th>
                    <th>تعداد ویدیو ها</th>
                    <th>ایجاد ویدیو برای این سر دسته</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                @foreach($videocats as $videocat)
                    <tr>
                        <td>{{$videocat->id}}</td>
                        <td>{{$videocat->title}}</td>
                        <td>{{$videocat->NumVideo()}}</td>
                        <td><a class="text-white" href="{{route('videocats.videos.create',$videocat)}}">ADD</a></td>
                        <td><a class="text-white" href="{{route('videocats.edit',$videocat)}}">Edit</a></td>
                        <td>
                            <form action="{{route('videocats.destroy',$videocat)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form></td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>نام سرگروه ویدیو</th>
                    <th>تعداد ویدیو ها</th>
                    <th>ایجاد ویدیو برای این سر دسته</th>
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

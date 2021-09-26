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
                    <th>تعداد کامنت ها</th>
                    <th>زمان ایجاد</th>
                    <th>اضافه کردن پست</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->header}}</td>
                        <td>-</td>
                        <td>{{$post->created_at}}</td>
                        <td><a class="text-white" href="">ADD</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>نام سرگروه پست</th>
                    <th>تعداد کامنت ها</th>
                    <th>زمان ایجاد</th>
                    <th>اضافه کردن پست</th>
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

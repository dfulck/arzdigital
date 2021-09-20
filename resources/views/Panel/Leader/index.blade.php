<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arz Digital</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/media/image/favicon.png">

    <!-- Theme Color -->
    <meta name="theme-color" content="#5867dd">

    <!-- Plugin styles -->
    <link rel="stylesheet" href="/vendors/bundle.css" type="text/css">

    <!-- DataTable -->
    <link rel="stylesheet" href="/vendors/dataTable/responsive.bootstrap.min.css" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="/assets/css/app.css" type="text/css">
</head>

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

<!-- Plugin scripts -->
<script src="/vendors/bundle.js"></script>

<!-- DataTable -->
<script src="/vendors/dataTable/jquery.dataTables.min.js"></script>
<script src="/vendors/dataTable/dataTables.bootstrap4.min.js"></script>
<script src="/vendors/dataTable/dataTables.responsive.min.js"></script>
<script src="/assets/js/examples/datatable.js"></script>

<!-- App scripts -->
<script src="/assets/js/app.js"></script>
</body>

</html>
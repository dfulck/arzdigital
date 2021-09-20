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
                    <th>نام دسته بندی</th>
                    <th>زیر دسته ها</th>
                    <th>زمان ایجاد</th>
                    <th>اضافه کردن زیر دسته</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
               <tbody>
               @foreach($categories as $category)
               <tr>
                   <td>{{$category->title}}</td>
                   <td>@foreach($category->subcategories as $subcategory)
                   {{$subcategory->title}}--
                       @endforeach
                   </td>
                   <td>{{$category->created_at}}</td>
                   <td><a class="text-white" href="{{route('categories.show',$category)}}">ADD</a></td>
                   <td><a class="text-white" href="{{route('categories.edit',$category)}}">Edit</a></td>
                   <td>
                       <form action="{{route('categories.destroy',$category)}}" method="post">
                           @csrf
                           @method('DELETE')
                           <input type="submit" class="btn btn-danger" value="Delete">
                       </form></td>
               </tr>
               @endforeach
               </tbody>
                <tfoot>
                <tr>
                    <th>نام دسته بندی</th>
                    <th>زیر دسته ها</th>
                    <th>زمان ایجاد</th>
                    <th>اضافه کردن زیر دسته</th>
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
<script src="vendors/bundle.js"></script>

<script src="/vendors/dataTable/jquery.dataTables.min.js"></script>
<script src="/vendors/dataTable/dataTables.bootstrap4.min.js"></script>
<script src="/vendors/dataTable/dataTables.responsive.min.js"></script>
<script src="/assets/js/examples/datatable.js"></script>


<!-- App scripts -->
<script src="/assets/js/app.js"></script>
</body>

</html>

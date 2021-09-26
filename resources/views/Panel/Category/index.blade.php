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
@include('Panel.layout.script')
</body>

@endsection

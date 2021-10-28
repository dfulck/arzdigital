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
                    <th>عنوان</th>
                    <th>نویسنده</th>
                    <th>زمان مطالعه</th>
                    <th>زمان ایجاد</th>
                    <th>ویرایش</th>
                    <th>حذف پست</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->header}}</td>
                        <td>{{$post->creator}}</td>
                        <td>{{$post->TimeRead}}</td>
                        <td>{{$post->created_at}}</td>
                        <td><a href="{{route('posts.edit',$post)}}" class="btn btn-success">ویرایش</a></td>
                        <td>
                            <div class="text-center">
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                    حذف
                                </button>
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                     aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">حذف  </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="یرگشت">
                                                    <i class="ti-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                مطمعنی میخوای پاک کنی ؟

                                                <p>
                                                    بعدا پشیمون نشی ها
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">یرگشت
                                                </button>
                                                <form action="{{route('posts.destroy',$post)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-primary">بله حذف کن بره
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>عنوان</th>
                    <th>نویسنده</th>
                    <th>زمان مطالعه</th>
                    <th>زمان ایجاد</th>
                    <th>ویرایش</th>
                    <th>حذف پست</th>
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

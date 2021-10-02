@extends('Panel.layout.master')

@section('master')

    <body class="dark">

    @include('Panel.layout.sidebar')

    @include('Panel.layout.navigation')


    <!-- begin::main content -->
    <main class="main-content">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('etsos.subetsos.store',$etso)}}" method="post">
                            @csrf
                            <h1>فرم ایجاد اتحادیه {{$etso->title}}</h1>
                            <div class="form-group">
                                <label for="exampleInputEmail1">نام تشکل</label>
                                <input name="NameTashakol" type="text" class="form-control text-left" id="exampleInputEmail1"
                                       aria-describedby="emailHelp" dir="ltr">
                          </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">شماره تماس</label>
                                <input name="number" type="text" class="form-control text-left" id="exampleInputEmail1"
                                       aria-describedby="emailHelp" dir="ltr">
                          </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">فاکس </label>
                                <input name="fox" type="text" class="form-control text-left" id="exampleInputEmail1"
                                       aria-describedby="emailHelp" dir="ltr">
                          </div>
                            <button type="submit" class="btn btn-primary">افزودن</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example1" class="table table-striped table-bordered" width="100%">
                            <thead>
                            <tr>
                                <th>ردیف</th>
                                <th>نام تشکل</th>
                                <th>تلفن</th>
                                <th>فاکس</th>
                                <th>حذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subetsos as $subetso)
                                <tr>
                                    <td>{{$subetso->id}}</td>
                                    <td>{{$subetso->NameTashakol}}</td>
                                    <td>{{$subetso->number}}</td>
                                    <td>{{$subetso->fox}}</td>
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
                                                            <h5 class="modal-title" id="exampleModalCenterTitle">حذف شهر </h5>
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
                                                            <form action="{{route('etsos.subetsos.destroy',[$etso,$subetso])}}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" class="btn btn-danger" value="بله حذف کن بره">
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
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- end::main content -->

    <!-- Plugin scripts -->
    @include('Panel.layout.script')
    </body>

@endsection

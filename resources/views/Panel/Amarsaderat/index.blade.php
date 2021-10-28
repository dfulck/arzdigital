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
                        <th>ردیف</th>
                        <th>استان</th>
                        <th>ارزش کل به دلار</th>
                        <th>میزان حجم (به کیلوگرم)</th>
                        <th>سال</th>
                        <th>جذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($amarsaderats as $amarsaderat)
                        <tr>
                            <td>{{$amarsaderat->id}}</td>
                            <td>{{$amarsaderat->ostan}}</td>
                            <td>{{$amarsaderat->price}}</td>
                            <td>{{$amarsaderat->weight}}</td>
                            <td>{{$amarsaderat->year}}</td>
                            <td>
                                <div class="accordion-body">
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
                                                    <form action="{{route('amarsaderat.destroy',$amarsaderat)}}" method="post">
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
                                    </span>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ردیف</th>
                        <th>استان</th>
                        <th>ارزش کل به دلار</th>
                        <th>میزان حجم (به کیلوگرم)</th>
                        <th>سال</th>
                        <th>جذف</th>
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

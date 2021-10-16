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
                        <div class="accordion accordion-success custom-accordion">
                            @foreach($forms as $form)
                                <div class="accordion-row">
                                    <a href="#" class="accordion-header">
                                        <span>{{$form->title}}</span>
                                        <i class="accordion-status-icon close fa fa-plus"></i>
                                        <i class="accordion-status-icon open fa fa-close"></i>
                                    </a>
                                    <div class="accordion-body">
                                        <a class="text-white text-center" href="{{url('/storage/app/'.$form->pdf)}}">دانلود پی دی اف</a>
                                        <span class="mx-3">
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
                                                    <form action="{{route('forms.destroy',$form)}}" method="post">
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
                                </div>
                            @endforeach
                        </div>
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

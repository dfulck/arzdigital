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
                                        <a class="text-white text-center btn btn-light" href="{{url('/storage/app/'.$form->pdf)}}">دانلود
                                            پی دی اف</a>
                                        <span class="mx-3">
                                             <form action="{{route('forms.destroy',$form)}}" method="post">
                                                 @csrf
                                                 @method('DELETE')
                                                 <button type="submit" class="btn btn-danger"> حذف کن بره
                                                 </button>
                                             </form>
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

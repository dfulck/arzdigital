
@section('css')
    <!-- Form wizard -->
    <link rel="stylesheet" href="{{url('')}}/vendors/form-wizard/jquery.steps.css" type="text/css">

    <style>
        .book-wrapper {
            width: 80%;
            display: flex;
            /* --primary: 0 aliceblue; */
            margin: 0 auto;
            padding: 0 1rem;
        }

        .book {
            border: 1px solid gainsboro;
            margin-left: 1rem;
            margin: 1rem;
            padding: 1rem;
        }
    </style>
@endsection

@extends('client.layout.SingleMaster')

@section('master')
    <br>
    <br>
    <br>

    <!-- begin::main content -->
    <main class="main-content">

        <div class="card">
            <div class="card-body">
                <div class="accordion accordion-success custom-accordion">
                    @foreach($booksvs as $booksv)
                        <div class="accordion-row">
                            <a href="#" class="accordion-header">
                                <span>{{$booksv->title}}</span>
                                <i class="accordion-status-icon close fa fa-plus"></i>
                                <i class="accordion-status-icon open fa fa-close"></i>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </main>
@endsection

@section('js')

    <script src="{{url('')}}/vendors/bundle.js"></script>

    <!-- Form wizard -->
    <script src="{{url('')}}/vendors/form-wizard/jquery.steps.min.js"></script>
    <script src="{{url('')}}/assets/js/examples/form-wizard.js"></script>

    <!-- DataTable -->
    <script src="{{url('')}}/assets/js/app.js"></script>


    <!-- Input mask -->
    <script src="{{url('')}}/vendors/input-mask/jquery.mask.js"></script>
    <script src="{{url('')}}/assets/js/examples/input-mask.js"></script>

    <!-- Tagsinput -->
    <script src="{{url('')}}/vendors/tagsinput/bootstrap-tagsinput.js"></script>
    <script src="{{url('')}}/assets/js/examples/tagsinput.js"></script>

    <script src="{{url('')}}/vendors/dataTable/jquery.dataTables.min.js"></script>
    <script src="{{url('')}}/vendors/dataTable/dataTables.bootstrap4.min.js"></script>
    <script src="{{url('')}}/vendors/dataTable/dataTables.responsive.min.js"></script>
    <script src="{{url('')}}/assets/js/examples/datatable.js"></script>
@endsection





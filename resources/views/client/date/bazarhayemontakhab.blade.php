<?php
$jason = file_get_contents('resources/views/Panel/Booksv/bazarhayemontakhab.json');
$jason_decode = json_decode($jason)->data;
?>

@section('css')
    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{url('')}}/vendors/bundle.css" type="text/css">

    <!-- Tagsinput -->
    <link rel="stylesheet" href="{{url('')}}/vendors/tagsinput/bootstrap-tagsinput.css" type="text/css">

    <!-- Form wizard -->
    <link rel="stylesheet" href="{{url('')}}/vendors/form-wizard/jquery.steps.css" type="text/css">
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
                <table id="example1" class="table table-striped table-bordered" width="100%">
                    <thead>
                    <tr>
                        <th>ردیف</th>
                        <th>ردیف</th>
                        <th>ردیف</th>
                        <th>ردیف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i=0;$i<=100;$i++)
                        <tr>
                            @for($q=0;$q<=3;$q++)
                                <td>{{$jason_decode[$i][$q]}}</td>
                            @endfor
                        </tr>
                    @endfor
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ردیف</th>
                        <th>ردیف</th>
                        <th>ردیف</th>
                        <th>ردیف</th>
                    </tr>
                    </tfoot>
                </table>
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




@extends('client.layout.SingleMaster')

@section('master')
    @section('css')
        <!-- Plugin styles -->
        <link rel="stylesheet" href="{{url('')}}/vendors/bundle.css" type="text/css">

        <!-- Tagsinput -->
        <link rel="stylesheet" href="{{url('')}}/vendors/tagsinput/bootstrap-tagsinput.css" type="text/css">

        <!-- Form wizard -->
        <link rel="stylesheet" href="{{url('')}}/vendors/form-wizard/jquery.steps.css" type="text/css">
    <style>

        span{
            color: #0b0b0b !important;
        }
        .more{
            display: none;
        }

    </style>
    @endsection
    <br>
    <br>
    <br>

    <!-- begin::main content -->
    <main class="main-content">

        <div class="card">
            <div class="card-body">
                {!! $response !!}
            </div>
        </div>

    </main>
@endsection





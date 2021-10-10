@extends('Panel.layout.master')

@section('master')

    <body class="dark">

    @include('Panel.layout.sidebar')

    @include('Panel.layout.navigation')


    <!-- begin::main content -->
    <main class="main-content">
        <div class="card">
            <div class="card-body">
              {!! $response !!}
            </div>
        </div>
    </main>
    <!-- end::main content -->

    @include('Panel.layout.script')
    </body>

@endsection


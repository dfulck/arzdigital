@extends('Panel.layout.master')

@section('master')
    <body class="dark">

    @include('Panel.layout.sidebar')

    @include('Panel.layout.navigation')


    <!-- begin::main content -->
    <main class="main-content">
        <div class="card">
            <div class="card-body">
                <form action="{{route('search.gavanin')}}" method="post">
                    @csrf
                    <label for="search">جستجو در کتاب قوانین صادرات و واردات سال 1399 </label>
                    <input class="search form-control" id="search" type="search" name="search">
                </form>
            </div>
        </div>
        @if($response)
        <div class="body">
            <h1>
                اخرین قوانین و مقررات مربوط به
                <form action="{{route('search.datagavanin',$search)}}" method="post">
                    @csrf
                    <input type="submit" value="{{$search}}" class="btn btn-danger">
                </form></h1>
        </div>
        <div class="card">
            <div class="card-body">
                {!! $response !!}
            </div>
        </div>
        @endif
    </main>
    <!-- end::main content -->
    @include('Panel.layout.script')
    </body>

@endsection

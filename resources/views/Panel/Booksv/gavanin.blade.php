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
                        <th>کد HS هشت رقمی </th>
                        <th>شرح کد تعرفه</th>
                        <th>حقوق ورودی</th>
                        <th>وضعیت</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($gavanins as $gavanin)
                        <tr>
                            <td>{{$gavanin->id}}</td>
                            <td>{{$gavanin->code}}</td>
                            <td>{{$gavanin->body}}</td>
                            <td>{{$gavanin->title}}</td>
                            <td>{{$gavanin->vaziat}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ردیف</th>
                        <th>کد HS هشت رقمی </th>
                        <th>شرح کد تعرفه</th>
                        <th>حقوق ورودی</th>
                        <th>وضعیت</th>
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

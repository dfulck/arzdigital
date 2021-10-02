@extends('Panel.layout.master')

@section('master')

    <body class="dark">

    @include('Panel.layout.sidebar')

    @include('Panel.layout.navigation')


    <!-- begin::main content -->
    <main class="main-content">
        <div class="row">
            <div class="col-md-12">
                @foreach($etsos as $etso)
                <div class="card">
                    <div class="card-body">
                        <table id="example1" class="table table-striped table-bordered" width="100%">
                            <h5 class="form-control text-center text-white">{{$etso->title}}</h5>
                            <thead>
                            <tr>
                                <th>ردیف</th>
                                <th>نام تشکل</th>
                                <th>تلفن</th>
                                <th>فاکس</th>
                                <th>حذف</th>
                            </tr>
                            </thead>
                            @foreach($etso->subetsos() as $subetso)
                            <tbody>
                                <tr>
                                    <td>{{$subetso->id}}</td>
                                    <td>{{$subetso->NameTashakol}}</td>
                                    <td>{{$subetso->number}}</td>
                                    <td>{{$subetso->fox}}</td>
                                    <td>
                                        <form action="{{route('etsos.subetsos.destroy',[$subetso,$etso])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-danger" value="حذف">
                                        </form></td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
    <!-- end::main content -->

    <!-- Plugin scripts -->
    @include('Panel.layout.script')
    </body>

@endsection

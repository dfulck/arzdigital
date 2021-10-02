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
                        <form action="{{route('amarsaderat.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">استان</label>
                                <input name="ostan" type="text" class="form-control text-left" id="exampleInputEmail1"
                                       dir="ltr">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">میزان حجم معاملات به دلار</label>
                                <input name="price" type="text" class="form-control text-left" id="exampleInputEmail1"
                                        dir="ltr">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">میزان وزن صادر شده</label>
                                <input name="weight" type="text" class="form-control text-left" id="exampleInputEmail1"
                                      dir="ltr">
                            </div>
                            <div class="form-group">
                                <select class="form-control"  name="year" id="year">
                                    @for($i=1390;$i<=1401;$i++)
                                    <option class="form-control" value="{{$i}}">{{$i}}</option>
                                        @endfor
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-block btn-primary" value="ارسال">
                            </div>
                        </form>
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

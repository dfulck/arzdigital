@extends('Panel.layout.master')

@section('master')

    <body class="dark">


    @include('Panel.layout.sidebar')

    @include('Panel.layout.navigation')


    <main class="main-content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-body">
                            <h6 class="card-title">اضافه کردن بارکد</h6>
                            <form action="{{route('barcodes.store')}}"  method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="code">شماره بارکد</label>
                                    <input type="text" name="code" class="form-control text-left"
                                           id="code">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="ایجاد">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    @include('Panel.layout.script')

    </body>
@endsection

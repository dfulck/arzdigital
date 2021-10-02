@extends('Panel.layout.master')

@section('master')
    <body>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5>میتوانید در این قسمت به صورت رندوم فیلم مورد نطرتان را پیدا کرده و به تماشای آن بپردازید </h5>
                    <div class="pt-4 pb-4 text-center">
                        <button type="button" class="btn btn-primary sweet-ajax">جستجوی فیلم با یک حرف انگلیسی</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




    @include('Panel.layout.script')
    </body>

@endsection

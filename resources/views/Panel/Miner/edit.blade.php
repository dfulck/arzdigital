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
                            <form action="{{route('miners.update',$miner)}}" enctype="multipart/form-data" method="post">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">عنوان1</label>
                                    <input value="{{$miner->title}}" type="text" name="title" class="form-control text-left"
                                           id="exampleFormControlInput1" dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">عنوان 2</label>
                                    <input value="{{$miner->title1}}" type="text" name="title1" class="form-control text-left"
                                           id="exampleFormControlInput1" dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">نام دستگاه</label>
                                    <input value="{{$miner->name_dastgah}}" type="text" name="name_dastgah" class="form-control text-left"
                                           id="exampleFormControlInput1" dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">شماره بارکد محصول</label>
                                    <input value="{{$miner->barkod_mahsol}}" type="text" name="barkod_mahsol" class="form-control text-left"
                                           id="exampleFormControlInput1" dir="ltr">
                                </div>
                                <div class="form-group">
                                    <img width="100px" height="100px" src="{{url('/storage/app/'.$miner->hologram)}}" alt="image">
                                    <label for="tasvirhologram" class="form-control">تصویر هولوگرام </label>
                                    <input type="file" name="hologram" hidden class="form-control-file" id="tasvirhologram">
                                </div>
                                <div class="form-group">
                                    <img width="100px" height="100px"  src="{{url('/storage/app/'.$miner->logo)}}" alt="image">
                                    <label for="tasvirlogo" class="form-control">تصویر لوگو</label>
                                    <input type="file" name="logo" hidden class="form-control-file" id="tasvirlogo">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="ویرایش">
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

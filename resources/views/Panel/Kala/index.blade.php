@extends('Panel.layout.master')
@section('master')
    <body class="dark">
    @include('Panel.layout.sidebar')
    @include('Panel.layout.navigation')
    <main class="main-content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <button class="btn btn-block btn-success"><a href="{{route('kalas.create')}}">ایجاد </a>
                    </button>
                    <div class="card-body">
                        @foreach($kalas as $kala)
                            <div class="card-group">
                                <div class="card">
                                    <img height="300px" width="70%" src="{{url('/storage/app/'.$kala->image)}}"
                                         class="card-img-top"
                                         alt="image">
                                    <div class="card-body">
                                        <h2 class="card-title">{{$kala->title}}</h2>
                                        <ul class="">
                                            <li><span>رتبه ایران در تولید:</span><span>{{$kala->Unit}}</span></li>
                                            <li>
                                                <span>تعداد کدهای تعرفه گروه کالا:</span><span>{{$kala->Top_importing_countries}}</span>
                                            </li>
                                            <li>
                                                <span>ارزش واردات جهانی:</span><span>{{$kala->Top_exporting_countries}}</span>
                                            </li>
                                            <li>
                                                <span>میزان تولید (تن):</span><span>{{$kala->Total_volume_of_world_trade}}</span>
                                            </li>
                                            <li>
                                                <span>ارزش صادرات ایران:</span><span>{{$kala->Value_of_Iranian_imports}}</span>
                                            </li>
                                            <li>
                                                <span>ارزش صادرات جهانی:</span><span>{{$kala->Value_of_Iranian_exports}}</span>
                                            </li>
                                            <li><span>ارزش واردات ایران:</span><span>{{$kala->Production_rate}}</span>
                                            </li>
                                            <li>
                                                <span>حجم کل تجارت جهانی:</span><span>{{$kala->Global_import_value}}</span>
                                            </li>
                                            <li>
                                                <span class="mx-2">5 کشور عمده صادرکننده: </span><span>{{$kala->Iran_rank_in_production}}</span>
                                            </li>
                                            <li>
                                                <span class="mx-2">5 کشور عمده واردکننده: </span><span>{{$kala->Number_of_commodity_group_tariff_codes}}</span>
                                            </li>
                                        </ul>
                                        <hr>
                                        <h4>محصولات مرتبط در این صنایع</h4>
                                        <p class="card-text">{!! $kala->body !!}</p>
                                        <hr>
                                        <h5>شماره تماس</h5>
                                        <p class="card-text">{{$kala->number}}</p>
                                        <hr>
                                        <p class="card-text">
                                            <small class="text-muted">{{$kala->created_at}}</small>
                                        </p>
                                    </div>
                                    <a href="{{route('kalas.edit',$kala)}}" class="btn btn-info btn-block">ویرایش این
                                        مطلب</a>
                                    <form class="mt-3" action="{{route('kalas.destroy',$kala)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input class="btn btn-danger btn-block" type="submit" value="حدف این مطلب ">
                                    </form>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('Panel.layout.script')
    </body>
@endsection

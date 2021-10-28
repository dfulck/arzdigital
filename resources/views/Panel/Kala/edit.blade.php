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
                            <h6 class="card-title">اضافه کردن کاتالوگ</h6>
                            <form action="{{route('kalas.update',$kala)}}" enctype="multipart/form-data" method="post">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">عنوان</label>
                                    <input value="{{$kala->title}}" type="text" name="title" class="form-control text-left"
                                           id="exampleFormControlInput1"  dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">واحد</label>
                                    <input value="{{$kala->Unit}}" type="text" name="Unit" class="form-control text-left"
                                           id="exampleFormControlInput1"  dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">رتبه ایران در تولید</label>
                                    <input value="{{$kala->Top_importing_countries}}" type="text" name="Top_importing_countries" class="form-control text-left"
                                           id="exampleFormControlInput1"  dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">تعداد کدهای تعرفه گروه کالا</label>
                                    <input value="{{$kala->Top_exporting_countries}}" type="text" name="Top_exporting_countries" class="form-control text-left"
                                           id="exampleFormControlInput1"  dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">ارزش واردات جهانی</label>
                                    <input value="{{$kala->Total_volume_of_world_trade}}" type="text" name="Total_volume_of_world_trade" class="form-control text-left"
                                           id="exampleFormControlInput1"  dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">میزان تولید (تن)</label>
                                    <input value="{{$kala->Value_of_Iranian_imports}}" type="text" name="Value_of_Iranian_imports" class="form-control text-left"
                                           id="exampleFormControlInput1"  dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">ارزش صادرات ایران</label>
                                    <input value="{{$kala->Global_export_value}}" type="text" name="Global_export_value" class="form-control text-left"
                                           id="exampleFormControlInput1"  dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">ارزش صادرات جهانی</label>
                                    <input value="{{$kala->Value_of_Iranian_exports}}" type="text" name="Value_of_Iranian_exports" class="form-control text-left"
                                           id="exampleFormControlInput1"  dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">ارزش واردات ایران</label>
                                    <input value="{{$kala->Production_rate}}" type="text" name="Production_rate" class="form-control text-left"
                                           id="exampleFormControlInput1"  dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">حجم کل تجارت جهانی</label>
                                    <input value="{{$kala->Global_import_value}}" type="text" name="Global_import_value" class="form-control text-left"
                                           id="exampleFormControlInput1"  dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">5 کشور عمده صادرکننده</label>
                                    <input value="{{$kala->Iran_rank_in_production}}" type="text" name="Iran_rank_in_production" class="form-control text-left"
                                           id="exampleFormControlInput1"  dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">5 کشور عمده واردکننده</label>
                                    <input value="{{$kala->Number_of_commodity_group_tariff_codes}}" type="text" name="Number_of_commodity_group_tariff_codes" class="form-control text-left"
                                           id="exampleFormControlInput1"  dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">شماره تلفن </label>
                                    <input value="{{$kala->number}}" type="text" name="number" class="form-control text-left"
                                           id="exampleFormControlInput1"  dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">شرج و نوضیحات اضافی</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">ویرایشگر کلاسیک</h6>
                                            <textarea name="body" id="editor-demo1">{{$kala->body}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <img height="300px" width="70%" src="{{url('/storage/app/'.$kala->image)}}" class="card-img-top"
                                         alt="image">
                                    <label for="exampleFormControlFile1">تصویر کاتالوگ</label>
                                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
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

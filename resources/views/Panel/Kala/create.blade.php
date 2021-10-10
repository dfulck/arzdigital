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
                            <form action="{{route('kalas.store')}}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">عنوان</label>
                                    <input type="text" name="title" class="form-control text-left"
                                           id="exampleFormControlInput1"  dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">واحد</label>
                                    <input type="text" name="Unit" class="form-control text-left"
                                           id="exampleFormControlInput1"  dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">رتبه ایران در تولید</label>
                                    <input type="text" name="Top_importing_countries" class="form-control text-left"
                                           id="exampleFormControlInput1"  dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">تعداد کدهای تعرفه گروه کالا</label>
                                    <input type="text" name="Top_exporting_countries" class="form-control text-left"
                                           id="exampleFormControlInput1"  dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">ارزش واردات جهانی</label>
                                    <input type="text" name="Total_volume_of_world_trade" class="form-control text-left"
                                           id="exampleFormControlInput1"  dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">میزان تولید (تن)</label>
                                    <input type="text" name="Value_of_Iranian_imports" class="form-control text-left"
                                           id="exampleFormControlInput1"  dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">ارزش صادرات ایران</label>
                                    <input type="text" name="Global_export_value" class="form-control text-left"
                                           id="exampleFormControlInput1"  dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">ارزش صادرات جهانی</label>
                                    <input type="text" name="Value_of_Iranian_exports" class="form-control text-left"
                                           id="exampleFormControlInput1"  dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">ارزش واردات ایران</label>
                                    <input type="text" name="Production_rate" class="form-control text-left"
                                           id="exampleFormControlInput1"  dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">حجم کل تجارت جهانی</label>
                                    <input type="text" name="Global_import_value" class="form-control text-left"
                                           id="exampleFormControlInput1"  dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">5 کشور عمده صادرکننده</label>
                                    <input type="text" name="Iran_rank_in_production" class="form-control text-left"
                                           id="exampleFormControlInput1"  dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">5 کشور عمده واردکننده</label>
                                    <input type="text" name="Number_of_commodity_group_tariff_codes" class="form-control text-left"
                                           id="exampleFormControlInput1"  dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">شماره تلفن </label>
                                    <input type="text" name="number" class="form-control text-left"
                                           id="exampleFormControlInput1"  dir="ltr">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">شرج و نوضیحات اضافی</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">ویرایشگر کلاسیک</h6>
                                            <textarea name="body" id="editor-demo1"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">تصویر کاتالوگ</label>
                                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
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

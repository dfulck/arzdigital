@extends('Panel.layout.master')

@section('master')


<body>


@include('Panel.layout.sidebar')

@include('Panel.layout.navigation')

<!-- begin::main content -->
<main class="main-content">

    <div class="row">
        <div class="col-md-6">

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Select2</h6>
                    <div class="form-group">
                        <select class="js-example-basic-single">
                            <option>انتخاب</option>
                            <option value="France">ایران</option>
                            <option value="Brazil">برزیل</option>
                            <option value="Yemen">ایتالیا</option>
                            <option value="United States">آلمان</option>
                            <option value="China">چین</option>
                            <option value="Argentina">آرژانتین</option>
                            <option value="Bulgaria">اسپانیا</option>
                        </select>
                    </div>
                    <p>چند انتخاب</p>
                    <div class="form-group">
                        <select class="js-example-basic-single" multiple>
                            <option>انتخاب</option>
                            <option value="France">ایران</option>
                            <option selected value="Brazil">برزیل</option>
                            <option selected value="Yemen">ایتالیا</option>
                            <option selected value="United States">آلمان</option>
                            <option value="China">چین</option>
                            <option value="Argentina">آرژانتین</option>
                            <option value="Bulgaria">اسپانیا</option>
                        </select>
                    </div>
                    <p>چند انتخاب و دسته بندی شده</p>
                    <select class="js-example-basic-single" multiple>
                        <option>انتخاب</option>
                        <optgroup label="شهرها">
                            <option value="Wonosari">تبریز</option>
                            <option value="Antipolo">تهران</option>
                            <option value="Lesuhe">اصفهان</option>
                            <option selected value="Sunzhuang">شیراز</option>
                            <option value="Hongchuan">همدان</option>
                        </optgroup>
                        <optgroup label="کشورها">
                            <option value="France">ایران</option>
                            <option selected value="Brazil">برزیل</option>
                            <option selected value="Yemen">ایتالیا</option>
                            <option selected value="United States">آلمان</option>
                            <option value="China">چین</option>
                            <option value="Argentina">آرژانتین</option>
                            <option value="Bulgaria">اسپانیا</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">انتخاب‌گر بازه</h6>
                    <p>تنظیم مقدار حداقل، حداکثر و شروع</p>
                    <div class="form-group">
                        <input type="text" id="demo_1">
                    </div>
                    <p>تنظیم نوع به double، مشخص کردن بازه، نمایش توری، افزودن پسوند «تومان»</p>
                    <div class="form-group">
                        <input type="text" id="demo_2">
                    </div>
                    <p>اضافه کردن قدم</p>
                    <div class="form-group">
                        <input type="text" id="demo_3">
                    </div>
                    <p>اجبار به مقادیر اعشاری، با استفاده از قدم اعشاری 0.1</p>
                    <div class="form-group">
                        <input type="text" id="demo_4">
                    </div>
                    <p>آرایه مقادیر همه چیز میتواند باشد، حتی متن</p>
                    <div class="form-group">
                        <input type="text" id="demo_5">
                    </div>
                    <div class="card-title mt-4">دموی پیشرفته</div>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
                    <div class="form-group">
                        <input type="text" id="demo_6">
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6">

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">ورودی برچسب</h6>
                    <input type="text" class="form-control tagsinput" placeholder="برچسب ها" value="HTML5, CSS3, JavaScript, Laravel">
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">ماسک ورودی</h6>
                    <div class="form-group">
                        <label>تلفن</label>
                        <input type="text" data-input-mask="phone" class="form-control text-left" placeholder="(555) 555-5555" dir="ltr">
                    </div>
                    <div class="form-group">
                        <label>تاریخ</label>
                        <input type="text" data-input-mask="date" class="form-control text-left" placeholder="1398/12/05" dir="ltr">
                    </div>
                    <div class="form-group">
                        <label>زمان</label>
                        <input type="text" data-input-mask="time" class="form-control text-left" placeholder="12:25:45" dir="ltr">
                    </div>
                    <div class="form-group">
                        <label>پول</label>
                        <input type="text" data-input-mask="money" class="form-control text-left" placeholder="54,28" dir="ltr">
                    </div>
                    <div class="form-group">
                        <label>آدرس IP</label>
                        <input type="text" data-input-mask="ip_address" class="form-control text-left" placeholder="192.168.544.444" dir="ltr">
                    </div>
                </div>
            </div>

        </div>
    </div>

</main>
<!-- end::main content -->

<!-- Plugin scripts -->
<script src="vendors/bundle.js"></script>

<!-- Select2 -->
<script src="vendors/select2/js/select2.min.js"></script>
<script src="assets/js/examples/select2.js"></script>

<!-- Range slider -->
<script src="vendors/range-slider/js/ion.rangeSlider.min.js"></script>
<script src="assets/js/examples/range-slider.js"></script>

<!-- Input mask -->
<script src="vendors/input-mask/jquery.mask.js"></script>
<script src="assets/js/examples/input-mask.js"></script>

<!-- Tagsinput -->
<script src="vendors/tagsinput/bootstrap-tagsinput.js"></script>
<script src="assets/js/examples/tagsinput.js"></script>

<!-- App scripts -->
<script src="assets/js/app.js"></script>
</body>

@endsection

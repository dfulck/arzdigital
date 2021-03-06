<!-- end::page loader -->
@include('client.layout.notification')
<!-- begin::sidebar user profile -->
<div class="sidebar" id="userProfile">
    <div class="text-center p-4">
        <figure class="avatar avatar-state-success avatar-lg mb-4">
            <img src="{{url('/storage/app/'.auth()->user()->image)}}" class="rounded-circle" alt="image">
        </figure>
        <h4 class="text-primary m-b-10">{{$user->name}}</h4>
        <p class="text-muted d-flex align-items-center justify-content-center line-height-0 mb-0">
            {{$user->UserRoleText()}}<a href="#" class="ml-2" data-toggle="tooltip" title="تنظیمات" data-sidebar-open="#settings"> <i class="ti-settings"></i> </a>
        </p>
    </div>
    <hr class="m-0">
    <div class="p-4">
        <div class="mb-4">
            <h6 class="font-size-13 mb-3">شهر</h6>
            <p class="text-muted">{{$user->city}} / ایران</p>
        </div>
        <div class="mb-4">
            <h6 class="font-size-13 mb-3">تنظیمات</h6>
            <div class="form-group">
                <div class="form-item custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch11">
                    <label class="custom-control-label" for="customSwitch11">مسدود کردن</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-item custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" checked id="customSwitch12">
                    <label class="custom-control-label" for="customSwitch12">بیصدا کردن</label>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end::sidebar user profile -->

<!-- begin::sidebar settings -->
<div class="sidebar" id="settings">
    <header>
        <i class="ti-settings"></i> تنظیمات
    </header>
    <div class="p-4">
        <div class="mb-3">
            <h6 class="font-size-13 mb-3 text-muted">سیستم</h6>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between p-l-r-0 p-t-b-5">
                    <span>به روز رسانی خودکار</span>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                        <label class="custom-control-label" for="customSwitch1"></label>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between p-l-r-0 p-t-b-5">
                    <span>وضعیت کنونی</span>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch2" checked>
                        <label class="custom-control-label" for="customSwitch2"></label>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between p-l-r-0 p-t-b-5">
                    <span>پیشنهادات کاربران</span>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                        <label class="custom-control-label" for="customSwitch3"></label>
                    </div>
                </li>
            </ul>
        </div>
        <div class="mb-3">
            <h6 class="font-size-13 mb-3 text-muted">حساب کاربری</h6>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between p-l-r-0 p-t-b-5">
                    <span>امنیت حساب کاربری ارشد</span>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch4">
                        <label class="custom-control-label" for="customSwitch4"></label>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between p-l-r-0 p-t-b-5">
                    <span>حفاظت حساب کاربری</span>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch5" checked>
                        <label class="custom-control-label" for="customSwitch5"></label>
                    </div>
                </li>
            </ul>
        </div>
        <div class="mb-3">
            <h6 class="font-size-13 mb-3 text-muted">اعلان ها</h6>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between p-l-r-0 p-t-b-5">
                    <span>اعلان های مرورگر</span>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch6">
                        <label class="custom-control-label" for="customSwitch6"></label>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between p-l-r-0 p-t-b-5">
                    <span>اعلان های موبایل</span>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch7">
                        <label class="custom-control-label" for="customSwitch7"></label>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between p-l-r-0 p-t-b-5">
                    <span>اشتراک ایمیل</span>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch8">
                        <label class="custom-control-label" for="customSwitch8"></label>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between p-l-r-0 p-t-b-5">
                    <span>اعلان های sms</span>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch9" checked>
                        <label class="custom-control-label" for="customSwitch9"></label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end::sidebar settings -->

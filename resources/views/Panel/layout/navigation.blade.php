<!-- begin::navigation -->
<div class="navigation">
    <div class="navigation-icon-menu">
        <ul>
            <li class="active" data-toggle="tooltip" title="داشبورد">
                <a href="#navigationDashboards" title="داشبوردها">
                    <i class="icon ti-pie-chart"></i>
                    <span class="badge badge-warning">2</span>
                </a>
            </li>
            <li data-toggle="tooltip" title="مدیریت منو ها">
                <a href="#navigationApps" title="دسته بندی ها">
                    <i class="icon ti-package"></i>
                </a>
            </li>
            <li data-toggle="tooltip" title="مدیریت طاهر سایت">
                <a href="#navigationPlugins">
                    <i class="icon ti-brush-alt"></i>
                </a>
            </li>
            <li data-toggle="tooltip" title="مدیریت مطالب">
                <a href="#navigationElements">
                    <i class="icon ti-layers"></i>
                </a>
            </li>
            <li  data-toggle="tooltip" title="پروفایل کاربری">
                <a href="#navigationPages" title="پروفایل کاربری">
                    <i class="icon ti-user"></i>
                </a>
            </li>
        </ul>
        <ul>
            <li data-toggle="tooltip" title="dashboard">
                <a href="{{route('users.dashboard')}}" class="go-to-page">
                    <i class="icon ti-settings"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="navigation-menu-body">
        <ul id="navigationDashboards" class="navigation-active">
            <li class="navigation-divider">داشبورد</li>
            <li class="navigation-divider"><a href="{{route('users.show',$user)}}">پروفایل کاربری</a></li>
            <li class="active" title="خروج">
                <form action="{{route('users.logout')}}" method="post">
                    @csrf
                    <input type="submit" class="mx-2 btn btn-danger" value="خروج">
                    <i class="icon ti-power-off"></i>
                </form>
            </li>
            <li>
                <a href="#">لیست سرگرمی ها</a>
                <ul>
                   <li><a href="{{route('game')}}">فیلم شانسی</a></li>
                </ul>
            </li>
            <li>
                <a href="#">کتاب مقررات صادرات و واردات</a>
                <ul>
                    <li><a href="{{route('booksvs.create')}}">ایجاد کتاب </a></li>
                    <li><a href="{{route('booksvs.index')}}">لیست کتاب ها</a></li>
                    <li><a href="{{route('gaaninbooks')}}">کتاب فوانین سال 1399</a></li>
                    <li><a href="{{route('amarsaderat.create')}}">ایجاد آمار صادرات</a></li>
                    <li><a href="{{route('amarsaderat.index')}}">لیست آمار صادرات</a></li>
                    <li><a href="{{route('bazarhayemontakhab')}}">بازارهای منتخب</a></li>
                    <li><a href="{{route('Erth.data')}}">نقشه تجارت</a></li>
                    <li><a href="{{route('price.callector')}}">ماشین حساب </a></li>
                    <li><a href="{{route('cataloges')}}">ایجاد کاتالوگ برای محصولات خود</a></li>
                    <li><a href="{{route('kalas.index')}}">مدیریت راهنمای کالا و خدمات تجاری</a></li>
                    <li><a href="{{route('etehadie')}}">اتحادیه ها و تشکل های صادراتی</a></li>
                    <li><a href="{{route('otaghayebazargani')}}">اتاق های بازرگانی صنایع، معادن و کشاورزی ایران</a></li>
                    <li><a href="{{route('paygahetelaresani')}}">سازمان های صنعت، معدن و تجارت استان</a></li>
                </ul>
            </li>
            <li>
                <a href="#">لیست شهر های عضو اتحادیه</a>
                <ul>
                    <li><a href="{{route('etsos.create')}}">اضافه کردن شهر</a></li>
                    <li><a href="{{route('etsos.index')}}">برای مدیریت لیست کلیک کنید</a></li>
                    <li><a href="{{route('list.esto')}}">لیست کل</a></li>
                </ul>
            </li>
        </ul>
        <ul id="navigationApps">
            <li class="navigation-divider">دسته بندی ها</li>
            <li>
                <a href="#">مدیریت منوی سایت</a>
                <ul>
                    <li><a href="{{route('categories.create')}}">ایجاد دسته بندی برای منو</a></li>
                    <li><a href="{{route('categories.index')}}">مدیریت دسته بندی ها (اضافه کردن دسته های فرزند)</a></li>
                </ul>
            </li>
            <li>
                <a href="#">برچسب های سایت </a>
                <ul>
                    <li><a href="{{route('tags.create')}}">ایجاد برچسب</a></li>
                    <li><a href="{{route('tags.index')}}">لیست برچسب ها</a></li>
                </ul>
            </li>
            <li>
                <a href="#">تحلیل ارز ها</a>
                <ul>
                    <li><a href="{{route('analyses.create')}}">ایجاد تحلیل</a></li>
                    <li><a href="{{route('analyses.index')}}">مدیریت تحلیل ها </a></li>
                </ul>
            </li>
        </ul>
        <ul id="navigationPlugins">
            <li class="navigation-divider"> مدیریت طاهر سایت</li>
            <li>
                <a href="#">ایحاد لینک برای فوتر</a>
                <ul>
                    <li><a href="{{route('subfooters.create')}}">اضافه کردن لینک</a></li>
                    <li><a href="{{route('subfooters.index')}}">مدیریت لینک ها</a></li>
                </ul>
            </li>
            <li>
                <a href="#">مدیرت فوتر سایت</a>
                <ul>
                    <li><a href="{{route('footers.create')}}">اضافه کردن منوی پایین سایت</a></li>
                    <li><a href="{{route('footers.index')}}">مدیریت لیست (ویرایش و اضافه کردن)</a></li>
                </ul>
            </li>
        </ul>
        <ul id="navigationElements">
            <li class="navigation-divider">مدیریت مطالب</li>
            <li>
                <a href="#">مطالب و اخبار سایت</a>
                <ul>
                    <li><a href="{{route('leaders.create')}}">اضافه کردن دسته برای مطالب </a></li>
                    <li><a href="{{route('leaders.index')}}">مدیریت و اضافه کردن خبر جدید</a></li>
                    <li><a href="{{route('contents.index')}}">لبست تمامی مطالب و خبر ها</a></li>
                </ul>
            </li>
            <li>
                <a href="#">ایجاد پست </a>
                <ul>
                    <li><a href="{{route('subcategories.index')}}">اضافه کردن پست برای دسته بندی های فرزند</a></li>
                </ul>
            </li>
            <li>
                <a href="#">گالری ویدیو ها</a>
                <ul>
                    <li><a href="{{route('videocats.create')}}">ایجاد دسته بندی برای ویدیو ها </a></li>
                    <li><a href="{{route('videocats.index')}}">مدیریت دسته بندی های مرنبط (اضافه کردن و...)</a></li>
                </ul>
            </li>
            <li>
                <a href="#">مطرات کاربران</a>
                <ul>
                    <li><a href="{{route('questions.index')}}">لیست نطرات</a></li>
                </ul>
            </li>
        </ul>
        <ul id="navigationPages">
            <li>
                <a href="#">دسترسی ها</a>
                <ul>
                    <li><a href="{{route('roles.create')}}">ایجاد دسترسی برای کاربران</a></li>
                    <li><a href="{{route('roles.index')}}">لیست دسترسی ها </a></li>
                </ul>
            </li>
            <li>
                <a href="#">ارسال ایمیل به کاربران</a>
                <ul>
                    <li><a href="{{route('massages.create')}}">ایجاد</a></li>
                    <li><a href="{{route('massages.index')}}">لیست</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- end::navigation -->

<!-- begin::header -->
<div class="header">

    <!-- begin::header logo -->
    <div class="header-logo">
        <a href="index.html">
            <img class="large-logo" src="{{url('/assets/media/image/logo.png')}}" alt="image">
            <img class="small-logo" src="{{url('/assets/media/image/logo-sm.png')}}" alt="image">
            <img class="dark-logo" src="{{url('/assets/media/image/logo-dark.png')}}" alt="image">
        </a>
    </div>
    <!-- end::header logo -->

    <!-- begin::header body -->
    <div class="header-body">

        <div class="header-body-right">
            <!-- begin::navbar main body -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="جستجو">
                            <div class="input-group-append">
                                <button class="btn btn-light" type="button">
                                    <i class="ti-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                        <i class="ti-plus"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                        <div class="p-3">
                            <h6 class="font-size-13 m-b-15">دسترسی سریع</h6>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#">
                                        <div
                                            class="d-flex flex-column font-size-13 bg-danger-bright bg-hover pt-3 pb-3 border-radius-1 text-danger text-center mb-3">
                                            <i class="fa fa-sitemap mb-2 font-size-20"></i>
                                            دسته‌بندی ها
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="#">
                                        <div
                                            class="d-flex flex-column font-size-13 bg-info-bright bg-hover pt-3 pb-3 border-radius-1 text-info text-center mb-3">
                                            <i class="ti-game mb-2 font-size-20"></i>
                                            محصولات
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="#">
                                        <div
                                            class="d-flex flex-column font-size-13 bg-warning-bright bg-hover pt-3 pb-3 border-radius-1 text-warning text-center">
                                            <i class="ti-bar-chart-alt mb-2 font-size-20"></i>
                                            گزارشات
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="#">
                                        <div
                                            class="d-flex flex-column font-size-13 bg-secondary-bright bg-hover pt-3 pb-3 border-radius-1 text-secondary text-center">
                                            <i class="fa fa-share mb-2 font-size-20"></i>
                                            سایر
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link nav-link-notify" data-toggle="dropdown">
                        <i class="ti-comment"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                        <div class="p-4 text-center" data-backround-image="assets/media/image/image1.png">
                            <h6 class="m-b-0">پیام ها</h6>
                            <small class="font-size-13 opacity-7 d-inline-block m-t-5">1 پیام خوانده نشده</small>
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                <li>
                                    <a href="#"
                                       class="p-3 list-group-item d-flex align-items-center link-1 hide-show-toggler">
                                        <div>
                                            <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-success rounded-circle">آ</span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 d-flex justify-content-between primary-font">
                                                استیو راجرز
                                                <i title="علامت خوانده نشده" data-toggle="tooltip"
                                                   class="hide-show-toggler-item fa fa-check font-size-13"></i>
                                            </h6>
                                            <span class="text-muted m-r-10 small">08:50 ب.ظ</span>
                                            <span class="text-muted small line-height-24">لورم ایپسوم متن ساختگی</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="p-3 list-group-item d-flex align-items-center link-1 bg-secondary-bright hide-show-toggler">
                                        <div>
                                            <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-primary rounded-circle">ج</span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 d-flex justify-content-between primary-font">
                                                جان اسنو
                                                <i title="علامت خوانده شده" data-toggle="tooltip"
                                                   class="hide-show-toggler-item fa fa-circle-o font-size-13"></i>
                                            </h6>
                                            <span class="text-muted m-r-10 small">10:23 ب.ظ</span>
                                            <span class="text-muted small line-height-24">لورم ایپسوم متن ساختگی</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="p-3 list-group-item d-flex align-items-center link-1 hide-show-toggler">
                                        <div>
                                            <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-danger rounded-circle">ک</span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 d-flex justify-content-between primary-font">
                                                استیو جابز
                                                <i title="علامت خوانده نشده" data-toggle="tooltip"
                                                   class="hide-show-toggler-item fa fa-check font-size-13"></i>
                                            </h6>
                                            <span class="text-muted m-r-10 small">08:50 ب.ظ</span>
                                            <span class="text-muted small line-height-24">لورم ایپسوم متن ساختگی</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="p-3 list-group-item d-flex align-items-center link-1 hide-show-toggler">
                                        <div>
                                            <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-info rounded-circle">ن‌پ</span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 d-flex justify-content-between primary-font">
                                                ناتالی پورتمن
                                                <i title="علامت خوانده نشده" data-toggle="tooltip"
                                                   class="hide-show-toggler-item fa fa-check font-size-13"></i>
                                            </h6>
                                            <span class="text-muted m-r-10 small">20:13 ب.ظ</span>
                                            <span class="text-muted small line-height-24">لورم ایپسوم متن ساختگی</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-3 text-right">
                            <ul class="list-inline small">
                                <li class="list-inline-item">
                                    <a href="#">علامت خوانده شده به همه</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                        <i class="ti-bell"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                        <div class="p-4 text-center" data-backround-image="assets/media/image/image1.png">
                            <h6 class="m-b-0">اعلان ها</h6>
                            <small class="font-size-13 opacity-7">2 اعلان خوانده نشده</small>
                        </div>
                        <div class="p-3">
                            <div class="timeline">
                                <div class="timeline-item">
                                    <div>
                                        <figure class="avatar avatar-state-danger avatar-sm m-r-15 bring-forward">
												<span class="avatar-title bg-info-bright text-info rounded-circle">
													<i class="fa fa-file-text-o font-size-20"></i>
												</span>
                                        </figure>
                                    </div>
                                    <div>
                                        <p class="m-b-5">
                                            <a href="#">استیو جابز</a> یک ضمیمه جدید به تیکت افزود
                                            <a href="#">گزارش باگ نرم افزار</a>
                                        </p>
                                        <small class="text-muted">
                                            <i class="fa fa-clock-o m-r-5"></i> 8 ساعت پیش
                                        </small>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div>
                                        <figure class="avatar avatar-state-danger avatar-sm m-r-15 bring-forward">
												<span
                                                    class="avatar-title bg-warning-bright text-warning rounded-circle">
													<i class="fa fa-money font-size-20"></i>
												</span>
                                        </figure>
                                    </div>
                                    <div>
                                        <p class="m-b-5">
                                            <a href="#">کاترین</a> یک تیکت جدید ثبت کرد
                                            <a href="#">نحوه پرداخت</a>
                                        </p>
                                        <small class="text-muted">
                                            <i class="fa fa-clock-o m-r-5"></i> دیروز
                                        </small>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div>
                                        <figure class="avatar avatar-sm m-r-15 bring-forward">
												<span
                                                    class="avatar-title bg-success-bright text-success rounded-circle">
													<i class="fa fa-dollar font-size-20"></i>
												</span>
                                        </figure>
                                    </div>
                                    <div>
                                        <p class="m-b-5">
                                            <a href="#">کاترین</a> تنظیمات دسته تیکت را تغییر داد
                                            <a href="#">پرداخت و صورتحساب</a>
                                        </p>
                                        <small class="text-muted">
                                            <i class="fa fa-clock-o m-r-5"></i> 1 روز پیش
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 text-right">
                            <ul class="list-inline small">
                                <li class="list-inline-item">
                                    <a href="#">علامت خوانده شده به همه</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link bg-none" data-sidebar-open="#userProfile">
                        <div>
                            <figure class="avatar avatar-state-success avatar-sm">
                                <img src="{{url('/storage/app/'.auth()->user()->image)}}" class="rounded-circle" alt="image">
                            </figure>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- end::navbar main body -->

            <div class="d-flex align-items-center">
                <!-- begin::navbar navigation toggler -->
                <div class="d-xl-none d-lg-none d-sm-block navigation-toggler">
                    <a href="#">
                        <i class="ti-menu"></i>
                    </a>
                </div>
                <!-- end::navbar navigation toggler -->

                <!-- begin::navbar toggler -->
                <div class="d-xl-none d-lg-none d-sm-block navbar-toggler">
                    <a href="#">
                        <i class="ti-arrow-down"></i>
                    </a>
                </div>
                <!-- end::navbar toggler -->
            </div>
        </div>

    </div>
    <!-- end::header body -->

</div>
<!-- end::header -->



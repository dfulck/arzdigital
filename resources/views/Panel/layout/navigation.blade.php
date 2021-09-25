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
            <li data-toggle="tooltip" title="برنامه ها">
                <a href="#navigationApps" title="برنامه ها">
                    <i class="icon ti-package"></i>
                </a>
            </li>
            <li data-toggle="tooltip" title="پلاگین ها">
                <a href="#navigationPlugins">
                    <i class="icon ti-brush-alt"></i>
                </a>
            </li>
            <li data-toggle="tooltip" title="عناصر">
                <a href="#navigationElements">
                    <i class="icon ti-layers"></i>
                </a>
            </li>
            <li  data-toggle="tooltip" title="صفحات">
                <a href="#navigationPages" title="صفحات کاربری">
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
            <li class="navigation-divider"><a href="{{route('users.show',$user)}}">داشبورد</a>
            </li>
            <li class="active" title="خروج">
                <a href="{{route('users.logout')}}"><span class="mx-2">logout</span>
                    <i class="icon ti-power-off"></i>
                </a>
            </li>
            <li>
                <a href="{{route('categories.index')}}">لیست دسته بندی</a>
            </li>
            <li>
                <a href="{{route('categories.create')}}">ایجاد دسته بندی </a>
            </li>
            <li>
                <a href="{{route('leaders.index')}}">لیست سرگروه مطالب</a>
            </li>
            <li>
                <a href="{{route('leaders.create')}}">ایجاد سرگروه مطالب</a>
            </li>
            <li>
                <a href="{{route('contents.index')}}">لیست تمامی مطالب </a>
            </li>
            <li>
                <a href="#">دسترسی ها</a>
                <ul>
                    <li><a href="{{route('roles.create')}}">ایجاد</a></li>
                    <li><a href="{{route('roles.index')}}">لیست</a></li>
                </ul>
            </li>
            <li>
                <a href="#">برچسب ها</a>
                <ul>
                    <li><a href="{{route('tags.create')}}">ایجاد</a></li>
                    <li><a href="{{route('tags.index')}}">لیست</a></li>
                </ul>
            </li>
            <li>
                <a href="#">ارسال ایمیل به کاربران</a>
                <ul>
                    <li><a href="{{route('massages.create')}}">ایجاد</a></li>
                    <li><a href="{{route('massages.index')}}">لیست</a></li>
                </ul>
            </li>
            <li>
                <a href="#">فوتر سایت </a>
                <ul>
                    <li><a href="{{route('footers.create')}}">ایجاد</a></li>
                    <li><a href="{{route('footers.index')}}">لیست</a></li>
                </ul>
            </li>
            <li>
                <a href="#">گالری ویدیو ها</a>
                <ul>
                    <li><a href="{{route('videocats.create')}}">ایجاد</a></li>
                    <li><a href="{{route('videocats.index')}}">لیست</a></li>
                </ul>
            </li>
            <li>
                <a href="#">آنالیز ها</a>
                <ul>
                    <li><a href="{{route('analyses.create')}}">ایجاد</a></li>
                    <li><a href="{{route('analyses.index')}}">لیست</a></li>
                </ul>
            </li>
            <li>
                <a href="#">لیست کامنت پست ها</a>
                <ul>
                    <li><a href="{{route('questions.index')}}">لیست</a></li>
                </ul>
            </li>
            <li>
                <a href="#"> پست برای دسته بندی ها</a>
                <ul>
                    <li><a href="{{route('subcategories.index')}}">لیست دسته بندی های برای ایجاد پست مربوطه</a></li>
                </ul>
            </li>
        </ul>
        <ul id="navigationApps">
            <li class="navigation-divider">اپ ها</li>
            <li>
                <a href="chat.html">گفتگو</a>
            </li>
            <li>
                <a href="inbox.html">ایمیل</a>
            </li>
            <li>
                <a href="calendar.html">تقویم</a>
            </li>
            <li>
                <a href="gallery.html">گالری</a>
            </li>
            <li class="navigation-divider">دوستان</li>
            <li>
                <a href="#" class="d-flex">
                    <div>
                        <figure class="avatar avatar-state-success avatar-xs mr-3">
                            <span class="avatar-title bg-warning rounded-circle">ت</span>
                        </figure>
                    </div>
                    <div class="flex-grow-1">
                        <h6 class="m-b-0 d-flex font-weight-normal justify-content-between primary-font">مری جین</h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <div>
                        <figure class="avatar avatar-state-warning avatar-xs mr-3">
                            <img src="/{{str_replace('public','storage',auth()->user()->image)}}" class="rounded-circle" alt="image">
                        </figure>
                    </div>
                    <div class="flex-grow-1">
                        <h6 class="m-b-0 d-flex font-weight-normal justify-content-between primary-font">جانی دپ</h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <div>
                        <figure class="avatar avatar-state-danger avatar-xs mr-3">
                            <span class="avatar-title bg-info rounded-circle">آ</span>
                        </figure>
                    </div>
                    <div class="flex-grow-1">
                        <h6 class="m-b-0 d-flex font-weight-normal justify-content-between primary-font">تونی
                            استارک</h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <div>
                        <figure class="avatar avatar-state-info avatar-xs mr-3">
                            <span class="avatar-title bg-danger rounded-circle">ک</span>
                        </figure>
                    </div>
                    <div class="flex-grow-1">
                        <h6 class="m-b-0 d-flex font-weight-normal justify-content-between primary-font">استیو
                            راجرز</h6>
                    </div>
                </a>
            </li>
        </ul>
        <ul id="navigationPlugins">
            <li class="navigation-divider">پلاگین ها</li>
            <li><a href="sweet-alert.html">هشدار Sweet </a></li>
            <li><a href="lightbox.html">لایت باکس </a></li>
            <li><a href="toast.html">توست </a></li>
            <li><a href="tour.html">تور </a></li>
            <li><a href="slick-slide.html">اسلاید Slick </a></li>
            <li><a href="nestable.html">لیست تو در تو </a></li>
            <li>
                <a href="#">نمودار ها</a>
                <ul>
                    <li><a href="chart-apex.html">Apex</a></li>
                    <li><a href="chartjs.html">Chartjs</a></li>
                    <li><a href="chart-justgage.html">Justgage</a></li>
                    <li><a href="chart-morris.html">Morris</a></li>
                    <li><a href="chart-peity.html">Peity</a></li>
                </ul>
            </li>
            <li>
                <a href="#">نقشه ها</a>
                <ul>
                    <li><a href="google-map.html">نقشه گوگل</a></li>
                    <li><a href="vector-map.html">نقشه وکتور</a></li>
                </ul>
            </li>
        </ul>
        <ul id="navigationElements">
            <li class="navigation-divider">عناصر</li>
            <li>
                <a href="#">پایه</a>
                <ul>
                    <li><a href="alerts.html">اعلان‌ها </a></li>
                    <li><a href="badge.html">نشان </a></li>
                    <li><a href="buttons.html">دکمه ها </a></li>
                    <li><a href="pagination.html">صفحه‌بندی </a></li>
                    <li><a href="dropdown.html">منوی کشویی </a></li>
                    <li><a href="accordion.html">باز و بسته شونده </a></li>
                    <li><a href="carousel.html">اسلایدر </a></li>
                    <li><a href="typography.html">تایپوگرافی </a></li>
                    <li><a href="list-group.html">گروه لیست </a></li>
                    <li><a href="media-object.html">رسانه </a></li>
                    <li><a href="images.html">تصاویر </a></li>
                    <li><a href="progress.html">پیشرفت </a></li>
                    <li><a href="modal.html">مودال </a></li>
                    <li><a href="spinners.html">چرخنده ها </a></li>
                    <li><a href="navs.html">ناوبری ها </a></li>
                    <li><a href="tab.html">تب </a></li>
                    <li><a href="tooltip.html">راهنما (تولتیپ) </a></li>
                    <li><a href="popovers.html">پاپ اور </a></li>
                </ul>
            </li>
            <li>
                <a href="#">فرم ها</a>
                <ul>
                    <li><a href="basic-form.html">فرم پایه </a></li>
                    <li><a href="custom-form.html">فرم سفارشی </a></li>
                    <li><a href="advanced-form.html">فرم پیشرفته </a></li>
                    <li><a href="datepicker.html">انتخاب گر تاریخ </a></li>
                    <li><a href="timepicker.html">انتخاب گر زمان </a></li>
                    <li><a href="colorpicker.html">انتخاب گر رنگ </a></li>
                    <li><a href="form-validation.html">اعتبارسنجی فرم </a></li>
                    <li><a href="form-wizard.html">فرم مرحله ای </a></li>
                    <li><a href="file-upload.html">آپلود فایل </a></li>
                    <li><a href="#">ویرایشگر CK</a>
                        <ul>
                            <li><a href="ckeditor-article.html">ویرایشگر مقاله </a></li>
                            <li><a href="ckeditor-inline.html">ویرایشگر درون خطی </a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="tables.html">جدول‌ها</a>
                <ul>
                    <li>
                        <a href="tables.html">جدول‌های پایه </a>
                    </li>
                    <li>
                        <a href="data-table.html">جدول اطلاعات </a>
                    </li>
                    <li>
                        <a href="responsive-table.html">جدول واکنشگرا </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">کارت ها </a>
                <ul>
                    <li><a href="basic-cards.html">کارت های پایه </a></li>
                    <li><a href="image-cards.html">کارت های تصویری </a></li>
                    <li><a href="card-scroll.html">کارت های اسکرول دار </a></li>
                    <li><a href="other-cards.html">سایر </a></li>
                </ul>
            </li>
            <li><a href="colors.html">رنگ ها </a></li>
            <li>
                <a href="avatar.html">آواتار ها</a>
            </li>
            <li>
                <a href="icons.html">آیکن‌ها</a>
            </li>
        </ul>
        <ul id="navigationPages">
            <li class="navigation-divider">صفحات</li>
            <li><a  href="profile.html">پروفایل </a></li>
            <li><a href="timeline.html">خط زمانی </a></li>
            <li><a href="invoice.html">صورتحساب </a></li>
            <li><a href="pricing-table.html">جداول قیمت ها </a></li>
            <li><a href="search-result.html">نتایج جستجو </a></li>
            <li><a href="login.html">ورود </a></li>
            <li><a href="register.html">ثبت نام </a></li>
            <li><a href="recover-password.html">بازیابی رمز عبور </a></li>
            <li><a href="lock-screen.html">قفل صفحه </a></li>
            <li>
                <a href="#">قالب های ایمیل</a>
                <ul>
                    <li><a href="email-template-basic.html">پایه</a></li>
                    <li><a href="email-template-alert.html">هشدار</a></li>
                    <li><a href="email-template-billing.html">صورتحساب</a></li>
                </ul>
            </li>
            <li>
                <a href="#">صفحات خطا </a>
                <ul>
                    <li><a href="404.html">404 </a></li>
                    <li><a href="404-2.html">404 نسخه 2</a></li>
                    <li><a href="503.html">503 </a></li>
                    <li><a href="mean-at-work.html">تعمیرات </a></li>
                </ul>
            </li>
            <li><a href="blank-page.html">صفحه شروع</a></li>
            <li>
                <a href="#">سطح منو</a>
                <ul>
                    <li><a href="#">سطح منو </a>
                        <ul>
                            <li><a href="#">سطح منو </a></li>
                        </ul>
                    </li>
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
            <img class="large-logo" src="/assets/media/image/logo.png" alt="image">
            <img class="small-logo" src="/assets/media/image/logo-sm.png" alt="image">
            <img class="dark-logo" src="/assets/media/image/logo-dark.png" alt="image">
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
                                <img src="/{{str_replace('public','storage',auth()->user()->image)}}" class="rounded-circle" alt="image">
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



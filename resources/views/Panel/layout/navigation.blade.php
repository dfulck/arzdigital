<!-- begin::navigation -->
<div class="navigation">
    <div class="navigation-icon-menu">
        <ul>
            <li class="active" data-toggle="tooltip" title="داشبورد">
                <a href="#navigationDashboards">
                    <i class="icon ti-pie-chart"></i>
                    <span class="badge badge-warning">2</span>
                </a>
            </li>
            @if(auth()->user()->Role_id===1 || auth()->user()->Role_id===3)
                <li data-toggle="tooltip" title="بارکد">
                    <a href="#navigationApps">
                        <i class="icon ti-package"></i>
                    </a>
                </li>
                <li data-toggle="tooltip" title="تنظیمات ظاهری سایت">
                    <a href="#navigationPlugins">
                        <i class="icon ti-brush-alt"></i>
                    </a>
                </li>
                <li data-toggle="tooltip" title="مدیریت مطالب">
                    <a href="#navigationElements">
                        <i class="icon ti-layers"></i>
                    </a>
                </li>
            @endif
            <li data-toggle="tooltip" title="مشاهده مطالب">
                <a href="#moshahedeyemataleb">
                    <i class="icon ti-bag"></i>
                </a>
            </li>
            <li data-toggle="tooltip" title="تنظیمات  کاربر">
                <a href="#navigationPages" title="پروفایل کاربری">
                    <i class="icon ti-user"></i>
                </a>
            </li>
        </ul>
        <ul>
            <li data-toggle="tooltip" title="صفحه اصلی">
                <a href="/" class="go-to-page">
                    <i class="icon ti-home"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="navigation-menu-body">
        <ul id="moshahedeyemataleb">
            <li><a href="{{route('booksvs.index')}}">لیست کتاب ها</a></li>
            <li><a href="{{route('gaaninbooks')}}">کتاب فوانین سال 1399</a></li>
            <li><a href="{{route('amarsaderat.index')}}">لیست آمار صادرات</a></li>
            <li><a href="{{route('bazarhayemontakhab')}}">بازارهای منتخب</a></li>
            <li><a href="{{route('Erth.data')}}">نقشه تجارت</a></li>
            <li><a href="{{route('price.callector')}}">ماشین حساب </a></li>
            <li><a href="{{route('etehadie')}}">اتحادیه ها و تشکل های صادراتی</a></li>
            <li><a href="{{route('otaghayebazargani')}}">اتاق های بازرگانی صنایع، معادن و کشاورزی ایران</a>
            </li>
            <li><a href="{{route('paygahetelaresani')}}">سازمان های صنعت، معدن و تجارت استان</a></li>
        </ul>
        <ul id="navigationDashboards" class="navigation-active">
            <li class="navigation-divider">صفحه اصلی</li>
            <li class="navigation-divider"><a href="{{route('users.show',$user)}}">داشبورد</a></li>
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
            <li><a href="{{route('catalogues.create')}}">ایجاد کاتالوگ محصول</a></li>
            @if(auth()->user()->Role_id===1)
                <li><a href="{{route('catalogues.index')}}">مدیریت کاتالوگ ها {ادمین}</a></li>
            @endif
        </ul>
        <ul id="navigationApps">
            @if(auth()->user()->Role_id===1)
                <li>
                    <a href="#">(لیست بروشور و بارکد)</a>
                    <ul>
                        <li><a href="{{route('miners.create')}}">ایحاد بروشور ماینر</a></li>
                        <li><a href="{{route('miners.index')}}">پرینت بروشور ماینر</a></li>
                        <li><a href="{{route('barcodes.create')}}">ایحاد بارکد </a></li>
                        <li><a href="{{route('barcodes.index')}}">پرینت بارکد ها</a></li>
                    </ul>
                </li>
            @endif
        </ul>
        <ul id="navigationPlugins">
            @if(auth()->user()->Role_id===3)
                <li>
                    <a href="#">مدیریت منوی سایت</a>
                    <ul>
                        <li><a href="{{route('categories.create')}}">ایجاد دسته بندی برای منو</a></li>
                        <li><a href="{{route('categories.index')}}">مدیریت دسته بندی ها (اضافه کردن زیر دسته )</a>
                        </li>
                    </ul>
                </li>
                <li><a href="{{route('footers.manager')}}">مدیرت فوتر سایت</a></li>
                <li><a href="{{route('links.index')}}">مدیرت شبکه های اجتماعی</a></li>
                <li><a href="{{route('kalas.index')}}">مدیریت راهنمای کالا و خدمات تجاری</a></li>
            @endif
            @if(auth()->user()->Role_id===1)
                <li>
                    <a href="#">مدیریت منوی سایت</a>
                    <ul>
                        <li><a href="{{route('categories.create')}}">ایجاد دسته بندی برای منو</a></li>
                        <li><a href="{{route('categories.index')}}">مدیریت دسته بندی ها (اضافه کردن زیر دسته )</a>
                        </li>
                    </ul>
                </li>
                <li><a href="{{route('footers.manager')}}">مدیرت فوتر سایت</a></li>
                <li><a href="{{route('links.index')}}">مدیرت شبکه های اجتماعی</a></li>
                <li><a href="{{route('kalas.index')}}">مدیریت راهنمای کالا و خدمات تجاری</a></li>
            @endif
        </ul>
        <ul id="navigationElements">
            <li class="navigation-divider">مدیریت مطالب</li>
            @if(auth()->user()->Role_id===1)
                <li>
                    <a href="#">مطالب منوی اصلی</a>
                    <ul>
                        <li>
                            <a href="#">لیست شهر های عضو اتحادیه</a>
                            <ul>
                                <li><a href="{{route('etsos.create')}}">اضافه کردن شهر</a></li>
                                <li><a href="{{route('etsos.index')}}">برای مدیریت لیست کلیک کنید</a></li>
                                <li><a href="{{route('list.esto')}}">لیست کل</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">افزودن کتاب</a>
                            <ul>
                                <li><a href="{{route('booksvs.create')}}">ایجاد کتاب </a></li>
                                <li><a href="{{route('booksvs.index')}}">لیست کتاب ها</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">افزودن فرم</a>
                            <ul>
                                <li><a href="{{route('forms.create')}}">ایجاد فرم</a></li>
                                <li><a href="{{route('forms.index')}}">لیست فرم ها</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('amarsaderat.create')}}">افزودن آمار صادرات</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#">مطالب و اخبار سایت</a>
                    <ul>
                        <li><a href="{{route('leaders.create')}}">اضافه کردن دسته برای مطالب </a></li>
                        <li><a href="{{route('leaders.index')}}">مدیریت و اضافه کردن خبر جدید</a></li>
                        <li><a href="{{route('contents.index')}}">لبست تمامی مطالب و خبر ها</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">برچسب های پست </a>
                    <ul>
                        <li><a href="{{route('tags.create')}}">ایجاد برچسب</a></li>
                        <li><a href="{{route('tags.index')}}">لیست برچسب ها</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">مدیریت پست </a>
                    <ul>
                        <li><a href="{{route('posts.create')}}">ایجاد پست</a></li>
                        <li><a href="{{route('posts.index')}}">لیست پست ها</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">گالری ویدیو ها</a>
                    <ul>
                        <li><a href="{{route('videocats.create')}}">ایجاد دسته بندی برای ویدیو ها </a></li>
                        <li><a href="{{route('videocats.index')}}">مدیریت دسته بندی های مرنبط (اضافه کردن و...)</a></li>
                    </ul>
                </li>
                <li><a href="{{route('cities.index')}}">مدیرت دانستنی ها</a></li>
            @endif
            @if(auth()->user()->Role_id===3)
                <li>
                    <a href="#">مطالب منوی اصلی</a>
                    <ul>
                        <li>
                            <a href="#">لیست شهر های عضو اتحادیه</a>
                            <ul>
                                <li><a href="{{route('etsos.create')}}">اضافه کردن شهر</a></li>
                                <li><a href="{{route('etsos.index')}}">برای مدیریت لیست کلیک کنید</a></li>
                                <li><a href="{{route('list.esto')}}">لیست کل</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">افزودن کتاب</a>
                            <ul>
                                <li><a href="{{route('booksvs.create')}}">ایجاد کتاب </a></li>
                                <li><a href="{{route('booksvs.index')}}">لیست کتاب ها</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">افزودن فرم</a>
                            <ul>
                                <li><a href="{{route('forms.create')}}">ایجاد فرم</a></li>
                                <li><a href="{{route('forms.index')}}">لیست فرم ها</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('amarsaderat.create')}}">افزودن آمار صادرات</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#">مطالب و اخبار سایت</a>
                    <ul>
                        <li><a href="{{route('leaders.create')}}">اضافه کردن دسته برای مطالب </a></li>
                        <li><a href="{{route('leaders.index')}}">مدیریت و اضافه کردن خبر جدید</a></li>
                        <li><a href="{{route('contents.index')}}">لبست تمامی مطالب و خبر ها</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">برچسب های پست </a>
                    <ul>
                        <li><a href="{{route('tags.create')}}">ایجاد برچسب</a></li>
                        <li><a href="{{route('tags.index')}}">لیست برچسب ها</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">مدیریت پست </a>
                    <ul>
                        <li><a href="{{route('posts.create')}}">ایجاد پست</a></li>
                        <li><a href="{{route('posts.index')}}">لیست پست ها</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">گالری ویدیو ها</a>
                    <ul>
                        <li><a href="{{route('videocats.create')}}">ایجاد دسته بندی برای ویدیو ها </a></li>
                        <li><a href="{{route('videocats.index')}}">مدیریت دسته بندی های مرنبط (اضافه کردن و...)</a></li>
                    </ul>
                </li>
                <li><a href="{{route('cities.index')}}">مدیرت دانستنی ها</a></li>
            @endif
        </ul>
        <ul id="navigationPages">
            @if(auth()->user()->Role_id===1)
                <li>
                    <a href="#">نظرات کاربران</a>
                    <ul>
                        <li><a href="{{route('questions.index')}}">لیست نظرات</a></li>
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
                    <a href="#">مدیریت کاربران</a>
                    <ul>
                        <li><a href="{{route('users.ListAll')}}">لیست کاربران</a></li>
                    </ul>
                </li>
            @endif
            <li>
                <a href="#">ویرایش پروفایل</a>
                <ul>
                    <li><a href="{{route('users.edit',$user)}}">ویرایش </a></li>
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
                {{--           massage--}}
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link nav-link-notify" data-toggle="dropdown">
                        <i class="ti-comment"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                        <div class="p-4 text-center" data-backround-image="assets/media/image/image1.png">
                            <h6 class="m-b-0">پیام ها</h6>
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                @foreach(auth()->user()->massages as $massage)
                                    <li>
                                        <a href="#"
                                           class="p-3 list-group-item d-flex align-items-center link-1 hide-show-toggler">
                                            <div>
                                                <figure class="avatar avatar-sm m-r-15">
                                                    <span class="avatar-title bg-success rounded-circle">جدید</span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1 d-flex justify-content-between primary-font">
                                                    <i title="علامت خوانده نشده" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-13">
                                                        {!! $massage->title !!}
                                                    </i>
                                                </h6>
                                                <span class="text-muted m-r-10 small">{{$massage->created_at}}</span>
                                                <span
                                                    class="text-muted small line-height-24">{!! $massage->title !!}</span>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </li>
                {{--               end massage--}}
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link bg-none" data-sidebar-open="#userProfile">
                        <div>
                            <figure class="avatar avatar-state-success avatar-sm">
                                <img src="{{url('/storage/app/'.auth()->user()->image)}}" class="rounded-circle"
                                     alt="image">
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



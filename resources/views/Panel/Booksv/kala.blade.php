@extends('Panel.layout.master')

@section('master')

    <body class="dark">

    @include('Panel.layout.sidebar')

    @include('Panel.layout.navigation')


    <!-- begin::main content -->
    <main class="main-content">


        <div class="card">
            <div class="card-body">
                <form action="{{route('data.khadamat')}}" method="post">
                    @csrf
                    <label class="font-weight-bold" for="data">انتخاب محصول</label>
                    <div class="form-group">
                     <button  class="btn btn-primary m-2" name="id" value="1" type="submit">محصولات حیوانی و صنایع وابسته</button>
                     <button  class="btn btn-primary m-2" name="id" value="2" type="submit">محصولات لبنی</button>
                     <button  class="btn btn-primary m-2" name="id" value="3" type="submit">گل و گیاه دارویی،خوراکی،زینتی و صنعتی</button>
                     <button  class="btn btn-primary m-2" name="id" value="7" type="submit">میوه و تره بار</button>
                     <button  class="btn btn-primary m-2" name="id" value="4" type="submit">صنایع تبدیلی</button>
                     <button  class="btn btn-primary m-2" name="id" value="5" type="submit">خشکبار</button>
                     <button  class="btn btn-primary m-2" name="id" value="6" type="submit">شیرینی و شکلات</button>
                     <button  class="btn btn-primary m-2" name="id" value="9" type="submit">مواد و صنایع معدنی (غیرفلزی)</button>
                     <button  class="btn btn-primary m-2" name="id" value="10" type="submit">پتروشیمی و پایه نفتی</button>
                     <button  class="btn btn-primary m-2" name="id" value="8" type="submit">مواد و صنایع معدنی (فلزی)</button>
                     <button  class="btn btn-primary m-2" name="id" value="11" type="submit">صنایع شیمیایی و سلولزی</button>
                     <button  class="btn btn-primary m-2" name="id" value="12" type="submit">صنایع نوین، پیشرفته و دارو</button>
                     <button  class="btn btn-primary m-2" name="id" value="13" type="submit">صنایع برق و الکترونیک</button>
                     <button  class="btn btn-primary m-2" name="id" value="16" type="submit">صنایع خودرو و ماشین آلات صنعتی</button>
                     <button  class="btn btn-primary m-2" name="id" value="14" type="submit">صنایع پوشاک، چرم و کفش</button>
                     <button  class="btn btn-primary m-2" name="id" value="15" type="submit">صنایع لوازم خانگی</button>
                     <button  class="btn btn-primary m-2" name="id" value="19" type="submit">ترانزیت</button>
                     <button  class="btn btn-primary m-2" name="id" value="20" type="submit">سایر خدمات</button>
                     <button  class="btn btn-primary m-2" name="id" value="21" type="submit">محصولات نوآورانه و خلاق</button>
                     <button  class="btn btn-primary m-2" name="id" value="22" type="submit">گردشگری</button>
                     <button  class="btn btn-primary m-2" name="id" value="23" type="submit">فناوری اطلاعات و ارتباطات</button>
                     <button  class="btn btn-primary m-2" name="id" value="24" type="submit">خدمات فنی و مهندسی</button>
                    </div>
                </form>
            </div>
        </div>

    </main>
    <!-- end::main content -->

    @include('Panel.layout.script')
    </body>

@endsection


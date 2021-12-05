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
                        <form action="{{route('subcategories.store',$category)}}" method="post">
                            @csrf
                            <h6 class="card-title">اضافه کردن</h6>
                            <div class="form-group">
                                <input placeholder="زیر دسته بندی {{$category->title}}" type="text" class="form-control"
                                       name="title">
                            </div>
                            <h1>انتخاب لینک صفحه بر اساس داده ها </h1>
                            <div class="form-group">
                                <select class="js-example-basic-single" name="link">
                                    <optgroup label="لیست داده های آماده">
                                        <option value="{{route('data.etehadie')}}">اتحادیه ها و تشکل های صادراتی</option>
                                        <option value="{{route('data.bazarhayemontakhab')}}">بازارهای منتخب</option>
                                        <option value="{{route('data.otaghayebazargani')}}">اتاق های بازرگانی صنایع، معادن و کشاورزی ایران</option>
                                        <option value="{{route('data.paygahetelaresani')}}">سازمان های صنعت، معدن و تجارت استان</option>
                                    </optgroup>
                                    <optgroup label="پست ها">
                                        @foreach($posts as $post)
                                            <option
                                                value="{{route('show.posts',$post)}}">{{$post->header}}</option>
                                        @endforeach
                                    </optgroup>
                                    <optgroup label=" مطالب">
                                        @foreach($contents as $content)
                                            <option
                                                value="{{route('show.artical',$content)}}">{{$content->header}}</option>
                                        @endforeach
                                    </optgroup>
                                    <optgroup label="داده های متمرکز">
                                        <option value="{{route('amarsaderat')}}">آمار صادرات</option>
                                        <option value="{{route('esto')}}">شهر های عضو اتحادیه</option>
                                        <option value="{{route('forms')}}">فرم ها</option>
                                        <option value="{{route('listketabha')}}"> کتاب ها</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="ارسال">
                            </div>
                        </form>
                        <form action="{{route('subcategories.update',$category)}}" method="post">
                            @method('PATCH')
                            @csrf
                            <p>اضافه کردن زیر دسته بندی</p>
                            <div class="form-group">
                                <select class="js-example-basic-single" multiple name="title[]">
                                    <optgroup label="زیر دسته بندی های  {{$category->title}}">
                                        @foreach($subcategories as $sub)
                                            <option
                                                @if($category->HasSubCategory($sub->title))
                                                selected
                                                @endif
                                                value="{{$sub->id}}">{{$sub->title}}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="ویرایش">
                            </div>
                        </form>
                        <table id="example1" class="table table-striped table-bordered" width="100%">
                            <thead>
                            <tr>
                                <th>نام زیر دسته</th>
                                <th>زمان ایجاد</th>
                                <th>حذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subcategories as $subcategory)
                                <tr>
                                    <td>{{$subcategory->title}}</td>
                                    <td>{{$subcategory->created_at}}</td>
                                    <td>
                                        <form action="{{route('subcategories.destroy',$subcategory)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-danger" value="Delete">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>نام زیر دسته</th>
                                <th>زمان ایجاد</th>
                                <th>حذف</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>


    @include('Panel.layout.script')

    </body>
@endsection

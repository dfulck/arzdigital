<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>قالب Nextable - قالب مدیریتی نکستیبل</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/media/image/favicon.png">

    <!-- Theme Color -->
    <meta name="theme-color" content="#5867dd">

    <!-- Plugin styles -->
    <link rel="stylesheet" href="/vendors/bundle.css" type="text/css">

    <!-- Select2 -->
    <link rel="stylesheet" href="/vendors/select2/css/select2.min.css" type="text/css">

    <!-- Range slider -->
    <link rel="stylesheet" href="/vendors/range-slider/css/ion.rangeSlider.min.css" type="text/css">

    <!-- Tagsinput -->
    <link rel="stylesheet" href="/vendors/tagsinput/bootstrap-tagsinput.css" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="/assets/css/app.css" type="text/css">
</head>

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
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="send">
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
                            <input type="submit" class="btn btn-success" value="send">
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


<!-- Plugin scripts -->
<script src="/vendors/bundle.js"></script>

<!-- Select2 -->
<script src="/vendors/select2/js/select2.min.js"></script>
<script src="/assets/js/examples/select2.js"></script>

<!-- Range slider -->
<script src="/vendors/range-slider/js/ion.rangeSlider.min.js"></script>
<script src="/assets/js/examples/range-slider.js"></script>

<!-- Input mask -->
<script src="/vendors/input-mask/jquery.mask.js"></script>
<script src="/assets/js/examples/input-mask.js"></script>

<!-- Tagsinput -->
<script src="/vendors/tagsinput/bootstrap-tagsinput.js"></script>
<script src="/assets/js/examples/tagsinput.js"></script>

<!-- App scripts -->
<script src="/assets/js/app.js"></script>

</body>

<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arz Digital</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/media/image/favicon.png">

    <!-- Theme Color -->
    <meta name="theme-color" content="#5867dd">

    <!-- Plugin styles -->
    <link rel="stylesheet" href="/vendors/bundle.css" type="text/css">

    <!-- Form wizard -->
    <link rel="stylesheet" href="/vendors/form-wizard/jquery.steps.css" type="text/css">

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
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">پیفام ارسال شده</th>
                                <th scope="col">تعداد کاربران ارسال شده</th>
                                <th class="text-right" scope="col">گروه کاربران</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($massages as $massage)
                                <tr>
                                    <th scope="row">{{$massage->id}}</th>
                                    <td>{{$massage->title}}</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <button class="dropdown-item " type="button"><a class="text-white" href="{{route('tags.edit',$massage)}}">ویرایش</a></button>
                                                <form action="{{route('massages.destroy',$massage)}}" method="post" >
                                                    @csrf
                                                    @method('DELETE')
                                                    <input class="dropdown-item text-white" type="submit" value="DELETE">
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Plugin scripts -->
<script src="/vendors/bundle.js"></script>

<script src="/vendors/dataTable/jquery.dataTables.min.js"></script>
<script src="/vendors/dataTable/dataTables.bootstrap4.min.js"></script>
<script src="/vendors/dataTable/dataTables.responsive.min.js"></script>
<script src="/assets/js/examples/datatable.js"></script>
<!-- App scripts -->
<script src="/assets/js/app.js"></script>
</body>
</html>

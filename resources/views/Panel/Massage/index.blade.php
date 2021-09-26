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
@include('Panel.layout.script')
</body>
@endsection

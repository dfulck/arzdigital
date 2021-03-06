
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
                                <th scope="col">اسم برچسب </th>
                                <th scope="col">تعداد پست های مربوطه</th>
                                <th class="text-right" scope="col">تنظیمات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tags as $tag)
                                <tr>
                                    <th scope="row">{{$tag->id}}</th>
                                    <td>{{$tag->title}}</td>
                                    <td>-</td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-light btn-floating btn-icon btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <button class="dropdown-item " type="button"><a class="text-white" href="{{route('tags.edit',$tag)}}">ویرایش</a></button>
                                                <form action="{{route('tags.destroy',$tag)}}" method="post" >
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
@include('Panel.layout.script')
</body>

@endsection


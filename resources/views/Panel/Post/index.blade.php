@extends('Panel.layout.master')

@section('master')

<body class="dark">

@include('Panel.layout.sidebar')

@include('Panel.layout.navigation')


<!-- begin::main content -->
<main class="main-content">


    <div class="card">
        <div class="card-body">
            <table id="example1" class="table table-striped table-bordered" width="100%">
                <thead>
                <tr>
                    <th>نام header post</th>
                    <th>creator</th>
                    <th>number</th>
                    <th>زمان ایجاد</th>
                    <th>Add part</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->header}}</td>
                        <td>{{$post->creator}}</td>
                        <td>{{$post->CountPart()}}</td>
                        <td>{{$post->created_at}}</td>
                        <td class="text-center"><a class="text-white" href="{{route('posts.edit',$post)}}">ADD</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>نام header post</th>
                    <th>creator</th>
                    <th>number</th>
                    <th>زمان ایجاد</th>
                    <th>Add part</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>

</main>
<!-- end::main content -->

@include('Panel.layout.script')
</body>

@endsection

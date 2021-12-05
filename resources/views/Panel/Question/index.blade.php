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
                        <th>پست مورد نظر</th>
                        <th>نظر</th>
                        <th>زمان ایجاد</th>
                        <th>نام نظر دهنده</th>
                        <th>وضعیت</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($questions as $question)
                        <tr>
                            <td>
                                @foreach($question->posts() as $post)
                                    {{$post->header}}
                                @endforeach
                            </td>
                            <td>{{$question->title}}</td>
                            <td>{{$question->created_at}}</td>
                            <td>{{$question->name}}</td>
                            <td>
                                <form action="{{route('question.update',$question)}}" method="post" >
                                    @csrf
                                    @method('PATCH')
                                    <select name="status" id="">
                                        <option
                                            @if($question->status===0)
                                            selected
                                            @endif
                                            value="0">غیر فعال
                                        </option>
                                        <option
                                            @if($question->status===1)
                                            selected
                                            @endif
                                            value="1">فعال
                                        </option>
                                    </select>
                                    <input type="submit" class="btn btn-light-dark" value="تغییر وضعیت">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>پست مورد نظر</th>
                        <th>نظر</th>
                        <th>زمان ایجاد</th>
                        <th>نام نظر دهنده</th>
                        <th>وضعیت</th>
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

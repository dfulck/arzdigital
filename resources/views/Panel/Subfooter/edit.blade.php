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
                        <form action="{{route('subfooters.update',$subfooter)}}" method="post">
                            @csrf
                            @method('PATCH')
                            <h6 class="card-title">ویرایش کردن</h6>
                            <div class="form-group">
                                <input value="{{$subfooter->title}}" placeholder="نام subfooter" type="text" class="form-control"
                                       name="title">
                            </div>
                            <h1>انتخاب لینک subfooter</h1>
                            <div class="form-group">
                                <select class="js-example-basic-single" name="link">
                                    <optgroup label="دسته بندی ها">
                                        @foreach($subcategories as $subcategory)
                                            <option value="{{route('subcategories.show',$subcategory)}}">{{$subcategory->title}}</option>
                                        @endforeach
                                    </optgroup>
                                    <optgroup label="تحلیل ها">
                                        @foreach($analyses as $analysis)
                                            <option value="{{route('analyses.show',$analysis)}}">{{$analysis->header}}</option>
                                        @endforeach
                                    </optgroup>
                                    <optgroup label="سرگروه مطالب">
                                        @foreach($leaders as $leader)
                                            <option value="{{route('leaders.show',$leader)}}">{{$leader->title}}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="send">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('Panel.layout.script')
    </body>
@endsection



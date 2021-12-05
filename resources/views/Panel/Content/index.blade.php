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
                    @foreach($contents as $content)
                        <div class="card-group">
                            <div class="card">
                                <img height="400px" src="{{url('/storage/app/'.$content->image)}}" class="card-img-top"
                                     alt="image">
                                <div class="card-body">
                                    <h6 class="card-title">{{$content->header}}</h6>
                                    <p class="card-text">{!! $content->body !!}</p>
                                    <p class="card-text">
                                        <small class="text-muted">{{$content->created_at}}</small>
                                    </p>
                                </div>
                                <a href="{{route('contents.edit',$content)}}" class="btn btn-success">ویرایش</a>
                                    <div class="accordion-body">
                                        <div class="text-center">
                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#exampleModalCenter">
                                                حذف
                                            </button>
                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                                 aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalCenterTitle">حذف  </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="یرگشت">
                                                                <i class="ti-close"></i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            مطمعنی میخوای پاک کنی ؟

                                                            <p>
                                                                بعدا پشیمون نشی ها
                                                            </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">یرگشت
                                                            </button>
                                                            <form action="{{route('contents.destroy',$content)}}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-primary">بله حذف کن بره
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>

@include('Panel.layout.script')

</body>

@endsection

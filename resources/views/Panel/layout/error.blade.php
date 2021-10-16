@if(count($errors->all())>0)
    <main class="main-content align-content-center">
        <div class="card">
            <div class="card-body">
    <div class="text-white alert alert-danger alert-dismissible fade show col-sm-5" role="alert">
        @foreach($errors->all() as $error)
            <ul class="form-group text-center form-control bg-danger text-white ">

                <li class="text-box text-dangerr ">
                    {{$error}}
                </li>
                <br>
            </ul>
        @endforeach
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
            </div>
        </div>
    </main>
@endif

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


<script>
    $('body').on('keyup','#serach-posts',function () {
        var serachQuset = $(this).val();
        if (serachQuset==""){
            $('#dynamic-row').html("");
            return;
        }
        $.ajax({
            method: 'POST',
            url: '{{route("frontend.serach")}}',
            dataType: 'json',
            data: {
                '_token':'{{csrf_token()}}',
                serachQuset : serachQuset
            },
            success: function (res) {
                var tableRow = '';
                $('#search-show').html("");
                if(res.length==0){
                    $('#search-show').append('<td>پیدا نشد</td>');
                    return;
                }
                $.each(res , function (index ,value) {
                    tableRow = '<div class="search-box-body"><div class="images-show"> <img src="uploads/images/'+value.image+'" alt="'+value.title+'"></div> <div class="cotent-search-show"><h1>'+value.title+'</h1><a href="">مشاهده</a></div></div>';
                    $('#search-show').append(tableRow);
                } );
            }
        });
    });
</script>

<?php
$jason = file_get_contents('C:\laravel\arzdigital\arzdigital\resources\views\Panel\Booksv\paygah_etelati_sherkathaye_modiriat_saderat.json');

$jason_decode = json_decode($jason)->data;


?>


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
                        <th>ردیف</th>
                        <th>ردیف</th>
                        <th>ردیف</th>
                        <th>ردیف</th>
                        <th>ردیف</th>
                        <th>ردیف</th>
                        <th>ردیف</th>
                        <th>ردیف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i=0;$i<=21;$i++)
                        <tr>
                            @for($q=0;$q<=7;$q++)
                                <td>{{$jason_decode[$i][$q]}}</td>
                            @endfor
                        </tr>
                    @endfor
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ردیف</th>
                        <th>ردیف</th>
                        <th>ردیف</th>
                        <th>ردیف</th>
                        <th>ردیف</th>
                        <th>ردیف</th>
                        <th>ردیف</th>
                        <th>ردیف</th>
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




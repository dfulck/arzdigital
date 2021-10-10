@extends('Panel.layout.master')

@section('master')

    <body class="dark">

    @include('Panel.layout.sidebar')

    @include('Panel.layout.navigation')


    <!-- begin::main content -->
    <main class="main-content">


        <div class="card">
            <div class="card-body">
                <div class="demo-wrapper">
                    <!-- Demo GPD -->

                    <div class="demo-container">
                        <h2>GDP per capita (PPP)</h2>

                        <div id="svgMapGPD"></div>
                        <script src="/assets/gdp.js"></script>
                        <script>
                            new svgMap({
                                targetElementID: 'svgMapGPD',
                                data: svgMapDataGPD,
                                mouseWheelZoomEnabled: true,
                                mouseWheelZoomWithKey: true
                            });
                        </script>
                    </div>

                </div>
            </div>
        </div>

    </main>
    <!-- end::main content -->

    @include('Panel.layout.script')
    </body>

@endsection


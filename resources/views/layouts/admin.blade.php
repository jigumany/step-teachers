<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
        <title>{{ config('app.name') }}</title>
        <link href="{{ asset('plugins/components/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/components/chartist-js/dist/chartist.min.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/components/calendar/dist/fullcalendar.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/colors/default.css') }}" id="theme" rel="stylesheet">
        @stack('stylesheets')
    </head>
    <body class="mini-sidebar">
        <div id="wrapper">
            <div class="preloader">
                <div class="cssload-speeding-wheel"></div>
            </div>

            @include('partials.header')

            @include('partials.sidebar')

            <div class="page-wrapper">

                @yield('content')

                @include('partials.footer')

            </div>
        </div>

        <script src="{{ asset('plugins/components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('plugins/components/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
        <script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
        

         <!-- Calendar JavaScript -->
        <script src="{{ asset('plugins/components/calendar/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('plugins/components/moment/moment.js') }}"></script>
        <script src='{{ asset('plugins/components/calendar/dist/fullcalendar.min.js') }}'></script>
        <script src="{{ asset('plugins/components/calendar/dist/jquery.fullcalendar.js') }}"></script>
    

        <script src="{{ asset('plugins/components/sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('plugins/components/sparkline/jquery.charts-sparkline.js') }}"></script>
        <script src="{{ asset('plugins/components/knob/jquery.knob.js') }}"></script>
        <script src="{{ asset('plugins/components/easypiechart/dist/jquery.easypiechart.min.js') }}"></script>
        <script src="{{ asset('plugins/components/chartist-js/dist/chartist.min.js') }}"></script>
        <script src="{{ asset('plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}"></script>
        <script src="{{ asset('js/db1.js') }}"></script>
        <script src="{{ asset('js/waves.js') }}"></script>
        <script src="{{ asset('js/sidebarmenu.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>

        <script src="{{ asset('plugins/components/styleswitcher/jQuery.style.switcher.js') }}"></script>
        @stack('scripts')
    </body>
</html>

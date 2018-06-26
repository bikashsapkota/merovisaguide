<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>INSPINIA - @yield('title') </title>


    <link href="/css/vendor.css" rel="stylesheet"/>
    <link href="/css/app.css" rel="stylesheet"/>
    <link href="/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
</head>
<body>

  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.admin.navigation')

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Page wrapper -->
            @include('layouts.admin.topnavbar')

            <!-- Main view  -->

            @yield('content')

            <!-- Footer -->
            @include('layouts.admin.footer')

        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->

<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>


@section('scripts')
@show

</body>
</html>

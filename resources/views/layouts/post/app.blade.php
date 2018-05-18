<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVG - @yield('title') </title>


    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />
    <link href="/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
</head>
<body>

<!-- Wrapper-->
<div id="wrapper">

    <!-- Navigation -->
    @include('layouts.post.navigation')

    <!-- Page wraper -->
    <div id="page-wrapper" class="gray-bg">

        <!-- Page wrapper -->
        @include('layouts.post.topnavbar')

        <!-- Main view  -->

        @yield('content')

        <!-- Footer -->
        @include('layouts.post.footer')

    </div>
    <!-- End page wrapper-->

</div>
<!-- End wrapper-->

<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>


@section('scripts')
@show

</body>
</html>

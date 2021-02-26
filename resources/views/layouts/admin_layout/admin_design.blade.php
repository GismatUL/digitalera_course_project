<!doctype html>
<html class="no-js" lang="en'}}">
<!--<![endif]-->

<head>
    <meta charset="utf-8'}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge'}}">
    <title>My Portfolio</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{asset('admin/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('admin/jqvmap/dist/jqvmap.min.css')}}">


    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>
@include('layouts.admin_layout.admin_sidebar')
<div id="right-panel" class="right-panel">
@include('layouts.admin_layout.admin_header')
@yield('content')
@include('layouts.admin_layout.admin_footer')
</div>


<script src="{{asset('admin/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('admin/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('admin/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/js/main.js')}}"></script>
<script src="{{asset('admin/chart.js/dist/Chart.bundle.min.js')}}"></script>
<script src="{{asset('admin/assets/js/dashboard.js')}}"></script>
<script src="{{asset('admin/assets/js/widgets.js')}}"></script>
<script src="{{asset('admin/jqvmap/dist/jquery.vmap.min.js')}}"></script>
<script src="{{asset('admin/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<script src="{{asset('admin/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script>
    (function($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
</script>

</body>

</html>

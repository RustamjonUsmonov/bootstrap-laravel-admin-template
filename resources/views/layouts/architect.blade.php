<!doctype html>
<html lang="en">
<head>
    @include('components/head')
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
</head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    @include('components.header')
    <div class="app-main">
        @include('components.sidebar')
    </div>
    <div class="app-main__outer">
         <div class="app-main__inner">
             @yield('content')
         </div>
    </div>

    {{--<script src="http://maps.google.com/maps/api/js?sensor=true"></script>--}}
</div>
</div>
<script type="text/javascript" src="{{asset('css/assets/scripts/main.js')}}"></script>
</body>
</html>

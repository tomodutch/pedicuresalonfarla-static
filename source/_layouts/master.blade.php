<!doctype html>
<html lang="en">
  <head>
    <style>
  /* @font-face kit by Fonts2u (http://www.fonts2u.com) */ @font-face {font-family:"BrockScript";src:url("{{$page->url('fonts/BrockScript.eot?')}}") format("eot"),url("{{$page->url('fonts/BrockScript.woff')}}") format("woff"),url("{{$page->url('fonts/BrockScript.ttf')}}") format("truetype"),url("{{ $page->url('fonts/BrockScript.svg#BrockScript') }}") format("svg");font-weight:normal;font-style:normal;}    
    </style>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('_layouts/meta/meta')

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{$page->url('/css/main.css?ts=123')}}">
    <title>{{ $page->title() }}</title>
  </head>
    <body>
        @include('_layouts/head')
        @yield('body')
        @include('_layouts/footer')

        @yield('scripts')

        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>  
    </body>
</html>

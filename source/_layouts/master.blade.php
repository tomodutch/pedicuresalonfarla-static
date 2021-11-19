<!doctype html>
<html lang="nl">
  <head>
    <style>
  /* @font-face kit by Fonts2u (http://www.fonts2u.com) */ @font-face {font-family:"BrockScript";src:url("{{$page->url('fonts/BrockScript.eot?')}}") format("eot"),url("{{$page->url('fonts/BrockScript.woff')}}") format("woff"),url("{{$page->url('fonts/BrockScript.ttf')}}") format("truetype"),url("{{ $page->url('fonts/BrockScript.svg#BrockScript') }}") format("svg");font-weight:normal;font-style:normal;}    
    </style>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('_layouts/meta/meta')

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <title>{{ $page->title() }}</title>
  </head>
    <body>
        @include('_layouts/head')
        @yield('body')
        @include('_layouts/footer')

        @yield('scripts')

        <script defer src="https://use.fontawesome.com/releases/v5.10.0/js/all.js"></script>  
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75331571-1', 'auto');
  ga('send', 'pageview');

</script>
    </body>
</html>

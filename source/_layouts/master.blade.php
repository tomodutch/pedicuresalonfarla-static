<!doctype html>
<html lang="en">
  <head>
    <style>
  /* @font-face kit by Fonts2u (http://www.fonts2u.com) */ @font-face {font-family:"BrockScript";src:url("{{$page->url('fonts/BrockScript.eot?')}}") format("eot"),url("{{$page->url('fonts/BrockScript.woff')}}") format("woff"),url("{{$page->url('fonts/BrockScript.ttf')}}") format("truetype"),url("{{ $page->url('fonts/BrockScript.svg#BrockScript') }}") format("svg");font-weight:normal;font-style:normal;}    
    </style>

      <script>
          var map;
          function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: 51.5498220, lng: 4.0804300},
              zoom: 15,
              styles: [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
]
            });

            var marker = new google.maps.Marker({
              position: {lat: 51.5498220, lng: 4.0804300},
              map: map,
              label: 'Radda barnenstraat 1'
            });
          }
        </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{$page->url('/css/main.css?ts=123')}}">
    <title>Pedicuresalon Farla</title>
  </head>
    <body>
        @include('_layouts/head')
        @yield('body')
        @include('_layouts/footer')
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>  
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCe1G0tGBJkcJt_yqRzOQQKuaHuel1h3Bs&callback=initMap&language=nl" async defer></script>
    </body>
</html>

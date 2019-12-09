<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Police fc</title>
    <link rel="stylesheet" href="{{asset('/static/css/app.css')}}">
    <link href="{{asset('/assets/images/favicon.icos')}}" rel="shortcut icon">
    <link href="{{asset('/assets/css/akslider.css')}}" rel="stylesheet"/>
    <link href="{{asset('/assets/css/donate.css')}}" rel="stylesheet"/>
    <link href="{{asset('/assets/css/theme.blue.changed.css')}}" rel="stylesheet"/>

</head>
<body class="tm-isblog">

        <div class="preloader">
                <div class="loader"></div>
            </div>

        <div class="over-wrap">
            @include('layouts.home.navbar')
            @yield('content')
            @include('layouts.home.footer')
        </div>



<script type="text/javascript" src="{{asset('/assets/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/js/uikit.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/js/SimpleCounter.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/js/components/grid.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/js/components/slider.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/js/components/slideshow.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/js/components/slideset.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/js/components/sticky.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/js/components/lightbox.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/js/components/accordion.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/js/isotope.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/js/theme.js')}}"></script>
<script type="text/javascript">
    new SimpleCounter("countdown4", 1476154800, {
      'continue': 0,
      format: '{D} {H} {M} {S}',
      lang: {
          d: {
              single: 'day',
              plural: 'days'
          }, //days
          h: {
              single: 'hr',
              plural: 'hrs'
          }, //hours
          m: {
              single: 'min',
              plural: 'min'
          }, //minutes
          s: {
              single: 'sec',
              plural: 'sec'
          } //seconds
      },
      formats: {
          full: "<span class='countdown_number' style='color:  '>{number} </span> <span class='countdown_word' style='color:  '>{word}</span> <span class='countdown_separator'>:</span>", //Format for full units representation
          shrt: "<span class='countdown_number' style='color:  '>{number} </span>" //Format for short unit representation
      }
  });
</script>

<script src="js/app.js')}}"></script>

</body>
</html>

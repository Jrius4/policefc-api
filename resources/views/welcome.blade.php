<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Police fc</title>
    <link rel="stylesheet" href="static/css/app.css">
    <link href="assets/images/favicon.ico" rel="shortcut icon">
    <link href="assets/css/akslider.css" rel="stylesheet"/>
    <link href="assets/css/donate.css" rel="stylesheet"/>
    <link href="assets/css/theme.css" rel="stylesheet"/>

</head>
<body class="tm-isblog">
<div>
<div id='root'></div>
@include('layouts.home.footer')
</div>



<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/uikit.js"></script>
<script type="text/javascript" src="assets/js/SimpleCounter.js"></script>
<script type="text/javascript" src="assets/js/components/grid.js"></script>
<script type="text/javascript" src="assets/js/components/slider.js"></script>
<script type="text/javascript" src="assets/js/components/slideshow.js"></script>
<script type="text/javascript" src="assets/js/components/slideset.js"></script>
<script type="text/javascript" src="assets/js/components/sticky.js"></script>
<script type="text/javascript" src="assets/js/components/lightbox.js"></script>
<script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>

<script type="text/javascript" src="assets/js/theme.js"></script>
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

<script src="js/app.js"></script>

</body>
</html>
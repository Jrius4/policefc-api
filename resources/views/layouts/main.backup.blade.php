<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NDEBITECH</title>
    <link rel="shortcut icon" href="/img/ndebi-tech-favi-blue.png" type="image/x-icon">

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    {{-- <link rel="stylesheet" href="/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="/static/css/app.css">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <div>
   @include('layouts.inc.navbar')

      {{-- navigation bar --}}
        
      

 

 
            @yield('content')


   

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class="copyright">&copy; 2019 NDEBITECH</p>
                </div>
                <div class="col-md-4">
                    <nav>
                        <ul class="social-icons">
                            <li><a href="#" class="i fa fa-facebook"></a></li>
                            <li><a href="#" class="i fa fa-twitter"></a></li>
                            <li><a href="#" class="i fa fa-google-plus"></a></li>
                            <li><a href="#" class="i fa fa-github"></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
  </div>

    {{-- <script src="/js/bootstrap.min.js"></script> --}}
    <script src="/static/js/app.js"></script>
    <script src="/static/js/jquery.min.js"></script>
    <script src="/static/js/ScrollMagic.min.js"></script>
    <script src="/static/js/drop-downmenu.js"></script>
</body>
</html>

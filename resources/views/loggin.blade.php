<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>Porcicola Wilbur</title>

  <link href="{{ URL::asset('css/style.default.css') }}" rel="stylesheet">

</head>

<body class="signin">

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>

    <div class="signinpanel">

        <div class="row">

            <div class="col-md-7">

                <div class="signin-info">
                    <div class="logopanel">
                        <h1><span>[</span> Wilbur Analitycs <span>]</span></h1>
                    </div><!-- logopanel -->

                    <div class="mb20"></div>

                    <h5><strong>Bienvenido al mejor sistema de control para tu Granja.</strong></h5>


                </div><!-- signin0-info -->

            </div><!-- col-sm-7 -->

            <div class="col-md-5">



                <form method="post" action="/loggin">
                    <h4 class="nomargin">Loggin</h4>
                    <p class="mt5 mb20">Ingresa para acceder a tu cuenta.</p>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text" id="username" class="form-control uname" placeholder="Usuario" name="user" />
                    <input type="password" id="password" class="form-control pword" placeholder="Password" name="password" />
                    <a href="#"><small>Olvidate tu Password?</small></a>
                    <button id="loggin" class="btn btn-danger btn-block">Ingresar</button>

                </form>
            </div><!-- col-sm-5 -->

        </div><!-- row -->

        <div class="signup-footer">
            <div class="pull-left">
                &copy; 2015. Todos los derechos reservados, Politecnico Colombiano Jaime Isaza Cadavid
            </div>
            <div class="pull-right">
                CORE By: <a href="http://themepixels.com/" target="_blank">IntellSoftSolutions S.A.S</a>
            </div>
        </div>

    </div><!-- signin -->

</section>


<script src="{{ URL::asset('js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/modernizr.min.js') }}"></script>
<script src="{{ URL::asset('js/retina.min.js') }}"></script>

<script src="{{ URL::asset('js/custom.js') }}"></script>

</body>
</html>

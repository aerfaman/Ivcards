<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 

<html class="no-js" style="overflow: hidden; "> <!--<![endif]-->
    <head>

        <!-- meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Ivcard</title>
        
        <!-- stylesheets -->
        <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/jquery-confirm.min.css') }}">

    </head>

    <body id="resourcePage" >

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1>Ivcard</h1>
                        
                </div>

                               <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/user/login') }}"> 注 册 </a></li>
                        <li class="active"><a href="{{ url('/user/register') }}"> 登 录 </a></li>
                    @else
                        {{-- <li class="active"><a href="{{ url('/') }}">我的卡片</a></li> --}}
                        <li><a href="#">保 存</a></li>
                       
                        <li><a href="#">退 出</a></li>
                    @endif
                    </ul>
                </div><!-- end of /.navbar-collapse -->
            </div><!-- end of /.container -->
        </nav>

<iframe style="top:50px;display: block; position: absolute; width: 100%; height: calc(100% - 50px);" width="100%" height="100%" frameborder="0" src="{{ url('card/template/'.$templateName.'/') }}"></iframe>

        <!--  Necessary scripts  -->

        <script type="text/javascript" src="{{ asset('assets/js/jquery-2.1.3.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jQuery.scrollSpeed.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery-confirm.min.js') }}"></script>
        <!-- smooth-scroll -->

        <script>
        $(function() {  
            jQuery.scrollSpeed(100, 1000);
        });
        // $('#home_createcards').on('click',function(){
        //     $.dialog({
        //     title:false,
        //     backgroundDismiss: true,
        //     closeIcon: true,
        //     columnClass: 'col-md-12 ',
        //     content: '<div class="container" ><div class="row" ><article class="col-md-3 col-sm-4 col-xs-12"><div class="design-inspiration-item"><a href="single_design_inspiration.html"><figure><img src="assets/img/design-inspiration1.jpg" class="img-responsive center-block" alt="Logo Design"></figure></a></div></article><article class="col-md-3 col-sm-4 col-xs-12"><div class="design-inspiration-item"><a href="single_design_inspiration.html"><figure><img src="assets/img/design-inspiration1.jpg" class="img-responsive center-block" alt="Logo Design"></figure></a></div></article></div></div>'
        // });
        // });
        </script>
    </body>
</html>
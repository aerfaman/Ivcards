<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 

<html class="no-js"> <!--<![endif]-->
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

    <body id="resourcePage">

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
                        <li class="active"><a href="{{ url('/') }}">我的卡片</a></li>
                        <li><a href="#" id='home_createcards'>新建卡片</a></li>
                        {{-- <li><a href="{{ url('/user/info')}}">{{ Auth::user()->name }}</a></li> --}}
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="{{ url('/user/info')}}">账号信息</a></li>
                                <li><a href="#">修改密码</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{url('/user/logout')}}">退出</a></li>
                              </ul>
                        </li>
                    @endif
                    </ul>
                </div><!-- end of /.navbar-collapse -->
            </div><!-- end of /.container -->
        </nav>
        <main>

            <section class="page-content">
                <div class="container">
                    <div class="row mycard-content">
                        <div class="col-md-12">

                            <div class="feedback">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="cmnt-clipboard"><span class="btn-clipboard">Reply</span></div>
                                        <div class="well">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <img src="assets/img/resource-bg.jpg" class="img-responsive center-block">
                                                </div>
                                                <div class="col-md-10">
                                                    <p class="comment-info">
                                                        <strong>Reena Scot</strong> <span>22 april 2015</span>
                                                    </p>
                                                    <p>
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since they 1500s.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="cmnt-clipboard"><span class="btn-clipboard">Reply</span></div>
                                        <div class="well">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <img src="assets/img/commenter2.jpg" class="img-responsive center-block">
                                                </div>
                                                <div class="col-md-10">
                                                    <p class="comment-info">
                                                        <strong>David Martin</strong> <span>22 april 2015</span>
                                                    </p>
                                                    <p>
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since they 1500s.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="comment-post">
                                <h1>post a comment</h1>
                                <form method="post" >
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input  name="name" type="text" class="form-control" id="name" required="required" placeholder="Full Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input name="email" type="email" class="form-control" id="email" required="required" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input name="website" type="url" class="form-control" id="subject" required="required" placeholder="Your Website">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <textarea name="message" type="text" class="form-control" id="message" rows="5" required="required" placeholder="Type here message"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" required="required"> Please Check to Confirm
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" id="submit" name="submit" class="btn btn-cmnt">post comment</button>
                                        </div>
                                    </div>
                                            
                                </form>
                            </div>

                        </div>

                    </div>

                </div>

            </section>

        </main>


        <footer>
            <div class="container">
                <div class="row">
                    <!-- copyright -->
                    <div class="col-md-4 col-sm-4">
                        copyright &copy; 2015 <a href="#" style="margin-left: 4px;">Your website Link</a>
                        <br>
                        Theme by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                    </div>

                    <!-- footer share button -->
                    <div class="col-md-4">
                        <ul class="social-share text-center">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul> <!-- /.social-share -->
                    </div>

                    <!-- footer-nav -->
                    <div class="col-md-4">
                        <ul class="footer-nav">
                            <li><a href="about.html">About</a></li>
                            <li><a href="privacy.html">Privacy</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul> <!-- /.footer-nav -->
                    </div> 
                </div>
            </div>
        </footer>

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
        $('#home_createcards').on('click',function(){
            $.dialog({
            title:false,
            backgroundDismiss: true,
            closeIcon: true,
            columnClass: 'col-md-12 ',
            content: '<div class="container" ><div class="row" ><article class="col-md-3 col-sm-4 col-xs-12"><div class="design-inspiration-item"><a href="{{ url("card/create/lens") }}"><figure><img src="assets/img/design-inspiration1.jpg" class="img-responsive center-block" alt="Logo Design"></figure></a></div></article><article class="col-md-3 col-sm-4 col-xs-12"><div class="design-inspiration-item"><a href="{{ url("card/create/thomsoon")}}"><figure><img src="assets/img/design-inspiration1.jpg" class="img-responsive center-block" alt="Logo Design"></figure></a></div></article></div></div>'
        });
        });
        </script>
    </body>
</html>
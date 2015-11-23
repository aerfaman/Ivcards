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

    </head>

    <body>
    <div class="header-wrapper text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h1>加入Ivcards</h1>
                            </div>
                        </div>
                    </div> <!-- /.container -->
                </div>
<section class='page-content'>
 <div class="container">
            <div class="row">
                {{-- <div class="col-sm-12 text-center bottom-separator">
                    <img src="images/home/under.png" class="img-responsive inline" alt="">
                </div> --}}
                <div class='col-md-12'>
                    <div clsss='col-md-offset-3 col-md-6'>

                    </div>
                    <div class='col-md-offset-3 col-md-6'>
                        @if(Session::has('message'))
                        <div class="alert alert-danger fade in">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4>注册出错了!!!</h4>
                            <p>{{ Session::get('message')['content'] }}</p>
                        </div>
                    @endif
                    @if (count($errors) > 0)
                    <div class="alert alert-danger fade in">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4>注册出错了!!!</h4>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="contact-form bottom">
                        <form name='register-form' role="form" method="POST" action="{{ url('user/create') }}" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                                <input type="text" class="form-control" name="username" value="{{ old('name') }}" placeholder='名 号'>

                        </div>

                        <div class="form-group">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder='邮 箱'>

                        </div>
                {{--  <div class="form-group">
                                <a class="btn btn-link" href="">发送邮箱验证码</a>
                                <input type="email"  name="email" value="{{ old('email') }}" placeholder='邮 箱'>
                        </div> --}}

                        <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder='密 码'>

                        </div>

                        <div class="form-group">
                                <input type="password" class="form-control" name="password_confirmation" placeholder='密码确认'>

                        </div>
                                            <div class="form-group">
                                <button id="user_register_submit" type="submit" class="btn btn-cmnt">
                                    注 册
                                </button>
                        <div class="form-group">
                                    <a class='btn btn-link' href="{{ url('/user/login') }}">已经有账号了?</a>
                            </div>

                    </form>

                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </section>



        <!--  Necessary scripts  -->

        <script type="text/javascript" src="{{ asset('assets/js/jquery-2.1.3.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jQuery.scrollSpeed.js') }}"></script>

        <!-- smooth-scroll -->
        @yield('js')
        <script>
        $(function() {  
            jQuery.scrollSpeed(100, 1000);
        });
        </script>
    </body>
</html>

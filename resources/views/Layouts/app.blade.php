<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">


                            <li class="nav-item">

                                    <a href="{{url("/")}}" class="nav-link"  role="button" aria-haspopup="true" aria-expanded="false">home</a>

                                 </li>

                                 <li class="nav-item">
                                   <a class="nav-link" href="{{url('posts/create')}}" role="button" aria-haspopup="true" aria-expanded="false">add post</a>
                                 </li>


                                <li class="nav-item">

                                 <a class="nav-link"  href="<?php echo base_url('posts/contact'); ?>"   role="button" aria-haspopup="true" aria-expanded="false">contact</a>

                                </li>

                                <li id="hidesearch" class="nav-item" style="display:none">

                                        <?php

                                           $attributes = array('class' => 'form-inline my-2 my-md-0');
                                           echo form_open('posts/results');

                                        ?>

                                          <input class="form-control" type="text" placeholder="Enter Keyword(s)" aria-label="Search">
                                        </form>

                                  </li>



                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>


        <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
                <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
                <script src="{{ asset('js/bootstrap.min.js') }}"></script>
                <script src="{{ asset('js/main.js') }}"></script>


                <footer class="footer" >

                            <ul class="footer-list">

                                  <li>Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></li>

                            </ul>

                            <ul class="footer-list">
                                  <li>Copyright &copy 2018 Front End and Back End Design by RedPill</li>
                            </ul>

                            <ul class="footer-list">

                                  <li> <a  href="pages/terms-and-conditions"  role="button" aria-haspopup="true" aria-expanded="false"><strong>Terms and Conditions</strong></a></li>
                                  <li> <a  href="pages/about"  role="button" aria-haspopup="true" aria-expanded="false"><strong>Help</strong></a></li>


                            </ul>

                 </footer>
    </div>




</body>
</html>

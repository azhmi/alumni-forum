<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Website Alumni">
    <meta name="author" content="Kamaludin">
    <meta name="keywords" content="alumni">

    <!-- Title Page-->
    <title>Website Alumni</title>
    
    <!-- Fontfaces CSS-->
    <link href="{{ URL::asset('css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ URL::asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ URL::asset('vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ URL::asset('vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ URL::asset('vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ URL::asset('vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ URL::asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ URL::asset('vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ URL::asset('vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ URL::asset('vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ URL::asset('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ URL::asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ URL::asset('css/theme.css') }}" rel="stylesheet" media="all">
    

</head>

<body class="animsition">
    <div class="page-wrapper">

        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="{{ URL::asset('images/icon/logo-smk.png')}}" alt="CoolAdmin" style=" width: 75px;"/>
                        </a>
                    </div>
                    
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="@yield('status')">
                                <a href="/">
                                <i class="fas fa-home"></i>
                                <span class="bot-line"></span>Beranda</a>
                            </li>
                            <li class="@yield('status-berita')">
                                <a href="/berita">
                                <i class="fas fa-newspaper"></i>
                                <span class="bot-line"></span>Berita</a>
                            </li>
                            <li class="@yield('status-loker')">
                                <a href="/lowongan">
                                <i class="fas fa-building"></i>
                                <span class="bot-line"></span>Lowongan</a>
                            </li>
                            <li class="has-sub @yield('status-forum')">
                                <a href="/forum">
                                <i class="fas fa-trophy"></i>
                                <span class="bot-line"></span>Forum</a>
                                @if (Route::has('login'))
                        @if (Auth::check())
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="/forum">Forum alumni</a>
                                    </li>
                                    
                                    <li>
                                        <a href="/forum/tambah">Tulis Diskusi/Pertanyaan</a>
                                    </li>
                                    
                                </ul>
                                @endif @endif
                            </li>
                            <li class="has-sub @yield('status-alumni')">
                                <a href="#">
                                    <i class="fas fa-copy"></i>
                                    <span class="bot-line"></span>Alumni</a>
                                <ul class="header3-sub-list list-unstyled">
                                @guest
                                    <li>
                                        <a href="/login">Login</a>
                                    </li>
                                    @endguest
                                    <li>
                                        <a href="/alumni">Data Alumni</a>
                                    </li>
                                    @if (Route::has('login'))
                                    @if (Auth::check())
                                        @if(Auth::user()->level=="admin")
                                    <li>
                                    <a href="/alumni/tambah">Alumni baru ?</a>
                                </li>
                                @endif
                                @endif @endif
                                </ul>
                            </li>
                        </ul>
                    </div>
                    @if(Route::has('login'))
                        @if (Auth::check())
                    <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                               
                                <div class="content">
                                    <a class="js-acc-btn" href="#"> {{ Auth::user()->name }} </a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">{{ Auth::user()->name }} </a>
                                            </h5>
                                            <span class="email">{{ Auth::user()->email }} </span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    
                    @endif
                    
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="{{ URL::asset('images/icon/logo-white.png')}}" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="index.html">
                            <i class="fas fa-shopping-basket"></i>
                            <span class="bot-line"></span>Berita</a>
                        </li>
                        <li>
                            <a href="lowongan.html">
                            <i class="fas fa-trophy"></i>
                            <span class="bot-line"></span>Lowongan</a>
                        </li>
                        <li>
                            <a href="forum.html">
                            <i class="fas fa-trophy"></i>
                            <span class="bot-line"></span>Forum</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Alumni</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                @guest
                                <li>
                                    <a href="/login">Login</a>
                                </li>
                                @endguest
                                <li>
                                    <a href="/alumni">Data Alumni</a>
                                </li>
                                <li>
                                    <a href="/alumni/tambah">Alumni baru?</a>
                                </li>
                            </ul>
                        </li>                        
                    </ul>
                </div>
            </nav>
        </header>
        <div class="sub-header-mobile-2 d-block d-lg-none">
        @if (Route::has('login'))
        @if (Auth::check())
            <div class="header__tool">
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                       
                        <div class="content">
                            <a class="js-acc-btn" href="#">{{ Auth::user()->name }} </a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#">{{ Auth::user()->name }} </a>
                                    </h5>
                                    <span class="email">{{ Auth::user()->email}} </span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endif
            
        </div>
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            
            {{-- Header Content Section --}}
            @yield('header')
            
            {{-- Main Content --}}
            @yield('content')

            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{ URL::asset('vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ URL::asset('vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ URL::asset('vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ URL::asset('vendor/wow/wow.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ URL::asset('vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ URL::asset('vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ URL::asset('vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/select2/select2.min.js') }}">
    </script>
    <script src="{{ URL::asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}">
    </script>
 <script type="text/javascript" src="{{ URL::asset('js/ckeditor/ckeditor.js')}}"></script>
    <!-- Main JS-->
    <script src="{{ URL::asset('js/main.js')}}"></script>
    
<!-- Include CSS for icons. -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<!-- Include Editor style. -->
<link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.0/css/froala_style.min.css" rel="stylesheet" type="text/css" />

<!-- Create a tag that we will use as the editable area. -->
<!-- You can use a div tag as well. -->


<!-- Include jQuery lib. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<!-- Include Editor JS files. -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.0/js/froala_editor.pkgd.min.js"></script>
<!-- Include Editor JS files. -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<!-- Initialize the editor. -->
<script>
  $(function() {
    $('textarea').froalaEditor({
    toolbarButtons:['fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', '|', 'fontFamily', 'fontSize', 'color', 'inlineClass', 'inlineStyle', 'paragraphStyle', 'lineHeight', '|', 'paragraphFormat', 'align', 'formatOL', 'formatUL', 'outdent', 'indent', 'quote', '-', 'html', '|', 'undo', 'redo'],
    })
  });
  $(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});
</script>
</body>

</html>
<!-- end document-->
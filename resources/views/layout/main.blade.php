<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset("assets/img/apple-icon.png")}}">
    <link rel="icon" type="image/png" href="{{asset("assets/img/favicon.png")}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        {{$page->title}}
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/DataTable/datatables.min.css")}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset("assets/MultiSelect/jquery.dropdown.min.css")}}"/>
    <link href="{{asset("assets/css/material-dashboard.css?v=2.1.0")}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
</head>

<body class="">

<div class="wrapper ">
    <div class="sidebar" data-color="orange" data-background-color="white" data-image="{{asset("assets/img/sidebar-1.jpg")}}">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

          Tip 2: you can also add an image using data-image tag
      -->
        <div class="logo">
            <a href="{{getRoute("home")}}" class="simple-text logo-normal">
                CsWild.pl
            </a>
        </div>
        <div class="sidebar-wrapper">
            @include('layout.sidenavbar')
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    @include('layout.tobnavbar')
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                @yield('page')
            </div>
        </div>
        @include('layout.footer')
    </div>
</div>
<script src="{{asset("assets/js/core/jquery.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/js/core/popper.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/js/core/bootstrap-material-design.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/js/plugins/perfect-scrollbar.jquery.min.js")}}"></script>
<script src="{{asset("assets/js/plugins/chartist.min.js")}}"></script>
<script src="{{asset("assets/js/plugins/bootstrap-notify.js")}}"></script>
<script src="{{asset("assets/js/material-dashboard.min.js?v=2.1.0")}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset("assets/DataTable/datatables.min.js")}}"></script>
<script src="{{asset("assets/MultiSelect/jquery.dropdown.min.js")}}"></script>
</body>

</html>
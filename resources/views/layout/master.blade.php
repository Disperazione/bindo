<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Educenter</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->

  <link rel="stylesheet" href="{{ asset('/themes/educenter/plugins/bootstrap/bootstrap.min.css')}}">
  <!-- slick slider -->
  <link rel="stylesheet" href="{{ asset('/themes/educenter/plugins/slick/slick.css')}}">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="{{ asset('/themes/educenter/plugins/themify-icons/themify-icons.css')}}">
  <!-- animation css -->
  <link rel="stylesheet" href="{{ asset('/themes/educenter/plugins/animate/animate.css')}}">
  <!-- aos -->
  <link rel="stylesheet" href="{{ asset('/themes/educenter/plugins/aos/aos.css')}}">
  <!-- venobox popup -->
  <link rel="stylesheet" href="{{ asset('/themes/educenter/plugins/venobox/venobox.css')}}">

  <!-- Main Stylesheet -->
  <link href="{{ asset('/themes/educenter/css/style.css')}}" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="{{ asset('/themes/educenter/images/favicon.png')}}" type="image/x-icon">
  <link rel="icon" href="{{ asset('/themes/educenter/images/favicon.png')}}" type="image/x-icon">

</head>

<body>
  <!-- preloader start -->
  {{-- <div class="preloader">
    <img src="{{ asset('/themes/educenter/images/preloader.gif')}}" alt="preloader">
  </div> --}}
  <!-- preloader end -->

<!-- header -->
@include('layout.header.header');
<!-- /header -->
@yield('content');
<!-- /events -->
@include("layout.footer.footer")

<!-- jQuery -->
<script src="{{ asset('/themes/educenter/plugins/jQuery/jquery.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('/themes/educenter/plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- slick slider -->
<script src="{{ asset('/themes/educenter/plugins/slick/slick.min.js')}}"></script>
<!-- aos -->
<script src="{{ asset('/themes/educenter/plugins/aos/aos.js')}}"></script>
<!-- venobox popup -->
<script src="{{ asset('/themes/educenter/plugins/venobox/venobox.min.js')}}"></script>
<!-- filter -->
<script src="{{ asset('/themes/educenter/plugins/filterizr/jquery.filterizr.min.js')}}"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="{{ asset('/themes/educenter/plugins/google-map/gmap.js')}}"></script>

<!-- Main Script -->
<script src="{{ asset('/themes/educenter/js/script.js')}}"></script>

</body>
</html>

<html>
<head>
@include('partials.styles')<!-- load styles files -->
    <title>@yield('title_page')</title>
</head>
<body>
@include('partials.navigation')<!--load navigationBar -->
@yield('content') <!load difrent pages -->
<!--end container-fluid-->
@include('partials.footer')<!-- load footer -->
@include('partials.login_reg_modal')<!-- load form login and register -->
@include('partials.javascripts')
</body>
</html>
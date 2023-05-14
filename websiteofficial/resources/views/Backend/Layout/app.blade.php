<!DOCTYPE html>
<html lang="en">

<head>
    @include('Backend.Layout.common-head')
</head>

<body class="g-sidenav-show  bg-gray-200">
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include('Backend.Layout.header')
    @include('Backend.Layout.slidebar')

    @section('main-content')
    @show
    @include('Backend.Layou.footer')
 
    @include('Backend.Layout.common-end')
    @stack('custom-scripts')
</body>

</html>
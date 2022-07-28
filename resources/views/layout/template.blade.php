<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
    <!-- ce qui change peu dans le include -->
</head>

<body>
    @yield('header')
    <!-- ce qui change souvent dans le yield -->
    @yield('content')
    @include('layout.footer')
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')

    <title>@yield('title') | Footbal Analytics</title>

    {{-- favicon --}}
    <link rel="apple-touch-icon" href="">
    <link rel="shorcut icon" type="image/x-icon" href="">

    @stack('before-style')
    {{-- style --}}
    @include('includes.style')

    @stack('after-style')

</head>

<body>

    @include('includes.header')
     @yield('content')
    @include('includes.footer')

    @stack('after-script')

</body>
</html>

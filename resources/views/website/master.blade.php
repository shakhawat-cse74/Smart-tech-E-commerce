<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('website.includes.style')

</head>
<body>

    @include('website.includes.header')
    @yield('body')
    @include('website.includes.footer')

@include('website.includes.script')
</body>

</html>

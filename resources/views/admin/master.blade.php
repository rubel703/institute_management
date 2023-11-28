<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.meta')
    @include('includes.link')
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        @include('layouts.header')
        @include('layouts.sidebar')
        @yield('content')
        @include('layouts.footer')
    </div>
    @include('includes.script')
    @include('includes.script2')
</body>

</html>

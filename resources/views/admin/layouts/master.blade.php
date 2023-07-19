<!doctype html>
<html lang="en" data-layout="vertical" data-layout-style="detached" data-layout-position="fixed" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-layout-width="fluid">

<head>

    <meta charset="utf-8" />
    <title>Ecommerce | Admin Dashboard </title>
    @include('admin.layouts.head-script')
</head>

<body>

<!-- Begin page -->
<div id="layout-wrapper">


    @include('admin.layouts.header')

    @include('admin.layouts.navbar')

    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>

    <div class="main-content">

        <div class="page-content">
            @yield('content')
        </div>

        @include('admin.layouts.footer')
    </div>

</div>
@include('admin.layouts.settings')



@include('admin.layouts.foot-script')

</body>

</html>

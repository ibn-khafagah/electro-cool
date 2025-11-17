<!doctype html>
<html lang="en" dir="rtl" data-theme-mode="teal">
<head>
@include('backend.layout.header')
</head>
<body data-sidebar="dark">
<!-- <body data-layout="horizontal" data-topbar="colored"> -->
<!-- Begin page -->
<div id="layout-wrapper">
@include('backend.layout.navbar')
@include('backend.layout.sidebar')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @include('backend.layout.breadcrumb')
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @yield('main')
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
@include('backend.layout.footer')
    </div>
    <!-- end main content-->
</div>
<!-- END layout-wrapper -->
@include('backend.layout.script')
</body>
</html>

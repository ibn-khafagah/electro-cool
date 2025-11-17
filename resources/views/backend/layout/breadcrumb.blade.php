<!-- start page title -->
<div class="row">
    <div class="col-sm-6">
        <div class="page-title-box">
            <h4>@yield('title')</h4>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="{{ route('admin_dashboard') }}">لوحة التحكم</a></li>
                <li class="breadcrumb-item active">@yield('title')</li>
            </ol>
        </div>
    </div>
    <div class="col-sm-6">
    </div>
</div>
<!-- end page title -->

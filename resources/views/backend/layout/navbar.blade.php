<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ route('admin_dashboard') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{asset('upload/setting/'.getSetting()->favicon)}}" alt="" height="35">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('upload/setting/'.getSetting()->logo)}}" alt="" height="50">
                    </span>
                </a>

                <a href="{{ route('admin_dashboard') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('upload/setting/'.getSetting()->favicon)}}" alt="" height="35">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('upload/setting/'.getSetting()->logo)}}" alt="" height="50">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>
        </div>

        <div class="d-flex">

            <div class="dropdown d-none d-lg-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="mdi mdi-fullscreen font-size-24"></i>
                </button>
            </div>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{asset('upload/setting/'.getSetting()->favicon)}}"
                         alt="Header Avatar">
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle font-size-17 text-muted align-middle me-1"></i> الملف الشخصي</a>
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('admin_setting_index') }}"><i class="mdi mdi-cog font-size-17 text-muted align-middle me-1"></i> الأعدادات العامة</a>
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('web_index') }}" target="_blank"><i class="mdi mdi-eye font-size-17 text-muted align-middle me-1"></i>مشاهدة الموقع</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"><i class="mdi mdi-power font-size-17 text-muted align-middle me-1 text-danger"></i> تسجيل الخروج</a>
                </div>
            </div>

        </div>
    </div>
</header>

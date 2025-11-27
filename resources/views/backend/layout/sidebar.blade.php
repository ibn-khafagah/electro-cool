<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">الأدارة</li>

                <li>
                    <a href="{{ route('admin_dashboard') }}" class="waves-effect">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span>لوحة التحكم</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-image-edit"></i>
                        <span>البنرات</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin_banner_create') }}">اضافة بنر</a></li>
                        <li><a href="{{ route('admin_banner_index') }}">قائمة البنرات</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-buffer"></i>
                        <span>الخدمات</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin_service_create') }}">اضافة خدمة</a></li>
                        <li><a href="{{ route('admin_service_index') }}">قائمة الخدمات</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-clipboard-outline"></i>
                        <span>المميزات</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin_feature_create') }}">اضافة ميزة</a></li>
                        <li><a href="{{ route('admin_feature_index') }}">قائمة المميزات</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-chart-line"></i>
                        <span>تقييمات العملاء</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin_feedback_create') }}">اضافة تقييم</a></li>
                        <li><a href="{{ route('admin_feedback_index') }}">قائمة التقييمات</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-format-list-bulleted-type"></i>
                        <span>فريق العمل</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin_team_create') }}">اضافة عضو</a></li>
                        <li><a href="{{ route('admin_team_index') }}">قائمة فريق العمل</a></li>
                    </ul>
                </li>



                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-album"></i>
                        <span>المدونات</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin_blog_create') }}">اضافة مدونة</a></li>
                        <li><a href="{{ route('admin_blog_index') }}">قائمة المدونات</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-google-maps"></i>
                        <span>شركاء النجاح</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin_partner_create') }}"> اضافة شريك</a></li>
                        <li><a href="{{ route('admin_partner_index') }}"> قائمة شركاء النجاح</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-share-variant"></i>
                        <span> الأسألة الشائعة </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin_faq_create') }}">اضافة سؤال</a></li>
                        <li><a href="{{ route('admin_faq_index') }}">قائمة الأسألة</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-text-box-multiple-outline"></i>
                        <span> أقسام المنتجات </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin_category_create') }}">اضافة قسم</a></li>
                        <li><a href="{{ route('admin_category_index') }}">قائمة الأقسام</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-store"></i>
                        <span> المنتجات </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin_product_create') }}">اضافة منتج</a></li>
                        <li><a href="{{ route('admin_product_index') }}">قائمة المنتجات</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-store"></i>
                        <span> البومات الصور </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin_album_create') }}">اضافة البوم</a></li>
                        <li><a href="{{ route('admin_album_index') }}">قائمة الألومات</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->

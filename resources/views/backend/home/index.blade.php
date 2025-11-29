@extends('backend.layout.master')
@section('title')
إعدادات الصفحة الرئيسية
@endsection
@section('css')

@endsection
@section('main')
    <form action="{{ route('admin_home_update', encrypt($data->id)) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        الخدمات
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#home2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                    <span class="d-none d-sm-block">العربية</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profile2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">الأنجليزية</span>
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active p-3" id="home2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الرئيسي</label>
                                                            <input type="text" class="form-control" name="service_title_ar" value="{{$data->getTranslation('service_title', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الفرعي</label>
                                                            <input type="text" class="form-control" name="service_sub_title_ar" value="{{$data->getTranslation('service_sub_title', 'ar')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane p-3" id="profile2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الرئيسي</label>
                                                            <input type="text" class="form-control" name="service_title" value="{{$data->getTranslation('service_title', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الفرعي</label>
                                                            <input type="text" class="form-control" name="service_sub_title" value="{{$data->getTranslation('service_sub_title', 'en')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        حائط الأنجازات
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#home2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                    <span class="d-none d-sm-block">العربية</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profile2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">الأنجليزية</span>
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active p-3" id="home2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الرئيسي</label>
                                                            <input type="text" class="form-control" name="counter_sub_title_ar" value="{{$data->getTranslation('counter_sub_title', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الفرعي</label>
                                                            <input type="text" class="form-control" name="counter_title_ar" value="{{$data->getTranslation('counter_title', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">اوبشن 1</label>
                                                            <input type="text" class="form-control" name="fun1_ar" value="{{$data->getTranslation('fun1', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">اوبشن 2</label>
                                                            <input type="text" class="form-control" name="fun2_ar" value="{{$data->getTranslation('fun2', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">اوبشن 3</label>
                                                            <input type="text" class="form-control" name="fun3_ar" value="{{$data->getTranslation('fun3', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">اوبشن 4</label>
                                                            <input type="text" class="form-control" name="fun4_ar" value="{{$data->getTranslation('fun4', 'ar')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane p-3" id="profile2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الرئيسي</label>
                                                            <input type="text" class="form-control" name="counter_sub_title" value="{{$data->getTranslation('counter_sub_title', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الفرعي</label>
                                                            <input type="text" class="form-control" name="counter_title" value="{{$data->getTranslation('counter_title', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">اوبشن 1</label>
                                                            <input type="text" class="form-control" name="fun1" value="{{$data->getTranslation('fun1', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">اوبشن 2</label>
                                                            <input type="text" class="form-control" name="fun2" value="{{$data->getTranslation('fun2', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">اوبشن 3</label>
                                                            <input type="text" class="form-control" name="fun3" value="{{$data->getTranslation('fun3', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">اوبشن 4</label>
                                                            <input type="text" class="form-control" name="fun4" value="{{$data->getTranslation('fun4', 'en')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        لماذا تختارنا
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mt-4">
                                    <div class="col-lg-12">
                                        <img src="{{asset('upload/home/'.$data->why_image)}}" alt="" style="width: 100px;height: 100px">
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-firstname-input">صورة لماذا تختارنا</label>
                                            <input type="file" class="form-control"  name="why_image" >
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">نسبة شريط الخبرات 1</label>
                                    <input type="text" class="form-control" name="why_progress_number1" value="{{$data->why_progress_number1}}">
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">نسبة شريط الخبرات 2</label>
                                    <input type="text" class="form-control" name="why_progress_number2" value="{{$data->why_progress_number2}}">
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#home2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                    <span class="d-none d-sm-block">العربية</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profile2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">الأنجليزية</span>
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active p-3" id="home2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الرئيسي</label>
                                                            <input type="text" class="form-control" name="why_sub_title_ar" value="{{$data->getTranslation('why_sub_title', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الفرعي</label>
                                                            <input type="text" class="form-control" name="why_title_ar" value="{{$data->getTranslation('why_title', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">الوصف</label>
                                                            <input type="text" class="form-control" name="why_notes_ar" value="{{$data->getTranslation('why_notes', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">اوبشن 1</label>
                                                            <input type="text" class="form-control" name="why_option1_ar" value="{{$data->getTranslation('why_option1', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">اوبشن 2</label>
                                                            <input type="text" class="form-control" name="why_option2_ar" value="{{$data->getTranslation('why_option2', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">اوبشن 3</label>
                                                            <input type="text" class="form-control" name="why_option3_ar" value="{{$data->getTranslation('why_option3', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">وصف شريط الخبرات 1</label>
                                                            <input type="text" class="form-control" name="why_progress_number_title1_ar" value="{{$data->getTranslation('why_progress_number_title1', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">وصف شريط الخبرات 2</label>
                                                            <input type="text" class="form-control" name="why_progress_number_title2_ar" value="{{$data->getTranslation('why_progress_number_title2', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">الجملة اسفل الصورة</label>
                                                            <input type="text" class="form-control" name="why_progress_main_title_ar" value="{{$data->getTranslation('why_progress_main_title', 'ar')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane p-3" id="profile2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الرئيسي</label>
                                                            <input type="text" class="form-control" name="why_sub_title" value="{{$data->getTranslation('why_sub_title', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الفرعي</label>
                                                            <input type="text" class="form-control" name="why_title" value="{{$data->getTranslation('why_title', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">الوصف</label>
                                                            <input type="text" class="form-control" name="why_notes" value="{{$data->getTranslation('why_notes', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">اوبشن 1</label>
                                                            <input type="text" class="form-control" name="why_option1" value="{{$data->getTranslation('why_option1', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">اوبشن 2</label>
                                                            <input type="text" class="form-control" name="why_option2" value="{{$data->getTranslation('why_option2', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">اوبشن 3</label>
                                                            <input type="text" class="form-control" name="why_option3" value="{{$data->getTranslation('why_option3', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">وصف شريط الخبرات 1</label>
                                                            <input type="text" class="form-control" name="why_progress_number_title1" value="{{$data->getTranslation('why_progress_number_title1', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">وصف شريط الخبرات 2</label>
                                                            <input type="text" class="form-control" name="why_progress_number_title2" value="{{$data->getTranslation('why_progress_number_title2', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">الجملة اسفل الصورة</label>
                                                            <input type="text" class="form-control" name="why_progress_main_title" value="{{$data->getTranslation('why_progress_main_title', 'en')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        المميزات
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#home2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                    <span class="d-none d-sm-block">العربية</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profile2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">الأنجليزية</span>
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active p-3" id="home2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الرئيسي</label>
                                                            <input type="text" class="form-control" name="service_future_sub_title_ar" value="{{$data->getTranslation('service_future_sub_title', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الفرعي</label>
                                                            <input type="text" class="form-control" name="service_future_title_ar" value="{{$data->getTranslation('service_future_title', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">الوصف</label>
                                                            <input type="text" class="form-control" name="service_future_notes_ar" value="{{$data->getTranslation('service_future_notes', 'ar')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane p-3" id="profile2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الرئيسي</label>
                                                            <input type="text" class="form-control" name="service_future_sub_title" value="{{$data->getTranslation('service_future_sub_title', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الفرعي</label>
                                                            <input type="text" class="form-control" name="service_future_title" value="{{$data->getTranslation('service_future_title', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">الوصف</label>
                                                            <input type="text" class="form-control" name="service_future_notes" value="{{$data->getTranslation('service_future_notes', 'en')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        احجز خدمتك
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mt-4">
                                    <div class="col-lg-12">
                                        <img src="{{asset('upload/home/'.$data->book_service_image)}}" alt="" style="width: 100px;height: 100px">
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-firstname-input">صورة حجز خدماتنا</label>
                                            <input type="file" class="form-control"  name="book_service_image" >
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#home2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                    <span class="d-none d-sm-block">العربية</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profile2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">الأنجليزية</span>
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active p-3" id="home2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الرئيسي</label>
                                                            <input type="text" class="form-control" name="book_service_title_ar" value="{{$data->getTranslation('book_service_title', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الفرعي</label>
                                                            <input type="text" class="form-control" name="book_service_notes_ar" value="{{$data->getTranslation('book_service_notes', 'ar')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane p-3" id="profile2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الرئيسي</label>
                                                            <input type="text" class="form-control" name="book_service_title" value="{{$data->getTranslation('book_service_title', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الفرعي</label>
                                                            <input type="text" class="form-control" name="book_service_notes" value="{{$data->getTranslation('book_service_notes', 'en')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        تقييم العملاء
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#home2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                    <span class="d-none d-sm-block">العربية</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profile2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">الأنجليزية</span>
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active p-3" id="home2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الرئيسي</label>
                                                            <input type="text" class="form-control" name="feedback_sub_title_ar" value="{{$data->getTranslation('feedback_sub_title', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الفرعي</label>
                                                            <input type="text" class="form-control" name="feedback_title_ar" value="{{$data->getTranslation('feedback_title', 'ar')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane p-3" id="profile2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الرئيسي</label>
                                                            <input type="text" class="form-control" name="feedback_sub_title" value="{{$data->getTranslation('feedback_sub_title', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الفرعي</label>
                                                            <input type="text" class="form-control" name="feedback_title" value="{{$data->getTranslation('feedback_title', 'en')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        الفيديو
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">رابط الفيديو</label>
                                    <input type="text" class="form-control" name="cll_to_action_video" value="{{$data->cll_to_action_video}}">
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#home2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                    <span class="d-none d-sm-block">العربية</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profile2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">الأنجليزية</span>
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active p-3" id="home2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الرئيسي</label>
                                                            <input type="text" class="form-control" name="cll_to_action_title_ar" value="{{$data->getTranslation('cll_to_action_title', 'ar')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane p-3" id="profile2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الرئيسي</label>
                                                            <input type="text" class="form-control" name="cll_to_action_title" value="{{$data->getTranslation('cll_to_action_title', 'en')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        فريق العمل
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#home2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                    <span class="d-none d-sm-block">العربية</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profile2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">الأنجليزية</span>
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active p-3" id="home2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الرئيسي</label>
                                                            <input type="text" class="form-control" name="team_sub_title_ar" value="{{$data->getTranslation('team_sub_title', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الفرعي</label>
                                                            <input type="text" class="form-control" name="team_title_ar" value="{{$data->getTranslation('team_title', 'ar')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane p-3" id="profile2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الرئيسي</label>
                                                            <input type="text" class="form-control" name="team_sub_title" value="{{$data->getTranslation('team_sub_title', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الفرعي</label>
                                                            <input type="text" class="form-control" name="team_title" value="{{$data->getTranslation('team_title', 'en')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        تواصل معنا
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#home2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                    <span class="d-none d-sm-block">العربية</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profile2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">الأنجليزية</span>
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active p-3" id="home2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الرئيسي</label>
                                                            <input type="text" class="form-control" name="contact_sub_title_ar" value="{{$data->getTranslation('contact_sub_title', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الفرعي</label>
                                                            <input type="text" class="form-control" name="contact_title_ar" value="{{$data->getTranslation('contact_title', 'ar')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane p-3" id="profile2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الرئيسي</label>
                                                            <input type="text" class="form-control" name="contact_sub_title" value="{{$data->getTranslation('contact_sub_title', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الفرعي</label>
                                                            <input type="text" class="form-control" name="contact_title" value="{{$data->getTranslation('contact_title', 'en')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        اتخاذ اجراء
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#home2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                    <span class="d-none d-sm-block">العربية</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profile2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">الأنجليزية</span>
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active p-3" id="home2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الرئيسي</label>
                                                            <input type="text" class="form-control" name="cll_to_action_main_title_ar" value="{{$data->getTranslation('cll_to_action_main_title', 'ar')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane p-3" id="profile2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الرئيسي</label>
                                                            <input type="text" class="form-control" name="cll_to_action_main_title" value="{{$data->getTranslation('cll_to_action_main_title', 'en')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        المدونة
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#home2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                    <span class="d-none d-sm-block">العربية</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profile2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">الأنجليزية</span>
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active p-3" id="home2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الرئيسي</label>
                                                            <input type="text" class="form-control" name="blog_sub_title_ar" value="{{$data->getTranslation('blog_sub_title', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الفرعي</label>
                                                            <input type="text" class="form-control" name="blog_title_ar" value="{{$data->getTranslation('blog_title', 'ar')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane p-3" id="profile2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الرئيسي</label>
                                                            <input type="text" class="form-control" name="blog_sub_title" value="{{$data->getTranslation('blog_sub_title', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الفرعي</label>
                                                            <input type="text" class="form-control" name="blog_title" value="{{$data->getTranslation('blog_title', 'en')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Layout -->
        <div class="row mt-1 mb-5">
            <div class="col-lg-12">
                <div class="mt-4 d-grid gap-2">
                    <button type="submit" class="btn btn-primary w-md"><i class="fa fa-refresh"></i> تحديث البيانات </button>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('script')

@endsection

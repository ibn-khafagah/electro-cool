@extends('backend.layout.master')
@section('title')
من نحن
@endsection
@section('css')

@endsection
@section('main')
    <form action="{{ route('admin_about_update', encrypt($data->id)) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">@yield('title')</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <div class="col-lg-12">
                                        <img src="{{asset('upload/about/'.$data->image1)}}" alt="" style="width: 100px;height: 100px">
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-firstname-input">الشعار</label>
                                            <input type="file" class="form-control"  name="image1" >
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <div class="col-lg-12">
                                        <img src="{{asset('upload/about/'.$data->image2)}}" alt="" style="width: 100px;height: 100px">
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-firstname-input">الأيقون</label>
                                            <input type="file" class="form-control"  name="image2" >
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">رابط الفيديو من اليوتيوب</label>
                                    <input type="text" class="form-control" name="video" value="{{$data->video}}">
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
                                                            <input type="text" class="form-control" name="title_ar" value="{{$data->getTranslation('title', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان المفرعي</label>
                                                            <input type="text" class="form-control" name="sub_title_ar" value="{{$data->getTranslation('sub_title', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">الوصف</label>
                                                            <input type="text" class="form-control" name="notes_ar" value="{{$data->getTranslation('notes', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">ميزة 1</label>
                                                            <input type="text" class="form-control" name="check1_ar" value="{{$data->getTranslation('check1', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">وصف مييزة 1</label>
                                                            <input type="text" class="form-control" name="check1_notes_ar" value="{{$data->getTranslation('check1_notes', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">ميزة 2</label>
                                                            <input type="text" class="form-control" name="check2_ar" value="{{$data->getTranslation('check2', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">وصف ميزة 2</label>
                                                            <input type="text" class="form-control" name="check2_notes_ar" value="{{$data->getTranslation('check2_notes', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">ميزة 3</label>
                                                            <input type="text" class="form-control" name="check3_ar" value="{{$data->getTranslation('check3', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">وصف ميزة 3</label>
                                                            <input type="text" class="form-control" name="check3_notes_ar" value="{{$data->getTranslation('check3_notes', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">ميزة 4</label>
                                                            <input type="text" class="form-control" name="check4_ar" value="{{$data->getTranslation('check4', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">وصف ميزة 4</label>
                                                            <input type="text" class="form-control" name="check4_notes_ar" value="{{$data->getTranslation('check4_notes', 'ar')}}">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tab-pane p-3" id="profile2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان الرئيسي</label>
                                                            <input type="text" class="form-control" name="title" value="{{$data->getTranslation('title', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان المفرعي</label>
                                                            <input type="text" class="form-control" name="sub_title" value="{{$data->getTranslation('sub_title', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">الوصف</label>
                                                            <input type="text" class="form-control" name="notes" value="{{$data->getTranslation('notes', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">ميزة 1</label>
                                                            <input type="text" class="form-control" name="check1" value="{{$data->getTranslation('check1', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">وصف مييزة 1</label>
                                                            <input type="text" class="form-control" name="check1_notes" value="{{$data->getTranslation('check1_notes', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">ميزة 21</label>
                                                            <input type="text" class="form-control" name="check2" value="{{$data->getTranslation('check2', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">وصف ميزة 21</label>
                                                            <input type="text" class="form-control" name="check2_notes" value="{{$data->getTranslation('check2_notes', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">ميزة 3</label>
                                                            <input type="text" class="form-control" name="check3" value="{{$data->getTranslation('check3', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">وصف ميزة 3 </label>
                                                            <input type="text" class="form-control" name="check3_notes" value="{{$data->getTranslation('check3_notes', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">ميزة 4</label>
                                                            <input type="text" class="form-control" name="check4" value="{{$data->getTranslation('check4', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">وصف ميزة 4</label>
                                                            <input type="text" class="form-control" name="check4_notes" value="{{$data->getTranslation('check4_notes', 'en')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-12">
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary w-md"><i class="fa fa-refresh"></i> تحديث البيانات </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Layout -->
    </form>
@endsection
@section('script')

@endsection

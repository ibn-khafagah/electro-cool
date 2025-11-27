@extends('backend.layout.master')
@section('title')
الأعدادات العامة
@endsection
@section('css')

@endsection
@section('main')
    <form action="{{ route('admin_setting_update', encrypt($data->id)) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">@yield('title')</h4>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mt-4">
                                    <div class="col-lg-12">
                                        <img src="{{asset('upload/setting/'.$data->logo)}}" alt="" style="width: 100px;height: 100px">
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-firstname-input">الشعار</label>
                                            <input type="file" class="form-control"  name="logo" >
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-4">
                                <div class="mt-4">
                                    <div class="col-lg-12">
                                        <img src="{{asset('upload/setting/'.$data->favicon)}}" alt="" style="width: 100px;height: 100px">
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-firstname-input">الأيقون</label>
                                            <input type="file" class="form-control"  name="favicon" >
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-4">
                                <div class="mt-4">
                                    <div class="col-lg-12">
                                        <img src="{{asset('upload/setting/'.$data->bg)}}" alt="" style="width: 100px;height: 100px">
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-firstname-input">خلفية تسجيل الدخول</label>
                                            <input type="file" class="form-control"  name="bg" >
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">رقم الهاتف</label>
                                    <input type="text" class="form-control" name="phone" value="{{$data->phone}}">
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">رقم الهاتف 2</label>
                                    <input type="text" class="form-control" name="phone1" value="{{$data->phone1}}">
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">البريد الألكتروني</label>
                                    <input type="text" class="form-control" name="email" value="{{$data->email}}">
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">البريد الألكتروني 2</label>
                                    <input type="text" class="form-control" name="email1" value="{{$data->email1}}">
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">ساعات العمل</label>
                                    <input type="text" class="form-control" name="opening_hour" value="{{$data->opening_hour}}">
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">رابط الموقع</label>
                                    <input type="text" class="form-control" name="location" value="{{$data->location}}">
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" value="{{$data->facebook}}">
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">X</label>
                                    <input type="text" class="form-control" name="x" value="{{$data->x}}">
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Youtube</label>
                                    <input type="text" class="form-control" name="youtube" value="{{$data->youtube}}">
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Instagram</label>
                                    <input type="text" class="form-control" name="instagram" value="{{$data->instagram}}">
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Linkedin</label>
                                    <input type="text" class="form-control" name="linkedin" value="{{$data->linkedin}}">
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Snapchat</label>
                                    <input type="text" class="form-control" name="snapchat" value="{{$data->snapchat}}">
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Tiktok</label>
                                    <input type="text" class="form-control" name="tiktok" value="{{$data->tiktok}}">
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Whatsapp</label>
                                    <input type="text" class="form-control" name="whatsapp" value="{{$data->whatsapp}}">
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
                                                            <label class="form-label" for="formrow-firstname-input">الأسم</label>
                                                            <input type="text" class="form-control" name="name_ar" value="{{$data->getTranslation('name', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان</label>
                                                            <input type="text" class="form-control" name="address_ar" value="{{$data->getTranslation('address', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">الوصف</label>
                                                            <input type="text" class="form-control" name="notes_ar" value="{{$data->getTranslation('notes', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">Meta Description(SEO)</label>
                                                            <textarea name="meta_description_ar" class="form-control" rows="10">{{$data->getTranslation('meta_description', 'ar')}}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">Meta Keyword(SEO)</label>
                                                            <textarea name="meta_keyword_ar" class="form-control" rows="10">{{$data->getTranslation('meta_keyword', 'ar')}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane p-3" id="profile2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">الأسم</label>
                                                            <input type="text" class="form-control" name="name" value="{{$data->getTranslation('name', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">العنوان</label>
                                                            <input type="text" class="form-control" name="address" value="{{$data->getTranslation('address', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">الوصف</label>
                                                            <input type="text" class="form-control" name="notes" value="{{$data->getTranslation('notes', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">Meta Description(SEO)</label>
                                                            <textarea name="meta_description" class="form-control" rows="10">{{$data->getTranslation('meta_description', 'en')}}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">Meta Keyword(SEO)</label>
                                                            <textarea name="meta_keyword" class="form-control" rows="10">{{$data->getTranslation('meta_keyword', 'en')}}</textarea>
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

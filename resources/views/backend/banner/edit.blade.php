@extends('backend.layout.master')
@section('title')
{{$data->name}}
@endsection
@section('css')

@endsection
@section('main')
    <form action="{{ route('admin_banner_update', encrypt($data->id)) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">@yield('title')</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mt-4">
                                    <div class="col-lg-12">
                                        <img src="{{asset('upload/banner/'.$data->image)}}" alt="" style="width: 100px;height: 100px">
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-firstname-input">الصورة</label>
                                            <input type="file" class="form-control"  name="image" >
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
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">الأسم</label>
                                                            <input type="text" class="form-control" name="name_ar" value="{{$data->getTranslation('name', 'ar')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">الوصف</label>
                                                            <textarea name="notes_ar" class="form-control" rows="10" >{{$data->getTranslation('notes', 'ar')}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane p-3" id="profile2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">الأسم</label>
                                                            <input type="text" class="form-control" name="name" value="{{$data->getTranslation('name', 'en')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">الوصف</label>
                                                            <textarea name="notes" class="form-control" rows="10" >{{$data->getTranslation('notes', 'en')}}</textarea>
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

@extends('backend.layout.master')
@section('title')
    اضافة سؤال
@endsection
@section('css')

@endsection
@section('main')
    <form action="{{ route('admin_faq_store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">@yield('title')</h4>
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
                                                            <input type="text" class="form-control" name="name_ar" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">الوصف</label>
                                                            <textarea name="notes_ar" class="form-control ckeditor" rows="10" required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane p-3" id="profile2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">الأسم</label>
                                                            <input type="text" class="form-control" name="name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">الوصف</label>
                                                            <textarea name="notes" class="form-control ckeditor" rows="10" required></textarea>
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
                                    <button type="submit" class="btn btn-primary w-md"><i class="fa fa-plus"></i> اضافة جديد </button>
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

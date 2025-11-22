@extends('backend.layout.master')
@section('title')
    اضافة شريك
@endsection
@section('css')

@endsection
@section('main')
    <form action="{{ route('admin_partner_store') }}" method="post" enctype="multipart/form-data">
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
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-firstname-input">الصورة</label>
                                            <input type="file" class="form-control"  name="image" required>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">الأسم</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                        </div> <!-- end row -->
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

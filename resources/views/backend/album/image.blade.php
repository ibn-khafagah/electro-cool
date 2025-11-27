@extends('backend.layout.master')
@section('title')
{{$data->name}}
@endsection
@section('css')

@endsection
@section('main')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <form action="{{ route('admin_album_uploadImages', encrypt($data->id)) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="mt-4">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-firstname-input">الصور</label>
                                                <input type="file" class="form-control"  name="image[]" multiple required>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-lg-4">
                                    <div class="mt-4">
                                        <div class="col-lg-12">
                                            <div class="d-grid gap-2" style="padding-top: 30px">
                                               <button type="submit" class="btn btn-outline-success">اضافة الصور</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                        </form>
                    </div>
                    <hr>
                    <div class="row">
                        @foreach($data->images as $image)
                                <div class="col-lg-3 mb-4">
                                    <a href="{{ route('admin_album_destroyImage', encrypt($image->id)) }}" class="btn btn-danger btn-sm mb-2"><i class="fa fa-trash-alt"></i></a>
                                    <div class="zoom-gallery">
                                        <a class="" href="{{asset('upload/album/'.$image->image)}}" title="{{$image->name}}"><img src="{{asset('upload/album/'.$image->image)}}" alt="" width="100%"></a>
                                    </div>
                                </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div><!-- end row -->
@endsection
@section('script')

@endsection

@extends('backend.layout.master')
@section('title')
    قائمة البنرات
@endsection
@section('css')

@endsection
@section('main')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><a href="{{ route('admin_banner_create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> اضافة بنر </a></h4>
                    <hr>
                    <div class="table-responsive">
                        {{$dataTable->table([
                            'class'    =>  'table table-striped table-bordered dt-responsive nowrap',
                        ])}}
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection
@section('script')
    {{ $dataTable->scripts() }}
@endsection

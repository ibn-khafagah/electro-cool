@extends('backend.layout.master')
@section('title')
    طلبات التواصل
@endsection
@section('css')

@endsection
@section('main')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
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

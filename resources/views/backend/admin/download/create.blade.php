@extends('backend.master')
@section('title')
    Download | create
@stop
@section('breadcum')
    @include('backend.admin.includes.breadcum',['heading'=>"Download","sub_heading"=>'create'])
@stop
@section('content')
    @include("backend.admin.includes.errors")
    <form class="input_form" action="{{ route('downloads.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
         <div class="card-body">
            @include("backend.admin.download.partial.form",['type'=>'create'])
          </div>
    </form>
@stop
@push('scripts')
   @include("backend.admin.download.script")
@endpush

@extends('backend.master')
@section('title')
    Download | edit
@stop
@section('breadcum')
    @include('backend.admin.includes.breadcum',['heading'=>"Download","sub_heading"=>'edit'])
@stop
@section('content')
    @include("backend.admin.includes.errors")
        <form class="input_form" action="{{ route('downloads.update',['id' => $download->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
         <div class="card-body">
            @include("backend.admin.download.partial.form",['type'=>'edit'])
          </div>
    </form>
@stop
@push('scripts')
   @include("backend.admin.download.script")
@endpush

@extends('backend.master')
@section('title')
    Gallery | create
@stop
@section('breadcum')
    @include('backend.admin.includes.breadcum',['heading'=>"Gallery","sub_heading"=>'create'])
@stop
@section('content')
    @include("backend.admin.includes.errors")
    <form class="input_form" action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
         <div class="card-body">
            @include("backend.admin.gallery.partial.form",['type'=>'create'])
          </div>
    </form>
@stop
@push('scripts')
   @include("backend.admin.gallery.script")
@endpush

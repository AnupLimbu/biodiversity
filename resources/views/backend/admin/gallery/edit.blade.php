@extends('backend.master')
@section('title')
    Gallery | edit
@stop
@section('breadcum')
    @include('backend.admin.includes.breadcum',['heading'=>"Gallery","sub_heading"=>'edit'])
@stop
@section('content')
    @include("backend.admin.includes.errors")
        <form class="input_form" action="{{ route('gallery.update',['id' => $gallery->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
         <div class="card-body">
            @include("backend.admin.gallery.partial.form",['type'=>'edit'])
          </div>
    </form>
@stop
@push('scripts')
   @include("backend.admin.gallery.script")
@endpush

@extends('backend.master')
@section('title')
    Category | edit
@stop
@section('breadcum')
    @include('backend.admin.includes.breadcum',['heading'=>"Category","sub_heading"=>'edit'])
@stop
@section('content')
    @include("backend.admin.includes.errors")
        <form class="input_form" action="{{ route('categories.update',['id' => $category->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
         <div class="card-body">
            @include("backend.admin.category.partial.form",['type'=>'edit'])
          </div>
    </form>
@stop
@push('scripts')
   @include("backend.admin.category.script")
@endpush

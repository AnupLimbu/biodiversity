@extends('backend.master')
@section('title')
    Category | create
@stop
@section('breadcum')
    @include('backend.admin.includes.breadcum',['heading'=>"Category","sub_heading"=>'create'])
@stop
@section('content')
    @include("backend.admin.includes.errors")
    <form class="input_form" action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
         <div class="card-body">
            @include("backend.admin.category.partial.form",['type'=>'create'])
          </div>
    </form>
@stop
@push('scripts')
   @include("backend.admin.category.script")
@endpush

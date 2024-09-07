@extends('backend.master')
@section('title')
    Category | edit
@stop
@section('breadcum')
    @include('backend.admin.includes.breadcum',['heading'=>"ContactUs","sub_heading"=>'edit'])
@stop
@section('content')
    @include("backend.admin.includes.errors")
    <form class="input_form" action="{{ route('contact_us.update',['id' => $category->id])}}" method="POST"
          enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
            @include("backend.admin.contact.partial.form",['type'=>'edit'])
        </div>
    </form>
@stop
@push('scripts')
    @include("backend.admin.contact.script")
@endpush

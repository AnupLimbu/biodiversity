@extends('backend.master')
@section('title')
    Project | create
@stop
@section('breadcum')
    @include('backend.admin.includes.breadcum',['heading'=>"Project","sub_heading"=>'create'])
@stop
@section('content')
    @include("backend.admin.includes.errors")
    <form class="input_form" action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            @include("backend.admin.project.partial.form",['type'=>'create'])
        </div>
    </form>
@stop
@push('scripts')
    @include("backend.admin.project.script")
@endpush

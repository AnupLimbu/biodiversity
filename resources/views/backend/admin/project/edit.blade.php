@extends('backend.master')
@section('title')
    Project | edit
@stop
@section('breadcum')
    @include('backend.admin.includes.breadcum',['heading'=>"Project","sub_heading"=>'edit'])
@stop
@section('content')
    @include("backend.admin.includes.errors")
    <form class="input_form" action="{{ route('projects.update',['id' => $project->id])}}" method="POST"
          enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="card-body">
            @include("backend.admin.project.partial.form",['type'=>'edit'])
        </div>
    </form>
@stop
@push('scripts')
    @include("backend.admin.project.script")
@endpush

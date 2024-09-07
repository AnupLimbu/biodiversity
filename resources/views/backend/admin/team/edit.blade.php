@extends('backend.master')
@section('title')
    Team | edit
@stop
@section('breadcum')
    @include('backend.admin.includes.breadcum',['heading'=>"Team","sub_heading"=>'edit'])
@stop
@section('content')
    @include("backend.admin.includes.errors")
        <form class="input_form" action="{{ route('teams.update',['id' => $team->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
         <div class="card-body">
            @include("backend.admin.team.partial.form",['type'=>'edit'])
          </div>
    </form>
@stop
@push('scripts')
   @include("backend.admin.team.script")
@endpush

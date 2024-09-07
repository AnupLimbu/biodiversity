@extends('backend.master')
@section('title')
    Team | create
@stop
@section('breadcum')
    @include('backend.admin.includes.breadcum',['heading'=>"Team","sub_heading"=>'create'])
@stop
@section('content')
    @include("backend.admin.includes.errors")
    <form class="input_form" action="{{ route('teams.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
         <div class="card-body">
            @include("backend.admin.team.partial.form",['type'=>'create'])
          </div>
    </form>
@stop
@push('scripts')
   @include("backend.admin.team.script")
@endpush

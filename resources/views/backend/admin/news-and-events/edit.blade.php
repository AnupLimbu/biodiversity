@extends('backend.master')
@section('title')
    News & Events  | Edit
@stop
@section('breadcum')
    @include('backend.admin.includes.breadcum',['heading'=>"News & Events","sub_heading"=>'edit'])
@stop
@section('content')
    @include("backend.admin.includes.errors")
    <form class="" action="{{ route('news-and-events.update',$newsAndEvent->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        <div class="card-body">
            @include("backend.admin.news-and-events.partials.form",['type'=>'edit'])
        </div>
    </form>
@stop

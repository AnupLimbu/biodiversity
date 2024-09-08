@extends('backend.master')
@section('title')
    News & Events | Create
@stop
@section('breadcum')
    @include('backend.admin.includes.breadcum',['heading'=>"News & Events","sub_heading"=>'create'])
@stop
@section('content')
    @include("backend.admin.includes.errors")
    <form class="" action="{{ route('news-and-events.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            @include("backend.admin.news-and-events.partials.form",['type'=>'create'])
        </div>
    </form>
@stop

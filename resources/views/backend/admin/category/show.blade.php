@extends('backend.master')
@section('title')
    Category | show
@stop
@section('breadcum')
    @include('backend.admin.includes.breadcum',['heading'=>"Category","sub_heading"=>'show'])
@stop
@section('content')
    @include("backend.admin.includes.errors")
    <div class="row ">
        <div class="col-12">

        </div>
    </div>
@stop
@push('scripts')
<script type="text/javascript">

</script>
@include("backend.admin.category.script")
@endpush


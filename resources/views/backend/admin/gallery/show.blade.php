@extends('backend.master')
@section('title')
    Download | show
@stop
@section('breadcum')
    @include('backend.admin.includes.breadcum',['heading'=>"Download","sub_heading"=>'show'])
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
@include("backend.admin.download.script")
@endpush


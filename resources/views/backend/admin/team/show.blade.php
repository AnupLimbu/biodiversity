@extends('backend.master')
@section('title')
    Team | show
@stop
@section('breadcum')
    @include('backend.admin.includes.breadcum',['heading'=>"Team","sub_heading"=>'show'])
@stop
@section('content')
    @include("backend.admin.includes.errors")
    <div class="" style="display: flex; justify-content: center">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0 text-bold">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-white"> {{$team->name}}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0 text-bold">Designation</h6>
                        </div>
                        <div class="col-sm-9 text-white"> {{$team->designation}}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0 text-bold">Phone</h6>
                        </div>
                        <div class="col-sm-9 text-white"> {{$team->contact}}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0 text-bold">Social Links</h6>
                        </div>
                        <div class="col-sm-9 text-white">
                        @if($team->facebook_link)
                                <a style="font-size: 50px;" href="{{$team->instagram_link}}"><i class="fa-brands fa-facebook" title="Facebook"></i></a>
                        @endif
                            @if($team->facebook_link)
                                <a style="font-size: 50px;" href="{{$team->instagram_link}}"><i class="fa-brands fa-instagram" title="Instagram"></i></a>
                            @endif
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0 text-bold">Image</h6>
                        </div>
                        <div class="col-sm-9 text-white">
                            <img src="{{$team->image ??''}}" alt="" width="500px" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
@push('scripts')
<script type="text/javascript">

</script>
@include("backend.admin.team.script")
@endpush


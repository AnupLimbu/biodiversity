@extends('backend.master')
@section('title')
    Contact | show
@stop
@section('breadcum')
    @include('backend.admin.includes.breadcum',['heading'=>"Contact","sub_heading"=>'show'])
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
                        <div class="col-sm-9 text-white"> {{$contact->name}}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0 text-bold">Email</h6>
                        </div>
                        <div class="col-sm-9 text-white"> {{$contact->email}}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0 text-bold">Phone</h6>
                        </div>
                        <div class="col-sm-9 text-white"> {{$contact->number}}</div>
                    </div>
                    <hr>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0 text-bold">Message</h6>
                        </div>
                        <div class="col-sm-9 text-white"> {{$contact->message}}</div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>

    </div>
@stop
@push('scripts')
    <script type="text/javascript">

    </script>
    @include("backend.admin.contact.script")
@endpush


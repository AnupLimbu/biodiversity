@extends('backend.master')
@section('title')
    Team | index
@stop
@section('breadcum')
    @include('backend.admin.includes.breadcum',['heading'=>"Team","sub_heading"=>'index'])
@stop
@section('content')
    @include("backend.admin.includes.errors")
    <div class="row ">

            <div class="col-12 text-right mb-2">
                <a href="{{ route('teams.create') }}" class="btn btn-primary" > Add Team</a>
            </div>
        <div class="col-12">
            <table class="table table-bordered datatable">
                <thead>
                <tr>
                    <th width="2%">S.N</th>
                    <th width="10%">Name</th>
                    <th width="10%">Description</th>
                    <th width="10%">Designation</th>
                    <th width="10%">Type</th>
                    <th width="10%">Social Links</th>
                    <th width="2%">Order</th>
                    <th width="2%">Image</th>
                    <th width="10%">Action</th>
                </tr>

                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@stop
@push('scripts')
<script type="text/javascript">
    $(function () {
        $('.datatable').DataTable({
         serverSide: true,
         processing: true,
         order: [[0, 'desc']],
         ajax:{
            method: 'GET',
            url: "{{ route('teams.list') }}",
            data: function(d) {
               d.startDate = '';
               d.endDate = '';
                },
                dataType: "JSON",
            },
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'DT_RowIndex'},
                {data: 'description', name: 'description'},
                {data: 'designation', name: 'designation'},
                {data: 't_type', name: 'type', render:function(data, row){
                        return data=="team"?"Executive Member":data;
                }},
                {data: 'social_links', name: 'social_links'},
                {data: 'order', name: 'order'},
                {data: 'image', name: 'image', render:function(data, row){
                    return data?'<img src='+data+' alt="" style=" height: 100px; width: 100px;object-fit:cover ">':'';
                    }},
                {data: 'action', name: 'action'},
            ]
        });
    });
        $(document).ready(function() {
            $("[name='DataTables_Table_0_length']").css("margin-right", "10px");
        });
</script>
@include("backend.admin.team.script")
@endpush

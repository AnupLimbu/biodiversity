@extends('backend.master')
@section('title')
    Gallery | index
@stop
@section('breadcum')
    @include('backend.admin.includes.breadcum',['heading'=>"Gallery","sub_heading"=>'index'])
@stop
@section('content')
    @include("backend.admin.includes.errors")
    <div class="row ">
            <div class="col-12 text-right mb-2">
                <a href="{{ route('gallery.create') }}" class="btn btn-primary" > Add image</a>
            </div>
        <div class="col-12">
            <table class="table table-bordered datatable">
                <thead>
                <tr>
                    <th width="10px">S.N</th>
                    <th width="10px">Name</th>
                    <th width="10px">Description</th>
                    <th width="10px">Image</th>
                    <th width="10px">order</th>
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
            url: "{{ route('gallery.list') }}",
            data: function(d) {
               d.startDate = '';
               d.endDate = '';
                },
                dataType: "JSON",
            },
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
                {data: 'description', name: 'description'},
                {data: 'thumbnail', name: 'thumbnail',render:function (data,row) {
                        return '<img src="'+data+'" alt="image" class="w-full" style="width: 150px;height: 150px;object-fit:cover"/>';
                    }},
                {data: 'order', name: 'order'},
                {data: 'action', name: 'action'},
            ]
        });
    });
        $(document).ready(function() {
            $("[name='DataTables_Table_0_length']").css("margin-right", "10px");
        });
</script>
@include("backend.admin.gallery.script")
@endpush

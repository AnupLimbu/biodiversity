@extends('backend.master')
@section('title')
    Download | index
@stop
@section('breadcum')
    @include('backend.admin.includes.breadcum',['heading'=>"Download","sub_heading"=>'index'])
@stop
@section('content')
    @include("backend.admin.includes.errors")
    <div class="row ">
            <div class="col-12 text-right mb-2">
                <a href="{{ route('downloads.create') }}" class="btn btn-primary" > Add Download</a>
            </div>
        <div class="col-12">
            <table class="table table-bordered datatable">
                <thead>
                <tr>
                    <th width="10px">S.N</th>
                    
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
            url: "{{ route('downloads.list') }}",
            data: function(d) {
               d.startDate = '';
               d.endDate = '';
                },
                dataType: "JSON",
            },
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                
                {data: 'action', name: 'action'},
            ]
        });
    });
        $(document).ready(function() {
            $("[name='DataTables_Table_0_length']").css("margin-right", "10px");
        });
</script>
@include("backend.admin.download.script")
@endpush

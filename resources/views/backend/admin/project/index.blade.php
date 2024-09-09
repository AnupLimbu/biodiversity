@extends('backend.master')
@section('title')
    Project | index
@stop
@section('breadcum')
    @include('backend.admin.includes.breadcum',['heading'=>"Project","sub_heading"=>'index'])
@stop
@section('content')
    @include("backend.admin.includes.errors")
    <div class="row ">
        <div class="col-12 text-right mb-2">
            <a href="{{ route('projects.create') }}" class="btn btn-primary"> Add Project</a>
        </div>
        <div class="col-12">
            <table class="table table-bordered datatable">
                <thead>
                <tr>
                    <th width="2%">S.N</th>
                    <th width="10%">Title</th>
                    <th width="10%">Thumbnail</th>
                    <th width="10%">Description</th>
                    <th width="10%">Start Date</th>
                    <th width="10%">Status</th>
                    <th width="2%">Action</th>
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
                ajax: {
                    method: 'GET',
                    url: "{{ route('projects.list') }}",
                    data: function (d) {
                        d.startDate = '';
                        d.endDate = '';
                    },
                    dataType: "JSON",
                },
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'title', name: 'title',render:function (data,a,row) {
                        console.log(row)
                            return '<a target="_blank"    href="'+"{{env('APP_URL')}}"+'/projects/'+row.id+'"> '+data+' </a>';
                        }},
                    {data: 'image', name: 'image',render:function (data,row) {
                            return '<img src="'+data+'" alt="image" class="w-full" style="width: 150px;height: 150px"/>';
                    }},
                    {data: 'description', name: 'description', render:function (data,row) {
                            return data.substring(0,10);
                        }},
                    {data: 'start_date', name: 'DT_RowIndex'},
                    {data: 'status', name: 'status', render:function(data, row){
                        let badge = "";
                             if (data=="halted"){
                                badge ="badge bg-danger";
                            }
                            if (data=="completed"){
                                badge ="badge bg-green";
                            }
                            if (data=="pending"){
                                badge ="badge bg-primary";
                            }
                            if (data=="on-going"){
                                badge ="badge bg-warning";
                            }
                        return '<span class="'+badge+'">'+data+'</span>';
                    }},

                    {data: 'action', name: 'action'},
                ]
            });
        });
        $(document).ready(function () {
            $("[name='DataTables_Table_0_length']").css("margin-right", "10px");
        });
    </script>
    @include("backend.admin.project.script")
@endpush

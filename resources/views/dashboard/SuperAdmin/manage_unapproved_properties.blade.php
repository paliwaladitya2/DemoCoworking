@extends('dashboard.dashboard')
@section('csscontent')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Manage UnApproved Properties</h2>
                </div>    
                <div class="card-body">
                    <table class="table table-striped table-bordered yajra_datatable">
                        <thead>
                            <th>ID</th>
                            <th>Property Name</th>
                            <th>Admin</th>
                            <th>Email</th>
                            <th>Number</th>
                            <th>Assign Admin</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>    
        </div>    
    </div>    
</div>
@endsection
@section('jscontent')
    {{--------------------------------------- yajra datatables and swal -------------------------------------------}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript">
        $(function(){
            var table = $('.yajra_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{  route('manage_unapproved_properties') }}",
                columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'admin',
                    name: 'admin'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'phone',
                    name: 'phone'
                },
                {
                    data: 'action1',
                    name: 'action1'
                },
                {
                    data: 'action2',
                    name: 'action2',
                    orderable: false,
                    searchable: false
                },
            ]
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript">
        $(document).on('change','.assign',function(){
            var admin = $(this).val();
            var user_id = $(this).closest('select').attr('data-id');
            var url = "{{ route('assignadmin') }}";
            swal.fire({
                title: "Are you Sure?",
                text: "You want to assign this user as property admin?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Assign it!'
            }).then((result) =>{
                if(result.isConfirmed){
                    $.ajax({
                        type: 'GET',
                        url: url,
                        data: {
                            id: user_id,
                            admin: admin,
                        },
                        success: function(data){
                            swal.fire({
                                title: 'Assigned!',
                                text: 'Property Admin has been Assigned.',
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then((result)=>{
                                window.location.reload();
                            });
                        }
                    });
                }
            })
        });
    </script>
    <script type="text/javascript">
        $(document).on('click','.approve',function(){
            var row_id = $(this).attr('id');
            var table_row = $(this).closest('tr');
            var url = "{{ route('approve') }}";
            swal.fire({
                title: "Are you Sure?",
                text: "You want to approve this property?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Approve it!'
            }).then((result) =>{
                if(result.isConfirmed){
                    $.ajax({
                        type: 'GET',
                        url: url,
                        data: {
                            id: row_id,
                        },
                        success: function(data){
                            swal.fire({
                                title: 'Approved!',
                                text: 'Property has been Approved.',
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then((result)=>{
                                window.location.reload();
                            });
                        }
                    });
                }
            })
        });
    </script>
@endsection
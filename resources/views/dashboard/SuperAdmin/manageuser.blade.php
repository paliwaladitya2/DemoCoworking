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
                    <h2>Manage user content</h2>
                </div>    
                <div class="card-body">
                    <table class="table table-striped table-bordered yajra_datatable">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Number</th>
                            <th>Change Role</th>
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
                ajax: "{{  route('manageuser_superadmin') }}",
                columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'role',
                    name: 'role'
                },
                {
                    data: 'phone',
                    name: 'phone'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript">
        $(document).on('change','.change',function(){
            var role = $(this).val();
            var user_id = $(this).closest('select').attr('data-id');
            var url = "{{ route('changerole') }}";
            swal.fire({
                title: "Are you Sure?",
                text: "You want to change the Role?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Change it!'
            }).then((result) =>{
                if(result.isConfirmed){
                    $.ajax({
                        type: 'GET',
                        url: url,
                        data: {
                            id: user_id,
                            role: role,
                        },
                        success: function(data){
                            swal.fire({
                                title: 'Updated!',
                                text: 'Your Role has been Updated.',
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
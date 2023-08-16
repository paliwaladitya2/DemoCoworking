@extends('dashboard.dashboard')
@section('csscontent')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h2>Facility Team</h2>
                    <a href="#" data-toggle="modal" data-target="#loginModal" class="btn btn-primary float-end">Create Facility Team</a>
                </div> 
                <div class="modal fade " id="loginModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content pl-5 pr-5">
                        <form action="{{ Route('savefacility') }}" method="post">
                            @csrf
                          <div class="modal-header">
                            <h5 class="modal-title d-flex align-items-center" > <i class="fa fa-user h2 m-2"></i>Register</h5>
                            <button type="reset" class="close shadow-none text-reset" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="form-group mb-3">
                              <input type="hidden" value="itTeam" name="role" class="form-control shadow-none">
                            </div>
                            <div class="form-group mb-3">
                                <select name="property" id="property" class="form-control">
                                    <option value="">Select Property</option>
                                    @foreach ($properties as $property)
                                        <option value="{{ $property->id }}">{{ $property->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label >Name</label>
                                <input type="text" name="name" class="form-control shadow-none">
                            </div>
                            <div class="form-group mb-3">
                              <label >Email address</label>
                              <input type="email" name="email" class="form-control shadow-none">
                            </div>
                            <div class="form-group mb-4">
                              <label >Password</label>
                              <input type="password" name="password" class="form-control shadow-none">
                            </div>
                            <div class="form-group mb-4">
                                <label >Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control shadow-none">
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                              <button type="submit " name="sub" class="btn btn-primary shadow-none">Register</button>
                            </div>
                          </div>
                          
                          
                        </form>
                      </div>
                    </div>
                  </div>   
                <div class="card-body">
                    <table class="table table-striped table-bordered yajra_datatable">
                        <thead>
                            <th>ID</th>
                            <th>Property Name</th>
                            <th>Name</th>
                            <th>Email</th>
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
                ajax: "{{  route('createfacility') }}",
                columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'property_id',
                    name: 'property_id'
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
        $(document).on('click', '.delete', function() {
            var row_id = $(this).attr('id');
            var table_row = $(this).closest('tr');
            var url = "{{ route('deletefacility',':id') }}";
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'get',
                        url: url.replace(':id', row_id),
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: row_id,
                        },
                        success: function(data) {
                            Swal.fire({
                                title: 'Deleted!',
                                text: 'Your team has been deleted.',
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                table_row.remove();
                            });
                        }
                    });
                }
            })
        });
    </script>
@endsection
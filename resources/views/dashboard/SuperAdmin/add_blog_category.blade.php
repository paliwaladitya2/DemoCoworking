@extends('dashboard.dashboard')
@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h2>Add Blog Category</h2>
                <a href="{{ route('manage_blog_category') }}" class="btn btn-primary float-end">Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('save_blog_category') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Blog Category Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Blog Category Name">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Blog Category</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 
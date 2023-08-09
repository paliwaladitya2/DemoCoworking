@extends('dashboard.dashboard')
@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h2>Edit Blog Category</h2>
                <a href="{{ route('manage_blog_category') }}" class="btn btn-primary float-end">Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('update_blog_category') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $blog_category->id }}">
                    <div class="mb-3">
                        <label for="name" class="form-label">Blog Category Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $blog_category->name }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Blog Category</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
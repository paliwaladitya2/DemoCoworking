@extends('dashboard.dashboard')
@section('csscontent')
<style>
    .ck-editor__editable_inline {
        min-height: 200px !important;
    }

</style>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h2>Add Blog</h2>
                <a href="{{ route('manage_blogs') }}" class="btn btn-primary float-end">Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('save_blog') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Blog Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Blog Title">
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Blog Slug</label>
                        <input class="form-control" id="slug" name="slug" placeholder="Enter Blog Slug">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Blog Image</label>
                        <input type="file" class="form-control" id="image_main" name="image_main" placeholder="Enter Blog Image">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Blog Content</label>
                        <textarea class="form-control" id="content" name="content" placeholder="Enter Blog Content"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Blog Category</label>
                        <select class="form-control" id="category_id" name="category_id">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="meta_title">Meta Title</label>
                        <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Enter Meta Title">
                    </div>
                    <div class="mb-3">
                        <label for="meta_description" class="form-label">Meta Description</label>
                        <textarea class="form-control" id="meta_description" name="meta_description" placeholder="Enter Meta Description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="meta_keywords" class="form-label">Meta Keywords</label>
                        <textarea class="form-control" id="meta_keywords" name="meta_keywords" placeholder="Enter Meta Keywords"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="tags" class="form-label">Tags</label>
                        <div class="row">
                            <div class="col-2 mb-3">
                                <input type="text" class="form-control" id="tag1" name="tag1" placeholder="Enter Tag 1">
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control" id="tag2" name="tag2" placeholder="Enter Tag 2">
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control" id="tag3" name="tag3" placeholder="Enter Tag 3">
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control" id="tag4" name="tag4" placeholder="Enter Tag 4">
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control" id="tag5" name="tag5" placeholder="Enter Tag 5">
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control" id="tag6" name="tag6" placeholder="Enter Tag 6">
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control" id="tag7" name="tag7" placeholder="Enter Tag 7">
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control" id="tag8" name="tag8" placeholder="Enter Tag 8">
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control" id="tag9" name="tag9" placeholder="Enter Tag 9">
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control" id="tag10" name="tag10" placeholder="Enter Tag 10">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Blog</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('jscontent')
<script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor.create(document.querySelector('#content'), {
        toolbar: {
            items: [
                'heading'
                , '|'
                , 'bold'
                , 'italic'
                , 'underline'
                , '|'
                , 'link'
                , 'bulletedList'
                , 'numberedList'
                , '|'
                , 'indent'
                , 'outdent'
                , '|'
                , 'undo'
                , 'redo'
                , '|'
                , 'blockQuote'
            ]
        }
    , }).catch(error => {
        console.error(error);
    });
    ClassicEditor.create(document.querySelector('#meta_description'), {
        toolbar: {
            items: [
                'heading'
                , '|'
                , 'bold'
                , 'italic'
                , 'underline'
                , '|'
                , 'link'
                , 'bulletedList'
                , 'numberedList'
                , '|'
                , 'indent'
                , 'outdent'
                , '|'
                , 'undo'
                , 'redo'
                , '|'
                , 'blockQuote'
            ]
        }
    , }).catch(error => {
        console.error(error);
    });
</script>
@endsection
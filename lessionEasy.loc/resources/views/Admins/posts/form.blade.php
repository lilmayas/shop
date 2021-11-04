@extends('admins.layout')

@section('content')

<form action="{{ route('admin.posts.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label name='title' class="form-label">Title</label>
        <input type="text" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label name='title' class="form-label">Content</label>
        <textarea class="form-control" name='content'></textarea>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" name='is_active' value="1" >
        <label class="form-check-label" for="exampleCheck1">Is Active</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
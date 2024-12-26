@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>Edit About Us</h1>
    <form action="{{ route('admin.about.update') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" name="content" class="form-control" rows="5" required>{{ old('content', $aboutUs->content) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

@extends('panel.layout.app')
@section('title', 'Support Requests')
@section('content')
<div class="container">
    <h1>Add New Ad</h1>
    <form action="{{ route('dashboard.ads.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Position</label>
            <select name="position" class="form-control" required>
                <option value="header">Header</option>
                <option value="sidebar">Sidebar</option>
                <option value="footer">Footer</option>
            </select>
        </div>
        <div class="form-group">
            <label for="code">Ad Code</label>
            <textarea name="code" id="code" class="form-control" rows="5">{{ old('code', $ad->code ?? '') }}</textarea>
            <small class="form-text text-muted">Enter the HTML or JavaScript code for the ad.</small>
        </div>
        
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection

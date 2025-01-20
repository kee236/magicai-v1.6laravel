@extends('panel.layout.app')
@section('title', 'Support Requests')

@section('content')
<div class="container">
    <h1>Manage Ads</h1>
    <a href="{{ route('dashboard.ads.create') }}" class="btn btn-primary">Add New Ad</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Title</th>
                <th>Position</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ads as $ad)
            <tr>
                <td>{{ $ad->title }}</td>
                <td>{{ $ad->position }}</td>
                <td>
                    <a href="{{ route('dashboard.ads.edit', $ad->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('dashboard.ads.destroy', $ad->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

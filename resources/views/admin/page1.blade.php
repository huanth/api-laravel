@extends('admin.layouts.app')

@section('content')
<div class="container py-4">
    <h1>Page 1</h1>
    <p>This is admin page 1 content.</p>
    <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Back to Dashboard</a>
</div>
@endsection
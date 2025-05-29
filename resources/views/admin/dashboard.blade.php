@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Admin Dashboard</h1>
    <nav class="mb-4">

        <h2> Xin chào, {{ auth()->user()->name }}!</h2>
        <a href="{{ route('admin.change-password.form') }}" class="btn btn-warning mb-3">Đổi mật khẩu</a>

        <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-primary me-2">Dashboard</a>
        <a href="{{ route('admin.page1') }}" class="btn btn-outline-secondary me-2">Page 1</a>

        <form method="POST" action="{{ route('admin.logout') }}" class="d-inline-block float-end">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </nav>
    <p>Welcome to the admin dashboard!</p>
</div>
@endsection
@extends('layouts.app')

@section('title', 'Không có quyền')

@section('content')
<div class="container py-5 text-center">
    <h1 class="display-4">403 - Không có quyền truy cập</h1>
    <p class="lead">Bạn không phải admin để truy cập trang này.</p>
    <a href="/" class="btn btn-primary mt-3">Quay về trang chủ</a>
</div>
@endsection
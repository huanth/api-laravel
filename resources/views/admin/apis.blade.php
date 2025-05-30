@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0)">List APIs</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>
<!-- [ breadcrumb ] end -->

<div class="container py-4">
    <div class="row">

    </div>
</div>
@endsection
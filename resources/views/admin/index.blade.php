@extends('layout.app')

@section('title')
    Dashboard | Admin Details
@endsection

@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-0">Dashboard</h4>
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </div>
        @auth
            <h2>Welcome Back!</h2>
            <h4>{{ Auth::user()->name }}</h4>
            <h4>{{ Auth::user()->email }}</h4>
        @endauth
    </div>
@endsection

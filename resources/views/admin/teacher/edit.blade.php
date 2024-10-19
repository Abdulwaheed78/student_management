@extends('layout.app')

@section('title')
    Teacher | Edit Teacher
@endsection

@section('content')

    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-0">Edit Teacher</h4>
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item">Teachers</li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </div>

        @include('layout.alerts')
        <div class="card mb-4">
            <h6 class="card-header">Fill Teacher Details</h6>
            <div class="card-body">
                <form action="{{ route('teacher.update', $data->id) }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" value="{{ $data->name }}" placeholder="name"
                                    name="name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" value="{{ $data->email }}" placeholder="email"
                                    name="email">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Education</label>
                                <input type="text" class="form-control" value="{{ $data->education }}"
                                    placeholder="education" name="education">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Date Of Birth</label>
                                <input type="date" class="form-control" value="{{ $data->dob }}" name="dob">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">About</label>
                        <input type="text" class="form-control" value="{{ $data->about }}" placeholder="about"
                            name="about">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{route('manageteacher')}}" class="btn btn-danger">Cancel</a>

                </form>
            </div>
        </div>
    </div>
@endsection

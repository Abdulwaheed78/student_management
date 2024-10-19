@extends('layout.app')

@section('title')
    Students | Add Student
@endsection

@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-0">Create Student</h4>
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item">Students</li>
                <li class="breadcrumb-item active">Add</li>
            </ol>
        </div>

        @include('layout.alerts')
        <div class="card mb-4">
            <h6 class="card-header">Fill Student Details</h6>
            <div class="card-body">
                <form action="{{ route('student.create') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" placeholder="name" name="name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Teacher</label>
                                <select id="teacher" class="form-control" name="teacher_id">
                                    <option value="0"></option>
                                    @foreach ($data as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Class Name</label>
                                <input type="text" class="form-control" placeholder="class" name="class">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Fees Per Year</label>
                                <input type="number" class="form-control" placeholder="fees" name="yearly_fees">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Admission Date</label>
                                <input type="date" class="form-control" name="admission_date">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{route('managestudent')}}" class="btn btn-danger">Cancel</a>

                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layout.app')

@section('title')
    Students | Manage Students
@endsection

@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-0">Manage Students</h4>
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item">Students</li>
                <li class="breadcrumb-item active">Manage</li>
            </ol>
        </div>
        @include('layout.alerts')
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('addstudent') }}" class="btn btn-outline-primary">Add Student</a>
        </div>
        <div class="card mb-4 p-4">

            <table id="teacherTable" class="table " style="width:100%;background-color:white;">
                <thead>
                    <tr >
                        <th>Sr No.</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Teacher</th>
                        <th>Fees</th>
                        <th>Admission Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($data) && count($data) > 0)
                        @foreach ($data as $teacher)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $teacher->name }}</td>
                                <td>{{ $teacher->class }}</td>
                                <td>{{ $teacher->teacher->name ?? 'N/A' }}</td> <!-- Accessing teacher name -->
                                <td>{{ $teacher->yearly_fees }}</td>
                                <td>{{ $teacher->admission_date }}</td>
                                <td>
                                    <a href="{{ route('deletestudent', $teacher->id) }}" class="btn btn-sm btn-outline-danger">Del</a>
                                    <a href="{{ route('editstudent', $teacher->id) }}" class="btn btn-sm btn-outline-warning">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
        </div>
    </div>
@endsection

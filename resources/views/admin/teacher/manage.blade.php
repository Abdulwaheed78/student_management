@extends('layout.app')

@section('title')
    Manage | Add Teachers
@endsection

@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-0">Manage Teachers</h4>
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item">Teachers</li>
                <li class="breadcrumb-item active">Manage</li>
            </ol>
        </div>

        @include('layout.alerts')
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('addteacher') }}" class="btn btn-outline-primary">Add Teacher</a>
        </div>
        <div class="card mb-4 p-4">
            <table id="teacherTable" class="table " style="width:100%;background-color:white;">
                <thead>
                    <tr>
                        <th>Sr No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Education</th>
                        <th>Date Of Birth</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($data) && count($data) > 0)
                        @foreach ($data as $teacher)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $teacher->name }}</td>
                                <td>{{ $teacher->email ?? 'N/A' }}</td>
                                <td>{{ $teacher->education ?? 'N/A' }}</td>
                                <td>{{ date('d-m-Y', strtotime($teacher->dob)) ?? 'N/A' }}</td>
                                <td>
                                    <a href="{{ route('deleteteacher', $teacher->id) }}"
                                        class="btn btn-sm btn-outline-danger">Del</a>
                                    <a href="{{ route('editteacher', $teacher->id) }}"
                                        class="btn btn-sm btn-outline-warning">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
        </div>
    </div>
@endsection

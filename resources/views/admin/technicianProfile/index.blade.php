@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <h1>Technician Profiles</h1>
        <a href="{{ url('add-technician_profile') }}" class="btn btn-primary mb-3">Add Technician Profile</a>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Technician Name</th>
                <th>Skills</th>
                <th>Hourly Rate</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($technicians as $technician)
                <tr>
                    <td>{{ $technician->id }}</td>
                    <td>{{ $technician->user->name }}</td>
                    <td>{{ $technician->skills }}</td>
                    <td>{{ $technician->hourly_rate }}</td>
                    <td>
                        <a href="{{ url('edit-technician_profile/'.$technician->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ url('delete-technician_profile/'.$technician->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No technician profiles found.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection

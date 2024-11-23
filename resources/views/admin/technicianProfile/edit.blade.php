@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <h1>Edit Technician Profile</h1>

        <form action="{{ url('update-technician_profile/'.$technicianProfile->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Technician Dropdown -->
            <div class="form-group">
                <label for="Technician_id">Technician</label>
                <select name="Technician_id" id="Technician_id" class="form-control" required>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ $technicianProfile->Technician_id == $user->id ? 'selected' : '' }}>
                            {{ $user->name }} ({{ $user->email }})
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Skills Input -->
            <div class="form-group">
                <label for="skills">Skills</label>
                <input type="text" name="skills" id="skills" class="form-control" value="{{ $technicianProfile->skills }}" required>
            </div>

            <!-- Hourly Rate Input -->
            <div class="form-group">
                <label for="hourly_rate">Hourly Rate</label>
                <input type="number" step="0.01" name="hourly_rate" id="hourly_rate" class="form-control" value="{{ $technicianProfile->hourly_rate }}" required>
            </div>

            <!-- Certifications Input -->
            <div class="form-group">
                <label for="certifications">Certifications</label>
                <input type="text" name="certifications" id="certifications" class="form-control" value="{{ $technicianProfile->certifications }}">
            </div>

            <!-- Bio Textarea -->
            <div class="form-group">
                <label for="bio">Bio</label>
                <textarea name="bio" id="bio" class="form-control" rows="4">{{ $technicianProfile->bio }}</textarea>
            </div>

            <!-- Location Input -->
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" id="location" class="form-control" value="{{ $technicianProfile->location }}" required>
            </div>

            <!-- Available From Input -->
            <div class="form-group">
                <label for="available_from">Available From</label>
                <input type="date" name="available_from" id="available_from" class="form-control" value="{{ $technicianProfile->available_from->format('Y-m-d') }}" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection

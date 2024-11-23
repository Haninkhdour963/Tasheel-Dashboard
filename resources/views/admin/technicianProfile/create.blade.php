    @extends('layouts.master')

    @section('content')
        <div class="container mt-5">
            <h1>Add Technician Profile</h1>

            <!-- Form to create technician profile -->
            <form action="{{ url('admin/add-technician_profile') }}" method="POST">
                @csrf

                <!-- Technician Dropdown -->
                <div class="form-group">
                    <label for="Technician_id">Technician</label>
                    <select name="Technician_id" id="Technician_id" class="form-control" required>
                        <option value="" disabled selected>Select Technician</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Skills Input -->
                <div class="form-group">
                    <label for="skills">Skills</label>
                    <input type="text" name="skills" id="skills" class="form-control" required>
                </div>

                <!-- Hourly Rate Input -->
                <div class="form-group">
                    <label for="hourly_rate">Hourly Rate</label>
                    <input type="number" name="hourly_rate" id="hourly_rate" class="form-control" required>
                </div>

                <!-- Certifications Input -->
                <div class="form-group">
                    <label for="certifications">Certifications</label>
                    <input type="text" name="certifications" id="certifications" class="form-control">
                </div>

                <!-- Bio Input -->
                <div class="form-group">
                    <label for="bio">Bio</label>
                    <textarea name="bio" id="bio" class="form-control"></textarea>
                </div>

                <!-- Location Input -->
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" name="location" id="location" class="form-control" required>
                </div>

                <!-- Available From Input -->
                <div class="form-group">
                    <label for="available_from">Available From</label>
                    <input type="date" name="available_from" id="available_from" class="form-control" required>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-success">Save</button>

            </form>
        </div>
    @endsection

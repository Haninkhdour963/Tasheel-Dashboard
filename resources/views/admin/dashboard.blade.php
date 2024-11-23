@extends('layouts.master')

@section('title','Blog Dashboard')

@section('content')

<div class="container-fluid px-4">
<h1 class="mt-4">Dashboard</h1>
  <ol class="breadcrumb mb-4">
 <li class="breadcrumb-item active">Dashboard</li>
  </ol>
    <div class="container-fluid mt-5">
        <!-- Overview Cards -->
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Users</div>
                    <div class="card-body">
                        <h5 class="card-title" id="userCount">150</h5>
                        <p class="card-text">Active Users</p>
                        <a href="#" class="btn btn-sm btn-primary">Add User</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Jobs Posting</div>
                    <div class="card-body">
                        <h5 class="card-title" id="jobCount">120</h5>
                        <p class="card-text">Jobs Posted</p>
                        <a href="#" class="btn btn-sm btn-primary">Add Job Posting</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Disputes</div>
                    <div class="card-body">
                        <h5 class="card-title" id="disputeCount">10</h5>
                        <p class="card-text">Open Disputes</p>
                        <a href="#" class="btn btn-sm btn-primary">Add Dispute</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Revenue</div>
                    <div class="card-body">
                        <h5 class="card-title" id="revenue">$2,500.00</h5>
                        <p class="card-text">Monthly Revenue</p>
                        <a href="#" class="btn btn-sm btn-primary">Add Payment</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Analytics Chart -->
        <div class="row mt-4">
            <div class="col-md-12">
                <h4 class="text-center" style="color: #4A628A;">Platform Analytics</h4>
                <canvas id="revenueChart"></canvas>
            </div>
        </div>

        <!-- Users Table -->
        <div class="mt-4">
            <h4 class="text-center" style="color: #4A628A;">Users</h4>
            <table class="table table-bordered table-striped" id="userTable">
                <thead>
                <tr>
                    <th>User ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>john_doe</td>
                    <td>john.doe@example.com</td>
                    <td>Admin</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                        <button class="btn btn-sm btn-danger" onclick="deleteUser(1)">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>jane_smith</td>
                    <td>jane.smith@example.com</td>
                    <td>User</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                        <button class="btn btn-sm btn-danger" onclick="deleteUser(2)">Delete</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize DataTables
            $('#userTable').DataTable();
        });

        // Initialize Revenue Chart with dynamic data
        var ctx = document.getElementById('revenueChart').getContext('2d');
        var revenueChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [{
                    label: 'Monthly Revenue',
                    data: [1200, 1300, 1100, 1400, 1200, 1500],
                    borderColor: '#7AB2D3',
                    backgroundColor: 'rgba(122, 178, 211, 0.2)',
                    fill: true,
                }]
            },
        });

        function deleteUser(userId) {
            // Example delete action
            alert('Deleting user with ID: ' + userId);
        }
    </script>
@endsection

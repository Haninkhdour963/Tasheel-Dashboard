@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

        <div class="row">
            <!-- Users Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card shadow border-left-primary py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Users</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $users }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Job Postings Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card shadow border-left-success py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Job Postings</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jobs }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-briefcase fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Open Disputes Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card shadow border-left-warning py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Open Disputes</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $disputes }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-exclamation-triangle fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Revenue Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card shadow border-left-danger py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Revenue</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">${{ number_format($revenue, 2) }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chart -->
        <div class="row">
            <div class="col-xl-12 col-md-12 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="text-center font-weight-bold text-primary">Dashboard Statistics</h5>
                        <canvas id="dashboardChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart.js Script -->
    <script>
        var ctx = document.getElementById('dashboardChart').getContext('2d');
        var dashboardChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Users', 'Job Postings', 'Open Disputes', 'Total Revenue'],
                datasets: [{
                    label: 'Dashboard Data',
                    data: [{{ $users }}, {{ $jobs }}, {{ $disputes }}, {{ $revenue }}],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',   // Users
                        'rgba(75, 192, 192, 0.2)',   // Job Postings
                        'rgba(255, 159, 64, 0.2)',   // Open Disputes
                        'rgba(255, 99, 132, 0.2)'    // Revenue
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',     // Users
                        'rgba(75, 192, 192, 1)',     // Job Postings
                        'rgba(255, 159, 64, 1)',     // Open Disputes
                        'rgba(255, 99, 132, 1)'      // Revenue
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

@endsection

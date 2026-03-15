@extends('admin.layouts.app')

@section('content')

<div class="container mt-4">

    <div class="row g-4">

        <!-- Total Blogs -->
        <div class="col-md-4">
            <div class="card bg-gradient-to-r from-purple-500 to-blue-500 text-white rounded shadow p-10 flex flex-col justify-between" style="transition: transform 0.3s;">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5>Total Blogs</h5>
                        <p class="display-5 fw-bold">{{ $blogs }}</p>
                    </div>
                    <i class="bi bi-journal-text fs-1"></i>
                </div>
            </div>
        </div>

        <!-- Contacts -->
        <div class="col-md-4">
            <div class="card text-white shadow-sm rounded p-10" style="background: linear-gradient(135deg, #ff512f 0%, #f09819 100%); transition: transform 0.3s;">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5>Contacts</h5>
                        <p class="display-5 fw-bold">{{ $contacts }}</p>
                    </div>
                    <i class="bi bi-envelope fs-1"></i>
                </div>
            </div>
        </div>

        <!-- Job Applications -->
        <div class="col-md-4">
            <div class="card text-white shadow-sm rounded p-10" style="background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%); transition: transform 0.3s;">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5>Job Applications</h5>
                        <p class="display-5 fw-bold">{{ $jobApplications }}</p>
                    </div>
                    <i class="bi bi-briefcase fs-1"></i>
                </div>
            </div>
        </div>

    </div>

    <!-- Second Row -->
    <div class="row g-4 mt-4">

        <!-- Services -->
        <div class="col-md-4">
            <div class="card text-white shadow-sm rounded p-10" style="background: linear-gradient(135deg, #ff7e5f 0%, #feb47b 100%); transition: transform 0.3s;">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5>Total Services</h5>
                        <p class="display-5 fw-bold">{{ $services }}</p>
                    </div>
                    <i class="bi bi-gear fs-1"></i>
                </div>
            </div>
        </div>

        <!-- Users -->
        <div class="col-md-4">
            <div class="card text-white shadow-sm rounded p-10" style="background: linear-gradient(135deg, #00c6ff 0%, #0072ff 100%); transition: transform 0.3s;">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5>Total Users</h5>
                        <p class="display-5 fw-bold">{{ $users }}</p>
                    </div>
                    <i class="bi bi-people fs-1"></i>
                </div>
            </div>
        </div>

        <!-- Jobs -->
        <div class="col-md-4">
            <div class="card text-white shadow-sm rounded p-10" style="background: linear-gradient(135deg, #f7971e 0%, #ffd200 100%); transition: transform 0.3s;">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5>Total Jobs</h5>
                        <p class="display-5 fw-bold">{{ $jobs }}</p>
                    </div>
                    <i class="bi bi-briefcase-fill fs-1"></i>
                </div>
            </div>
        </div>

    </div>

</div>

<!-- Hover effect -->
<style>
.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 25px rgba(0,0,0,0.2);
}
</style>

@endsection
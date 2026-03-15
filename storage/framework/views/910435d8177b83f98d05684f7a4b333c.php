<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Panel</title>
<link rel="icon" type="image/x-icon" href="<?php echo e(asset('assets/favicon.ico')); ?>">

<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<style>
/* Global colors */
:root {
    --primary-gradient: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
    --accent-color: #6a11cb;
    --success-color: #16a34a;
    --danger-color: #ef4444;
    --bg-color: #f1f5f9;
}

/* Sidebar */
.sidebar {
    background-color: #1e293b;
    min-height: 100vh;
    color: white;
    display: flex;
    flex-direction: column;
}

.sidebar a {
    display: flex;
    align-items: center;
    padding: 0.75rem 1.5rem;
    transition: all 0.3s;
    border-radius: 0.375rem;
}

.sidebar a:hover {
    background: var(--primary-gradient);
    color: white !important;
}

.sidebar a.active {
    background: var(--accent-color);
    color: white !important;
}

/* Navbar */
.navbar {
    background-color: white;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    padding: 0.75rem 1.5rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: sticky;
    top: 0;
    z-index: 50;
}

/* Hover effect for cards */
.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 25px rgba(0,0,0,0.15);
    transition: all 0.3s;
}

/* Table headers */
.table thead th {
    background-color: #e2e8f0;
    color: #1f2937;
    font-weight: 600;
}

/* Form inputs */
input, textarea, select {
    border-radius: 0.375rem !important;
    padding: 0.5rem !important;
}

/* Buttons */
.btn-primary {
    background: var(--primary-gradient);
    border: none;
}

.btn-primary:hover {
    opacity: 0.9;
}

.btn-secondary {
    background-color: #6b7280;
    border: none;
    color: white;
}
<style>
.table-wrapper{
overflow-x:auto;
}
</style>

</head>
<body class="bg-gray-100 font-sans">

<div class="flex justify-center ">

    <!-- Sidebar -->
 <!-- Sidebar -->
<div class="w-full md:w-64 bg-gray-900 text-white min-h-screen">

    <!-- Logo / Brand -->
    <div class="p-6 text-2xl font-bold border-b border-gray-700 flex items-center justify-center">
        <i class="bi bi-speedometer2 me-2 text-purple-400"></i> Admin Panel
    </div>

    <!-- Navigation -->
    <nav class="mt-6 flex-1">

        <a href="<?php echo e(route('admin.dashboard')); ?>"
           class="flex items-center px-6 py-3 text-white hover:bg-gradient-to-r from-purple-500 to-blue-500 transition rounded mb-1
           <?php echo e(request()->routeIs('admin.dashboard') ? 'bg-gradient-to-r from-purple-500 to-blue-500' : ''); ?>">
            <i class="bi bi-grid-fill me-3 text-lg"></i> Dashboard
        </a>

        <a href="<?php echo e(route('admin.users.index')); ?>"
           class="flex items-center px-6 py-3 text-white hover:bg-gradient-to-r from-purple-500 to-blue-500 transition rounded mb-1
           <?php echo e(request()->routeIs('admin.users.*') ? 'bg-gradient-to-r from-purple-500 to-blue-500' : ''); ?>">
            <i class="bi bi-people me-3 text-lg"></i> Users
        </a>

        <a href="<?php echo e(route('admin.blogs.index')); ?>"
           class="flex items-center px-6 py-3 text-white hover:bg-gradient-to-r from-purple-500 to-blue-500 transition rounded mb-1
           <?php echo e(request()->routeIs('admin.blogs.*') ? 'bg-gradient-to-r from-purple-500 to-blue-500' : ''); ?>">
            <i class="bi bi-journal-text me-3 text-lg"></i> Blogs
        </a>

        <a href="<?php echo e(route('admin.contacts.index')); ?>"
           class="flex items-center px-6 py-3 text-white hover:bg-gradient-to-r from-purple-500 to-blue-500 transition rounded mb-1
           <?php echo e(request()->routeIs('admin.contacts.*') ? 'bg-gradient-to-r from-purple-500 to-blue-500' : ''); ?>">
            <i class="bi bi-envelope me-3 text-lg"></i> Contacts
        </a>

        <a href="<?php echo e(route('admin.jobs.index')); ?>"
           class="flex items-center px-6 py-3 text-white hover:bg-gradient-to-r from-purple-500 to-blue-500 transition rounded mb-1
           <?php echo e(request()->routeIs('admin.jobs.*') ? 'bg-gradient-to-r from-purple-500 to-blue-500' : ''); ?>">
            <i class="bi bi-briefcase me-3 text-lg"></i> Jobs
        </a>

        <a href="<?php echo e(route('admin.services.index')); ?>"
           class="flex items-center px-6 py-3 text-white hover:bg-gradient-to-r from-purple-500 to-blue-500 transition rounded mb-1
           <?php echo e(request()->routeIs('admin.services.*') ? 'bg-gradient-to-r from-purple-500 to-blue-500' : ''); ?>">
            <i class="bi bi-gear me-3 text-lg"></i> Services
        </a>

    </nav>

</div>

    <!-- Content Area -->
    <div class="flex-1 flex flex-col min-h-screen">

        <!-- Navbar -->
        <div class="navbar sticky top-0 z-50 bg-white shadow px-6 py-3 flex justify-between items-center">

            <!-- Page Title -->
            <h1 class="text-2xl font-bold text-gray-800">
                <?php echo $__env->yieldContent('page-title', 'Admin Dashboard'); ?>
            </h1>

            <!-- Right side: User info + Logout -->
            <div class="flex items-center space-x-4">

                <!-- User Info -->
                <div class="flex items-center space-x-2 bg-gray-100 px-3 py-1 rounded-full shadow-sm">
                    <i class="bi bi-person-circle text-gray-600 text-lg"></i>
                    <span class="font-medium text-gray-700"><?php echo e(ucfirst(Auth::user()->name)); ?></span>
                </div>

                <!-- Logout Button -->
                <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>
                    <button type="submit"
                        class="bg-gradient-to-r from-red-400 to-pink-500 text-white px-4 py-2 rounded shadow-sm flex items-center hover:opacity-90 transition">
                        <i class="bi bi-box-arrow-right me-1"></i> Logout
                    </button>
                </form>

            </div>

        </div>

        <!-- Page Content -->
        <div class="md:p-6 lg:p-8 flex-1 bg-gray-100">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

    </div>

</div>

</body>
</html><?php /**PATH D:\xampp\htdocs\compufy-admin-panel\resources\views/admin/layouts/app.blade.php ENDPATH**/ ?>
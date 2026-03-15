<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php echo $__env->yieldContent('title'); ?></title>
<link rel="icon" type="image/x-icon" href="<?php echo e(asset('assets/wfavicon.ico')); ?>">


<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>

<body class="bg-gray-100 font-sans text-gray-800">

    <!-- Header -->
    <?php echo $__env->make('website.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Main Content -->
    <main class="container mx-auto px-4 sm:px-6 lg:px-10 py-10">
        <?php echo $__env->yieldContent('content'); ?>
    </main>


    <?php echo $__env->make('website.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
</body>
</html><?php /**PATH D:\xampp\htdocs\compufy-admin-panel\resources\views/website/layouts/app.blade.php ENDPATH**/ ?>


<?php $__env->startSection('title', $service->title); ?>

<?php $__env->startSection('content'); ?>

<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-10 py-10">

    <!-- Service Card -->
    <div class="bg-white shadow-md rounded-lg p-8 hover:shadow-xl hover:-translate-y-1 transition transform border-t-4 border-transparent hover:border-t-4 hover:border-gradient-to-r from-purple-500 to-blue-500">
        
        <!-- Service Title -->
        <h1 class="text-4xl font-bold mb-6 text-gray-900">
            <?php echo e($service->title); ?>

        </h1>

        <!-- Service Description -->
        <div class="text-gray-700 leading-relaxed space-y-4">
            <?php echo $service->description; ?>

        </div>

        <!-- Back to Services Button -->
        <div class="mt-8">
            <a href="<?php echo e(route('website.services')); ?>" 
               class="inline-block px-6 py-3 rounded-md font-semibold text-white bg-gradient-to-r from-orange-400 to-pink-400 hover:opacity-90 transition">
               ← Back to Services
            </a>
        </div>
        
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\compufy-admin-panel\resources\views/website/services/show.blade.php ENDPATH**/ ?>
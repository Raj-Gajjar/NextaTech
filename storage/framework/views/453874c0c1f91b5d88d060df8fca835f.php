

<?php $__env->startSection('title','Services'); ?>

<?php $__env->startSection('content'); ?>

<h1 class="text-3xl sm:text-4xl font-bold text-center mb-10 text-gray-900">
    Our Services
</h1>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
        $gradients = [
            'from-purple-500 to-blue-500',
            'from-orange-400 to-pink-400',
            'from-green-400 to-teal-400',
            'from-red-400 to-yellow-400'
        ];
        $gradient = $gradients[$index % count($gradients)];
    ?>
    <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-xl hover:-translate-y-1 transition transform border-t-4 border-transparent hover:border-t-4 hover:border-<?php echo e($gradient); ?>">
        <h2 class="text-xl font-semibold mb-3 text-gray-800">
            <?php echo e($service->title); ?>

        </h2>
        <p class="text-gray-600 mb-4">
            <?php echo e(Str::limit($service->description, 120)); ?>

        </p>
        <a href="<?php echo e(route('website.service.show', $service->slug)); ?>"
           class="font-medium text-white px-4 py-2 rounded-md bg-gradient-to-r <?php echo e($gradient); ?> hover:opacity-90 transition inline-block">
            Read More →
        </a>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\compufy-admin-panel\resources\views/website/services/index.blade.php ENDPATH**/ ?>
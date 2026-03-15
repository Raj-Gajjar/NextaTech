

<?php $__env->startSection('title','Blogs'); ?>

<?php $__env->startSection('content'); ?>

<h1 class="text-3xl sm:text-4xl font-bold mb-10 text-center text-gray-900">
    Latest Blogs
</h1>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
        $gradients = [
            'from-purple-500 to-blue-500',
            'from-orange-400 to-pink-400',
            'from-green-400 to-teal-400',
            'from-red-400 to-yellow-400'
        ];
        $gradient = $gradients[$index % count($gradients)];
    ?>
    <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-xl hover:-translate-y-1 transition transform border-t-4 border-transparent hover:border-t-4 hover:border-<?php echo e($gradient); ?>">
        <img src="<?php echo e(asset('storage/'.$blog->image)); ?>" class="w-full h-48 object-cover">
        <div class="p-4">
            <h2 class="text-xl font-semibold mb-2 text-gray-800">
                <?php echo e($blog->title); ?>

            </h2>
            <a href="<?php echo e(route('website.blog.show', $blog->slug)); ?>" 
               class="inline-block px-4 py-2 rounded-md bg-gradient-to-r <?php echo e($gradient); ?> text-white font-medium hover:opacity-90 transition">
               Read More →
            </a>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\compufy-admin-panel\resources\views/website/blogs/index.blade.php ENDPATH**/ ?>
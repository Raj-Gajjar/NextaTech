

<?php $__env->startSection('page-title', 'Services'); ?>

<?php $__env->startSection('content'); ?>

<div class="flex justify-between mb-6 items-center">
    <h2 class="text-2xl font-bold text-gray-800">Services</h2>
    <a href="<?php echo e(route('admin.services.create')); ?>"
       class="bg-gradient-to-r from-purple-500 to-blue-500 text-white px-5 py-2 rounded shadow hover:opacity-90 transition">
        Add Service
    </a>
</div>

<div class="overflow-x-auto">
    <table class="w-full text-center align-middle border-collapse border border-gray-300 rounded">
        <thead class="bg-gradient-to-r from-blue-500 to-teal-500 text-white">
            <tr>
                <th class="py-3 px-4 border border-gray-300">Title</th>
                <th class="py-3 px-4 border border-gray-300">Status</th>
                <th class="py-3 px-4 border border-gray-300">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr class="hover:shadow-lg transition rounded my-1">
                <td class="py-2 px-4 border border-gray-300"><?php echo e($service->title); ?></td>
                <td class="py-2 px-4 border border-gray-300">
                    <?php if($service->status): ?>
                    <span class="px-3 py-1 rounded-full bg-green-500 text-white text-sm">Active</span>
                    <?php else: ?>
                    <span class="px-3 py-1 rounded-full bg-red-500 text-white text-sm">Inactive</span>
                    <?php endif; ?>
                </td>
                <td class="py-2 px-4 border border-gray-300">
                    <div class="flex justify-center gap-2">
                        <a href="<?php echo e(route('admin.services.edit', $service->id)); ?>"
                           class="px-3 py-1 rounded shadow bg-gradient-to-r from-yellow-400 to-orange-400 text-white hover:opacity-90 transition">
                            Edit
                        </a>

                        <form action="<?php echo e(route('admin.services.destroy', $service->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit"
                                    class="px-3 py-1 rounded shadow bg-gradient-to-r from-purple-500 to-blue-500 text-white hover:opacity-90 transition">
                                Delete
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="3" class="py-3 text-center text-gray-600 border border-gray-300">No Services Found</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\compufy-admin-panel\resources\views/admin/services/index.blade.php ENDPATH**/ ?>
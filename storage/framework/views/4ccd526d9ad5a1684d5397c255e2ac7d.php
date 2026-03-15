

<?php $__env->startSection('page-title', 'Blogs'); ?>

<?php $__env->startSection('content'); ?>

<div class="flex justify-between mb-6 items-center">
    <h2 class="text-2xl font-bold text-gray-800">Blogs</h2>
    <a href="<?php echo e(route('admin.blogs.create')); ?>"
       class="bg-gradient-to-r from-purple-500 to-blue-500 text-white px-5 py-2 rounded shadow hover:opacity-90 transition">
        Add Blog
    </a>
</div>

<div class="overflow-x-auto">
    <table class="w-full text-center align-middle border-collapse border border-gray-300 rounded">
        <thead class="bg-gradient-to-r from-blue-500 to-teal-500 text-white">
            <tr>
                <th class="py-3 px-4 border border-gray-300" style="width:70px">ID</th>
                <th class="py-3 px-4 border border-gray-300">Title</th>
                <th class="py-3 px-4 border border-gray-300">Slug</th>
                <th class="py-3 px-4 border border-gray-300" style="width:120px">Status</th>
                <th class="py-3 px-4 border border-gray-300" style="width:180px">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr class="hover:shadow-lg transition rounded my-1">
                <td class="py-2 px-4 border border-gray-300"><?php echo e($blog->id); ?></td>
                <td class="py-2 px-4 border border-gray-300"><?php echo e($blog->title); ?></td>
                <td class="py-2 px-4 border border-gray-300"><?php echo e($blog->slug); ?></td>
                <td class="py-2 px-4 border border-gray-300">
                    <?php if($blog->status): ?>
                    <span class="px-3 py-1 rounded-full bg-green-500 text-white text-sm">Active</span>
                    <?php else: ?>
                    <span class="px-3 py-1 rounded-full bg-red-500 text-white text-sm">Inactive</span>
                    <?php endif; ?>
                </td>
                <td class="py-2 px-4 border border-gray-300">
                    <div class="flex justify-center gap-2">
                        <a href="<?php echo e(route('admin.blogs.edit', $blog->id)); ?>"
                           class="px-3 py-1 rounded shadow bg-gradient-to-r from-yellow-400 to-orange-400 text-white hover:opacity-90 transition">
                            Edit
                        </a>

                        <form action="<?php echo e(route('admin.blogs.destroy', $blog->id)); ?>" method="POST">
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
                <td colspan="5" class="py-3 text-center text-gray-600 border border-gray-300">No Blogs Found</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\compufy-admin-panel\resources\views/admin/blogs/index.blade.php ENDPATH**/ ?>
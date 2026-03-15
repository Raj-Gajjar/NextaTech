

<?php $__env->startSection('page-title', 'Add Blog'); ?>

<?php $__env->startSection('content'); ?>

<div class="flex justify-between mb-6 items-center">
    <h2 class="text-3xl font-bold text-gray-800">Add New Blog</h2>
    <a href="<?php echo e(route('admin.blogs.index')); ?>"
       class="bg-gray-700 hover:bg-gray-800 text-white px-6 py-2 rounded shadow transition">
        Cancel
    </a>
</div>

<div class="bg-white shadow-xl rounded-xl p-6 relative overflow-hidden">
    <!-- Top Gradient Bar -->
    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-yellow-400 via-orange-500 to-red-500"></div>

    <form method="POST" action="<?php echo e(route('admin.blogs.store')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block mb-2 font-semibold text-gray-700">Title</label>
                <input type="text" name="title" class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
                <label class="block mb-2 font-semibold text-gray-700">Slug</label>
                <input type="text" name="slug" class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
        </div>

        <div class="mb-6">
            <label class="block mb-2 font-semibold text-gray-700">Description</label>
            <textarea name="description" class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" rows="2"></textarea>
        </div>

        <div class="mb-6">
            <label class="block mb-2 font-semibold text-gray-700">Content</label>
            <textarea name="content" class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" rows="4"></textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block mb-2 font-semibold text-gray-700">Image</label>
                <input type="file" name="image" class="w-full p-2 rounded-lg border border-gray-300">
            </div>
            <div>
                <label class="block mb-2 font-semibold text-gray-700">Status</label>
                <select name="status" class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block mb-2 font-semibold text-gray-700">Meta Title</label>
                <input type="text" name="meta_title" class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
                <label class="block mb-2 font-semibold text-gray-700">Published Date</label>
                <input type="date" name="published_at" class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
        </div>

        <div class="mb-6">
            <label class="block mb-2 font-semibold text-gray-700">Meta Description</label>
            <textarea name="meta_description" class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" rows="2"></textarea>
        </div>

        <div class="flex flex-col md:flex-row gap-4 mt-4">
            <button class="bg-gradient-to-r from-blue-500 to-purple-500 text-white px-6 py-3 rounded-lg shadow hover:opacity-90 transition w-full md:w-auto w-100">
                Save Blog
            </button>
        </div>

    </form>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\compufy-admin-panel\resources\views/admin/blogs/create.blade.php ENDPATH**/ ?>
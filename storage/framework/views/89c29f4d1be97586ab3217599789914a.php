
<?php $__env->startSection('page-title', 'Contact Details'); ?>
<?php $__env->startSection('content'); ?>

<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold text-gray-800">Contact Details</h2>

    <a href="<?php echo e(route('admin.contacts.index')); ?>"
       class="bg-gray-600 text-white px-4 py-2 rounded-lg shadow hover:bg-gray-700 transition">
       Back
    </a>
</div>

<div class="bg-white shadow-xl rounded-xl p-6 relative overflow-hidden">

    <!-- Top Gradient Border -->
    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-yellow-400 via-orange-500 to-red-500"></div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">

        <div>
            <label class="text-gray-500 text-sm">Name</label>
            <p class="text-lg font-semibold text-gray-800 mt-1">
                <?php echo e($contact->name); ?>

            </p>
        </div>

        <div>
            <label class="text-gray-500 text-sm">Email</label>
            <p class="text-lg font-semibold text-gray-800 mt-1">
                <?php echo e($contact->email); ?>

            </p>
        </div>

        <div>
            <label class="text-gray-500 text-sm">Subject</label>
            <p class="text-lg font-semibold text-gray-800 mt-1">
                <?php echo e($contact->subject); ?>

            </p>
        </div>

        <div>
            <label class="text-gray-500 text-sm">Created At</label>
            <p class="text-lg font-semibold text-gray-800 mt-1">
                <?php echo e($contact->created_at); ?>

            </p>
        </div>
        <div>
            <label class="text-gray-500 text-sm">Phone</label>
            <p class="text-lg font-semibold text-gray-800 mt-1">
                <?php echo e($contact->phone); ?>

            </p>
        </div>

        <div class="md:col-span-2">
            <label class="text-gray-500 text-sm">Message</label>
            <p class="text-gray-700 mt-2 bg-gray-50 p-4 rounded-lg border">
                <?php echo e($contact->message); ?>

            </p>
        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\compufy-admin-panel\resources\views/admin/contacts/show.blade.php ENDPATH**/ ?>
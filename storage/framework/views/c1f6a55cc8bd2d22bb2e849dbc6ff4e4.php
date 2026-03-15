

<?php $__env->startSection('title', 'Apply for ' . $jobApplication->title); ?>

<?php $__env->startSection('content'); ?>

<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-10 py-10 pb-0">

    <!-- Application Card -->
    <div class="bg-white shadow-md rounded-lg p-8 hover:shadow-xl hover:-translate-y-1 transition transform border-t-4 border-transparent hover:border-t-4 hover:border-gradient-to-r from-purple-500 to-blue-500">

        <!-- Page Title -->
        <h2 class="text-3xl font-bold mb-6 text-gray-900">
            Apply for <?php echo e($jobApplication->title); ?>

        </h2>

        <!-- Success Message -->
        <?php if(session('success')): ?>
            <div class="bg-green-100 text-green-700 p-3 rounded mb-6">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <!-- Application Form -->
        <form action="<?php echo e(route('job-applications.submit')); ?>" method="POST" enctype="multipart/form-data" class="space-y-4">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="job_id" value="<?php echo e($jobApplication->id); ?>">

            <div>
                <input type="text" name="name" placeholder="Your Name" class="w-full border p-3 rounded-md focus:ring-2 focus:ring-green-400">
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-red-500"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div>
                <input type="email" name="email" placeholder="Your Email" class="w-full border p-3 rounded-md focus:ring-2 focus:ring-green-400">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-red-500"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div>
                <input type="text" name="phone" placeholder="Phone" class="w-full border p-3 rounded-md focus:ring-2 focus:ring-green-400">
                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-red-500"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div>
                <textarea name="message" placeholder="Message" class="w-full border p-3 rounded-md focus:ring-2 focus:ring-green-400"></textarea>
                <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-red-500"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div>
                <label class="block mb-2 font-medium text-gray-700">Upload Resume</label>
                <input type="file" name="resume" class="w-full border p-3 rounded-md focus:ring-2 focus:ring-green-400" accept=".pdf,.doc,.docx">
                <?php $__errorArgs = ['resume'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-red-500"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <button type="submit" class="w-full px-6 py-3 rounded-md font-semibold text-white bg-gradient-to-r from-green-400 to-teal-400 hover:opacity-90 transition">
                Submit Application
            </button>
        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\compufy-admin-panel\resources\views/website/jobs/apply.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>

<p><?php echo e($test->id); ?></p>
<p><?php echo e($test->name); ?></p>
<p><?php echo e($test->cont); ?></p>
<p><?php echo e($test->created_at); ?></p>
<p><?php echo e($test->updated_at); ?></p>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-10.x\resources\views/example/show.blade.php ENDPATH**/ ?>
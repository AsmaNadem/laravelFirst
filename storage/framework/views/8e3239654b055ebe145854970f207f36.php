<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->renderWhen(true,'layouts.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>












<?php echo e($myvar); ?>

<?php /**PATH D:\laravel-10.x\resources\views/index.blade.php ENDPATH**/ ?>
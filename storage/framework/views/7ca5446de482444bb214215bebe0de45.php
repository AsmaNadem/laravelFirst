<?php $__env->startSection('content'); ?>

    <?php echo e($myvar); ?>

<form action="<?php echo e(route('example.store')); ?>" method="post">
   <?php echo csrf_field(); ?>



    <input type="text" name="name" placeholder="Name" value="<?php echo e(old('name')); ?>">
    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <p style="color: red"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <hr>

    <textarea name="cont" placeholder="Content"><?php echo e(old('cont')); ?></textarea>
    <?php $__errorArgs = ['cont'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <p style="color: red"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <hr>
        <label for="show">Show Data</label>
        <input type="radio" name="show" value="1" id="show"/>
    <hr>
    <hr>
        <label for="hide">Hide Data</label>
        <input type="radio" name="show" value="0" id="hide"/>
    <hr>
<label for="status">Status</label>
    <select name="status">
        <option value="enable">Enable</option>
        <option value="disable">Disable</option>
    </select>
    <hr>
   <input type="submit" value="create">
</form>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <style>
       h1{
        color: #2d4373;
        }
    </style>

<?php $__env->stopPush(); ?>


<?php $__env->startPush('js'); ?>
    <script>
        // alert('you are creating a new record')
    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-10.x\resources\views/example/create.blade.php ENDPATH**/ ?>
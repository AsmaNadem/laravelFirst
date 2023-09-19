<?php $__env->startSection('content'); ?>

<form action="<?php echo e(route('example.update',['example'=>$test->id])); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <input type="text" name="name" placeholder="Name" value="<?php echo e($test->name); ?>">
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
    <label for="show">Show Data</label>
    <input type="radio" name="show" value="1" <?php if($test->show == 1): echo 'checked'; endif; ?> id="show"/>
    <hr>
    <hr>
    <label for="hide">Hide Data</label>
    <input type="radio" name="show" value="0" <?php if($test->show == 0 ): echo 'checked'; endif; ?> id="hide"/>
    <hr>
    <label for="status">Status</label>
    <select name="status">
        <option <?php if($test->status == 'enable'): echo 'selected'; endif; ?> value="enable">Enable</option>
        <option <?php if($test->status == 'disable'): echo 'selected'; endif; ?>value="disable">Disable</option>
    </select>
    <hr>
    <textarea name="cont" placeholder="content" ><?php echo e($test->cont); ?></textarea>
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
    <input type="submit" value="update"/>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-10.x\resources\views/example/edit.blade.php ENDPATH**/ ?>
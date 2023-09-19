<?php $__env->startSection('content'); ?>

<a href="example/create">Create</a>

<table width="100%">

    <thead>
        <tr>
            <th>Name</th>
            <th>Status</th>
            <th>Show</th>
            <th>Content</th>
            <th>created</th>
            <th>updated</th>
            <th>deleted</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

    <?php echo $__env->renderEach('example.data',$test,'data','example.empty_data'); ?>



































    </tbody>
</table>
<?php $__env->stopSection(); ?>





<!--</form>-->




<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-10.x\resources\views/example/index.blade.php ENDPATH**/ ?>
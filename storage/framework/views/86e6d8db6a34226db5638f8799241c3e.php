
<tr>
    <td><?php echo e($data->name); ?></td>
    <td><?php echo e($data->status); ?></td>
    <td><?php echo e($data->show == 1? 'show':'hide'); ?></td>
    <td><?php echo e($data->cont); ?></td>
    <td><?php echo e($data->created_at); ?></td>
    <td><?php echo e($data->updated_at); ?></td>
    <td><?php echo e($data->deleted_at); ?></td>
    <td>
        <a href="example/<?php echo e($data->id); ?>/edit">Edit</a>
        <a href="example/<?php echo e($data->id); ?>">Show</a>
        <form action="<?php echo e(route('example.destroy',['example'=>$data->id])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <input type="submit" value="Delete">
        </form>

        <form action="<?php echo e(route('example.force',['example'=>$data->id])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <input type="submit" value="forceDelete">
        </form>
    </td>
</tr>
<?php /**PATH D:\laravel-10.x\resources\views/example/data.blade.php ENDPATH**/ ?>
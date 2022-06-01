<?php $__env->startSection('contain'); ?>
<table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Dob</th>
        </tr>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($product->id); ?></td>
                <td><?php echo e($product->name); ?></td>
                <td><?php echo e($product->price); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Web Development\lab-1\lab-1\resources\views/pages/product.blade.php ENDPATH**/ ?>
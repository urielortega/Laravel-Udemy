<?php $__env->startSection('content'); ?>
    
    <h1><?php echo e($product->title); ?> ( <?php echo e($product->id); ?> )</h1>
    <p><?php echo e($product->description); ?></p>
    <p><?php echo e($product->price); ?></p>
    <p><?php echo e($product->stock); ?></p>
    <p><?php echo e($product->status); ?></p>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/uriel/Sites/Laravel-Udemy/resources/views/products/show.blade.php ENDPATH**/ ?>
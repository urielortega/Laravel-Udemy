<?php $__env->startSection('content'); ?>
    
    <h1>Edit product</h1>

    <form method="POST" action="<?php echo e(route('products.update', ['product' => $product->id])); ?>">

        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="form-row">
            <label>Title</label>
            <input class="form-control" type="text" name="title" value="<?php echo e($product->title); ?>" required>
        </div>

        <div class="form-row">
            <label>Description</label>
            <input class="form-control" type="text" name="description" value="<?php echo e($product->description); ?>" required>
        </div>

        <div class="form-row">
            <label>Price</label>
            <input class="form-control" type="number" min="1.00" step="0.01" name="price" value="<?php echo e($product->price); ?>" required>
        </div>

        <div class="form-row">
            <label>Stock</label>
            <input class="form-control" type="number" min="0" name="stock" value="<?php echo e($product->stock); ?>" required>
        </div>

        <div class="form-row">
            <label>Status</label>
            <select class="custom-select" name="status" required>
                <option <?php echo e($product->status == 'available' ? 'selected' : ''); ?> value="available" >Available</option>
                <option <?php echo e($product->status == 'unavailable' ? 'selected' : ''); ?> value="unavailable" >Unavailable</option>
            </select>
        </div>

        <div class="form-row">
            <button type="submit" class="btn btn-primary btn-lg">Edit product</button>
        </div>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/uriel/Sites/Laravel-Udemy/resources/views/products/edit.blade.php ENDPATH**/ ?>
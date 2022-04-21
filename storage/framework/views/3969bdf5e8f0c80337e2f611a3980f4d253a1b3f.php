<?php $__env->startSection('content'); ?>
    
    <h1>Create product</h1>

    <form method="POST" action="<?php echo e(route('products.store')); ?>">

        <?php echo csrf_field(); ?>

        <div class="form-row">
            <label>Title</label>
            <input class="form-control" type="text" name="title" required>
        </div>

        <div class="form-row">
            <label>Description</label>
            <input class="form-control" type="text" name="description" required>
        </div>

        <div class="form-row">
            <label>Price</label>
            <input class="form-control" type="number" min="1.00" step="0.01" name="price" required>
        </div>

        <div class="form-row">
            <label>Stock</label>
            <input class="form-control" type="number" min="0" name="stock" required>
        </div>

        <div class="form-row">
            <label>Status</label>
            <select class="custom-select" name="status" required>
                <option value="" selected>Select...</option>
                <option value="available" >Available</option>
                <option value="unavailable" >Unavailable</option>
            </select>
        </div>

        <div class="form-row">
            <button type="submit" class="btn btn-primary btn-lg">Create product</button>
        </div>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/uriel/Sites/Laravel-Udemy/resources/views/products/create.blade.php ENDPATH**/ ?>
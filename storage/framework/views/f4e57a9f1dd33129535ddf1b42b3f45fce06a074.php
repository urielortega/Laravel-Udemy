<?php $__env->startSection('content'); ?>
<h1>Product List</h1>

<a class="btn btn-success" href="<?php echo e(route('products.create')); ?>">Create</a>

<?php if(empty($products)): ?>
    <div class="alert alert-warning">
        The produc list is empty
    </div>
<?php else: ?>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($product->id); ?></td>
                        <td><?php echo e($product->title); ?></td>
                        <td><?php echo e($product->description); ?></td>
                        <td><?php echo e($product->price); ?></td>
                        <td><?php echo e($product->stock); ?></td>
                        <td><?php echo e($product->status); ?></td>
                        <td>
                            <a class="btn btn-link" href="<?php echo e(route('products.show', ['product' => $product->id])); ?>">Show</a>
                            <a class="btn btn-link" href="<?php echo e(route('products.edit', ['product' => $product->id])); ?>">Edit</a>
                            <form method="POST" action="<?php echo e(route('products.destroy', ['product' => $product->id])); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-link">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/uriel/Sites/Laravel-Udemy/resources/views/products/index.blade.php ENDPATH**/ ?>
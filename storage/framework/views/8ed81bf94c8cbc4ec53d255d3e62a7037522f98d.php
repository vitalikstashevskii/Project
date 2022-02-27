<?php $__env->startSection('title', 'Категория' , $category->name); ?>
<?php $__env->startSection('content'); ?>
    <div class="starter-template">
        <h1>
            <?php echo e($category->name); ?>

        </h1>
        <p><?php echo e($category->description); ?>

        </p>
        <div class="row">
            <?php echo $__env->make('card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/MagazinTexniki/resources/views/category.blade.php ENDPATH**/ ?>
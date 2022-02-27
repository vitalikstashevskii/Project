<?php $__env->startSection('title', 'Главная'); ?>
<?php $__env->startSection('content'); ?>
    <div class="starter-template">
        <h1>Все товары</h1>
            <div class="filters row">
                <?php echo $__env->make('card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/MagazinTexniki/resources/views/index.blade.php ENDPATH**/ ?>
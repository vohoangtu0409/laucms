

<?php $__env->startSection('pageTitle'); ?>
    <?php echo e(__('home::index.title',[
    'title' => 'Of Index'
])); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("home::index", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\github\vohoangtu0409\kodingmvc\App\Home\Resources/view/pages/home.blade.php ENDPATH**/ ?>
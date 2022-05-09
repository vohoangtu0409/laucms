<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('pageTitle'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('build/app.css')); ?>">
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>

<?php echo $__env->yieldContent('content'); ?>

<script src="<?php echo e(asset('build/runtime.js')); ?>" defer></script>
<script src="<?php echo e(asset('build/app.js')); ?>" defer></script>

<?php echo $__env->yieldPushContent('javascript'); ?>

</body>
</html><?php /**PATH D:\github\vohoangtu0409\kodingmvc\app\Home\Resources/view/index.blade.php ENDPATH**/ ?>
<?php
$lang = helper()->getLang();
?>
<div id="top-bar">
    <div class="container">
        <p><i class="fa fa-map-marker"></i><span><?php echo e(helper()->opSetting('diachi')); ?></span></p>
        <div class="follow-us_top">
            <?php if($social_top): ?>
                <?php $__currentLoopData = $social_top; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <a href="<?php echo e($v['link']); ?>" target="_blank" title="<?php echo e($v['ten'.helper()->getLang()]); ?>">
                            <img onerror="this.src='<?=THUMBS?>/20x20x2/assets/images/noimage.png';" src="<?=THUMBS?>/20x20x2/<?=UPLOAD_PHOTO_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>" title="<?=$v['ten'.$lang]?>"/>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<div id="header">
    <div class="maxwidth">
        <a id="logo" href="index.php">
            <img onerror="this.src='<?=THUMBS?>/110x83x2/assets/images/noimage.png';" src="<?=THUMBS?>/110x83x2/<?=UPLOAD_PHOTO_L.helper()->logo()['photo']?>"/>
        </a>
        <a id="banner" href="index.php">
            <img onerror="this.src='<?=THUMBS?>/433x87x2/assets/images/noimage.png';" src="<?=THUMBS?>/433x87x2/<?=UPLOAD_PHOTO_L.helper()->banner()['photo']?>"/>
        </a>
        <div id="header-right" class="hidden-lg hidden-md hidden-sm hidden-xs">
            <div class="box-info">
                <p>Hotline hỗ trợ:<span><?php echo e(helper()->opSetting('dienthoai')); ?></span></p>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div><?php /**PATH C:\Users\Giang Nguyen\Desktop\github\laucms\src\Packages\Home\Resources/Views/components/header.blade.php ENDPATH**/ ?>
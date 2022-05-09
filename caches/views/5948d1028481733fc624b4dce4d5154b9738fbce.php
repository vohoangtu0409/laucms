<?php
$lang = helper()->getLang();
$sluglang = 'tenkhongdauvi';
?>
<div class="menu hidden-lg hidden-md hidden-sm hidden-xs">
    <div class="maxwidth">
        <ul>
            <li><a class="transition text-menu <?php if(app('status')->get('routeName') == 'home.products'): ?> active <?php endif; ?>"
                   href="trang-chu"
                   title="Trang chủ">Trang chủ</a></li>
            <li><a class="transition text-menu <?php if(app('status')->get('routeName') == 'home.about'): ?> active <?php endif; ?>"
                   href="gioi-thieu"
                   title="Giới Thiệu">Giới Thiệu</a></li>
            <li>
                <a class="transition text-menu <?php if(app('status')->get('routeName') == 'home.products'): ?> active <?php endif; ?>"
                   href="san-pham"
                   title="Sản phẩm">Sản phẩm</a>
                <?php if(count($splistmenu)): ?>
                    <ul>
                        <?php $__currentLoopData = $splistmenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a class="transition" title="<?php echo e($menu_list['ten'.$lang]); ?>" href="<?php echo e($menu_list[$sluglang]); ?>">
                                    <?php echo e($menu_list['ten'.$lang]); ?>

                                </a>
                            <?php
                              $spcatmenu = $menu_list->cats();
                            ?>
                            <?php if($spcatmenu): ?>
                                <ul>
                                <?php $__currentLoopData = $spcatmenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                    <?php
                                        $spItemMenu = $menu_cat->items();
                                    ?>
                                        <?php if($spItemMenu): ?>
                                            <ul>
                                            <?php $__currentLoopData = $spItemMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu_items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php endif; ?>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php endif; ?>
            </li>
            <li><a class="transition text-menu <?php if(app('status')->get('routeName') == 'home.services'): ?> active <?php endif; ?>"
                   href="dich-vu" title="Dịch vụ">Dịch vụ</a></li>
            <li>
                <a class="transition text-menu <?php if(app('status')->get('routeName') == 'home.news'): ?> active <?php endif; ?>"
                   href="tin-tuc" title="Tin tức">Tin tức</a>
            </li>
            <li><a class="transition text-menu <?php if(app('status')->get('routeName') == 'home.contact'): ?> active <?php endif; ?>" href="lien-he" title="<?=lienhe?>"><?=lienhe?></a></li>
            <li>
                <div class="search w-clear">
                    <input type="text" id="keyword" placeholder="<?=nhaptukhoatimkiem?>" onkeypress="doEnter(event,'keyword');"/>
                    <p onclick="onSearch('keyword');"><i class="fas fa-search"></i></p>
                </div>
            </li>
        </ul>
        <div class="clear"></div>
    </div>
</div>

<?php $__env->startPush('style'); ?>

<?php $__env->stopPush(); ?><?php /**PATH C:\laragon\www\nina\src\Packages\Home\Resources/Views/components/menu.blade.php ENDPATH**/ ?>
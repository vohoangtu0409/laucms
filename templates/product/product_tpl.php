<div class="maxwidth">
    <div class="content-main w-clear">
        <div class="title-main"><h2><?=(@$title_cat!='')?$title_cat:@$title_crumb?></h2></div>
            <?php if(isset($product) && count($product) > 0) {  
                echo $func->get_product($product,'product-in','');
            }else{ ?>
                <div class="alert alert-warning" role="alert">
                    <strong><?=khongtimthayketqua?></strong>
                </div>
            <?php } ?>
        <div class="clear"></div>
        <div class="pagination-home"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
    </div>
</div>
<div class="maxwidth">
    <div class="content-main w-clear">
    <div class="title-main"><h2><?=(@$title_cat!='')?$title_cat:@$title_crumb?></h2></div>
        <?php if(count($news)>0) {  
            echo $func->get_news($news,'','');
        } else { ?>
        <div class="alert alert-warning" role="alert">
            <strong><?=khongtimthayketqua?></strong>
        </div>
        <?php } ?>
        <div class="clear"></div>
        <div class="pagination-home"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
    </div>
</div>
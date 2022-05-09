<div class="maxwidth">
    <div class="content-main w-clear">
        <div class="row">
            <div class="col-md-6 col-sm-5 w-clear">
                <div class="left-pro-detail">
                    <a id="Zoom-1" class="MagicZoom" data-options="zoomMode: off; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;" href="<?=WATERMARK?>/product/550x530x2/<?=UPLOAD_PRODUCT_L.$row_detail['photo']?>" title="<?=$row_detail['ten'.$lang]?>"><img onerror="this.src='<?=THUMBS?>/540x540x2/assets/images/noimage.png';" src="<?=WATERMARK?>/product/550x530x2/<?=UPLOAD_PRODUCT_L.$row_detail['photo']?>" alt="<?=$row_detail['ten'.$lang]?>"></a>
                    <?php if($hinhanhsp) { if(count($hinhanhsp) > 0) { ?>
                    <div class="gallery-thumb-pro">
                        <p class="control-carousel prev-carousel prev-thumb-pro transition"><i class="fas fa-chevron-left"></i></p>
                        <div class="owl-carousel owl-theme owl-thumb-pro">
                            <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?=WATERMARK?>/product/550x530x2/<?=UPLOAD_PRODUCT_L.$row_detail['photo']?>" title="<?=$row_detail['ten'.$lang]?>"><img onerror="this.src='<?=THUMBS?>/540x540x2/assets/images/noimage.png';" src="<?=WATERMARK?>/product/550x530x2/<?=UPLOAD_PRODUCT_L.$row_detail['photo']?>" alt="<?=$row_detail['ten'.$lang]?>"></a>
                            <?php foreach($hinhanhsp as $v) { ?>
                            <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?=WATERMARK?>/product/550x530x2/<?=UPLOAD_PRODUCT_L.$v['photo']?>" title="<?=$row_detail['ten'.$lang]?>">
                                <img onerror="this.src='<?=THUMBS?>/540x540x2/assets/images/noimage.png';" src="<?=WATERMARK?>/product/550x530x2/<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$row_detail['ten'.$lang]?>">
                            </a>
                            <?php } ?>
                        </div>
                        <p class="control-carousel next-carousel next-thumb-pro transition"><i class="fas fa-chevron-right"></i></p>
                    </div>
                    <?php } } ?>
                </div>
            </div>
            <div class="col-md-6 col-sm-7 w-clear">
                <div class="right-pro-detail">
                    <p class="title-pro-detail">
                        <?=$row_detail['ten'.$lang]?>
                    </p>
                    <div class="social-plugin social-plugin-pro-detail w-clear">
                        <div class="addthis_inline_share_toolbox_qj48"></div>
                        <div class="zalo-share-button" data-href="<?=$func->getCurrentPageURL()?>" data-oaid="<?=($optsetting['oaidzalo']!='')?$optsetting['oaidzalo']:'579745863508352884'?>" data-layout="1" data-color="blue" data-customize=false></div>
                    </div>
                    <div class="desc-pro-detail">
                        <?=(isset($row_detail['mota'.$lang]) && $row_detail['mota'.$lang] != '') ? htmlspecialchars_decode($row_detail['mota'.$lang]) : ''?>
                    </div>
                    <ul class="attr-pro-detail">
                        <li class="w-clear">
                            <label class="attr-label-pro-detail">
                                <?=gia?>:</label>
                            <div class="attr-content-pro-detail">
                                <?php if(isset($row_detail['giacu'])) { ?>
                                <span class="price-new-pro-detail">
                                    <?=$func->format_money($row_detail['gia'])?></span>
                                <span class="price-old-pro-detail">
                                    <?=$func->format_money($row_detail['giacu'])?></span>
                                <?php } else { ?>
                                <span class="price-new-pro-detail">
                                    <?=($row_detail['gia']) ? $func->format_money($row_detail['gia']) : lienhe?></span>
                                <?php } ?>
                            </div>
                        </li>
                        <li class="w-clear">
                            <label class="attr-label-pro-detail">
                                <?=luotxem?>:</label>
                            <div class="attr-content-pro-detail">
                                <?=$row_detail['luotxem']?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
        <div class="clear20"></div>
        <div class="tags-pro-detail w-clear">
            <?php if(isset($pro_tags) && count($pro_tags) > 0) { foreach($pro_tags as $v) { ?>
                <a class="transition text-decoration-none w-clear" href="<?=$v[$sluglang]?>" title="<?=$v['ten'.$lang]?>"><i class="fas fa-tags"></i><?=$v['ten'.$lang]?></a>
            <?php } } ?>
        </div>
        <div class="clear20"></div>
        <div class="tabs-pro-detail">
            <ul class="ul-tabs-pro-detail w-clear">
                <li class="active transition" data-tabs="info-pro-detail">
                    <?=thongtinsanpham?>
                </li>
                <li class="transition" data-tabs="commentfb-pro-detail">
                    <?=binhluan?>
                </li>
            </ul>
            <div class="content-tabs-pro-detail info-pro-detail active">
                <?=(isset($row_detail['noidung'.$lang]) && $row_detail['noidung'.$lang] != '') ? htmlspecialchars_decode($row_detail['noidung'.$lang]) : ''?>
            </div>
            <div class="content-tabs-pro-detail commentfb-pro-detail">
                <div class="fb-comments" data-href="<?=$func->getCurrentPageURL()?>" data-numposts="3" data-colorscheme="light" data-width="100%"></div>
            </div>
        </div>
        <div class="clear20"></div>
        <div class="title-main"><h2>
                <?=sanphamcungloai?></h2></div>
        <div class="content-main w-clear">
            <?php if(isset($product) && count($product) > 0) {  
        echo $func->get_product($product,'product-in','');
    }else{ ?>
            <div class="alert alert-warning" role="alert">
                <strong>
                    <?=khongtimthayketqua?></strong>
            </div>
            <?php } ?>
            <div class="clear"></div>
            <div class="pagination-home">
                <?=(isset($paging) && $paging != '') ? $paging : ''?>
            </div>
        </div>
    </div>
</div>
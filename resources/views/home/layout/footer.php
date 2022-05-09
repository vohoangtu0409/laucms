<div id="footer">
    <div class="footer-article">
        <div class="maxwidth">
            <div class="row">
                <div class="col-md-5">
                    <div class="footer-news">
                        <div class="info-footer"><?=htmlspecialchars_decode($footer['noidung'.$lang])?></div>
                        <div class="follow-us">
                            <?php foreach($social_footer as $v) { ?>
                                <div>
                                    <a href="<?=$v['link']?>" target="_blank" title="<?=$v['ten'.$lang]?>"><img onerror="this.src='<?=THUMBS?>/25x25x2/assets/images/noimage.png';" src="<?=THUMBS?>/25x25x2/<?=UPLOAD_PHOTO_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>" title="<?=$v['ten'.$lang]?>"/></a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-3">
                    <div class="footer-news">
                        <h2 class="title-footer">Danh mục sản phẩm</h2>
                        <ul class="footer-ul">
                            <?php foreach($splistnb as $v) { ?>
                                <li><a class="text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['ten'.$lang]?>"><?=$v['ten'.$lang]?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-news">
                        <h2 class="title-footer">Fanpage</h2>
                        <?=$addons->setAddons('fanpage-facebook', 'fanpage-facebook', 10);?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-powered">
        <div class="maxwidth">
            <p class="copyright">2021 Copyright <?=$setting['ten'.$lang]?>. Design by Nina.vn</p>
            <p class="statistic">
                <span><?=dangonline?>:<?=$online?></span>&nbsp;&nbsp;&nbsp;&nbsp;
                <span><?=trongthang?>:<?=$counter['month']?></span>&nbsp;&nbsp;&nbsp;&nbsp;
                <span><?=tongtruycap?>:<?=$counter['total']?></span>
            </p>
        </div>
    </div>
</div>
<?=$addons->setAddons('footer-map', 'footer-map', 10);?>
<?=$addons->setAddons('messages-facebook', 'messages-facebook', 10);?>

<div class="hidden-xs">
    <?=$addons->setAddons('messages-facebook', 'messages-facebook', 10);?>
</div>
<a class="btn-zalo btn-frame text-decoration-none hidden-xs" target="_blank" href="https://zalo.me/<?=preg_replace('/[^0-9]/','',$optsetting['zalo']);?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><img src="assets/images/zl.png" alt="Zalo"></i>
</a>
<a class="btn-phone btn-frame text-decoration-none hidden-xs" href="tel:<?=preg_replace('/[^0-9]/','',$optsetting['hotline']);?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><img src="assets/images/hl.png" alt="Hotline"></i>
</a>

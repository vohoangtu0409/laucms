<div class="menu-res hidden-xl">
    <div class="menu-bar-res">
        <a id="hamburger" href="#menu" title="Menu"><span></span></a>
        <div class="search-res">
            <p class="icon-search transition"><i class="fa fa-search"></i></p>
            <div class="search-grid w-clear">
                <input type="text" name="keyword2" id="keyword2" placeholder="<?=nhaptukhoatimkiem?>" onkeypress="doEnter(event,'keyword2');"/>
                <p onclick="onSearch('keyword2');"><i class="fa fa-search"></i></p>
            </div>
        </div>
    </div>
    <nav id="menu">
        <ul>
        <li><a href="trang-chu" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a></li>
        <li><a href="gioi-thieu" title="<?=gioithieu?>"><?=gioithieu?></a></li>
        <li>
            <a href="san-pham" title="Sản phẩm">Sản phẩm</a>
            <?php if(count($splistmenu)) { ?>
                <ul>
                    <?php for($i=0;$i<count($splistmenu); $i++) {
                        $spcatmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id from #_product_cat where id_list = ? and hienthi > 0 order by stt,id desc",array($splistmenu[$i]['id'])); ?>
                        <li>
                            <a title="<?=$splistmenu[$i]['ten'.$lang]?>" href="<?=$splistmenu[$i][$sluglang]?>"><?=$splistmenu[$i]['ten'.$lang]?></a>
                            <?php if(count($spcatmenu)>0) { ?>
                                <ul>
                                    <?php for($j=0;$j<count($spcatmenu);$j++) {
                                        $spitemmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id from #_product_item where id_cat = ? and hienthi > 0 order by stt,id desc",array($spcatmenu[$j]['id'])); ?>
                                        <li>
                                            <a title="<?=$spcatmenu[$j]['ten'.$lang]?>" href="<?=$spcatmenu[$j][$sluglang]?>"><?=$spcatmenu[$j]['ten'.$lang]?></a>
                                            <?php if(count($spitemmenu)) { ?>
                                                <ul>
                                                    <?php for($u=0;$u<count($spitemmenu);$u++) {
                                                        $spsubmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id from #_product_sub where id_item = ? and hienthi > 0 order by stt,id desc",array($spitemmenu[$u]['id'])); ?>
                                                        <li>
                                                            <a title="<?=$spitemmenu[$u]['ten'.$lang]?>" href="<?=$spitemmenu[$u][$sluglang]?>"><?=$spitemmenu[$u]['ten'.$lang]?></a>
                                                            <?php if(count($spsubmenu)) { ?>
                                                                <ul>
                                                                    <?php for($s=0;$s<count($spsubmenu);$s++) { ?>
                                                                        <li>
                                                                            <a title="<?=$spsubmenu[$s]['ten'.$lang]?>" href="<?=$spsubmenu[$s][$sluglang]?>"><?=$spsubmenu[$s]['ten'.$lang]?></a>
                                                                        </li>
                                                                    <?php } ?>
                                                                </ul>
                                                            <?php } ?>
                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            <?php } ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </li>
        <li><a href="dich-vu" title="Dịch vụ">Dịch vụ</a></li>
        <li>
            <a href="tin-tuc" title="Tin tức">Tin tức</a>
        </li>
        <li><a href="lien-he" title="<?=lienhe?>"><?=lienhe?></a></li>
    </ul>
    </nav>
</div>
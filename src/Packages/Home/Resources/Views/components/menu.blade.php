@php
$lang = helper()->getLang();
$sluglang = 'tenkhongdauvi';
@endphp
<div class="menu hidden-lg hidden-md hidden-sm hidden-xs">
    <div class="maxwidth">
        <ul>
            <li><a class="transition text-menu @if(app('status')->get('routeName') == 'home.products') active @endif"
                   href="trang-chu"
                   title="Trang chủ">Trang chủ</a></li>
            <li><a class="transition text-menu @if(app('status')->get('routeName') == 'home.about') active @endif"
                   href="gioi-thieu"
                   title="Giới Thiệu">Giới Thiệu</a></li>
            <li>
                <a class="transition text-menu @if(app('status')->get('routeName') == 'home.products') active @endif"
                   href="san-pham"
                   title="Sản phẩm">Sản phẩm</a>
                @if(count($splistmenu))
                    <ul>
                        @foreach($splistmenu as $menu_list)
                            <li>
                                <a class="transition" title="{{ $menu_list['ten'.$lang] }}" href="{{ $menu_list[$sluglang] }}">
                                    {{ $menu_list['ten'.$lang] }}
                                </a>
                            @php
                              $spcatmenu = $menu_list->cats();
                            @endphp
                            @if($spcatmenu)
                                <ul>
                                @foreach($spcatmenu as $menu_cat)
                                    <li>
                                    @php
                                        $spItemMenu = $menu_cat->items();
                                    @endphp
                                        @if($spItemMenu)
                                            <ul>
                                            @foreach($spItemMenu as $menu_items)

                                            @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                                </ul>
                            @endif
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
            <li><a class="transition text-menu @if(app('status')->get('routeName') == 'home.services') active @endif"
                   href="dich-vu" title="Dịch vụ">Dịch vụ</a></li>
            <li>
                <a class="transition text-menu @if(app('status')->get('routeName') == 'home.news') active @endif"
                   href="tin-tuc" title="Tin tức">Tin tức</a>
            </li>
            <li><a class="transition text-menu @if(app('status')->get('routeName') == 'home.contact') active @endif" href="lien-he" title="<?=lienhe?>"><?=lienhe?></a></li>
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

@push('style')

@endpush
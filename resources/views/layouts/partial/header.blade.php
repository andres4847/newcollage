<header class="header-bar">

    <div class="branding">
        <div id="site-title" class="assistive-text">NewCoallage</div>
        <div id="site-description" class="assistive-text">Indumentaria de Egresados</div>
        <a href="http://the7.io/marketing-agency/">
                    <img class=" preload-me"
                    src="{{ asset('/images/logo_240.png') }}" 
                    srcset="{{ asset('/images/logo_240.png') }} 240w,
                    {{ asset('/images/logo_480.png') }} 480w" 
                    width="240" height="52"   sizes="240px" alt="The7 Marketing Agency" />
                    <img class="mobile-logo preload-me"
                    src="http://the7io.dreamthemecom.netdna-cdn.com/marketing-agency/wp-content/uploads/sites/12/2017/04/l-m.png" 
                    srcset="http://the7io.dreamthemecom.netdna-cdn.com/marketing-agency/wp-content/uploads/sites/12/2017/04/l-m.png 179w,
                        http://the7io.dreamthemecom.netdna-cdn.com/marketing-agency/wp-content/uploads/sites/12/2017/04/l-m-hd.png 358w"
                        width="179" height="39"   sizes="179px" alt="The7 Marketing Agency" />
                    </a>
    </div>

    <ul id="primary-menu" class="main-nav bg-outline-decoration hover-bg-decoration active-bg-decoration animate-click-decoration level-arrows-on outside-item-remove-margin" role="menu">
       
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-45 current_page_item menu-item-1304 act first">
            <a href='http://the7.io/marketing-agency/' data-level='1'>
                    <span class="menu-item-text"><span class="menu-text">Home</span></span>
                </a>
        </li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1303">
            <a href='http://the7.io/marketing-agency/' data-level='1'>
                    <span class="menu-item-text"><span class="menu-text">Productos</span></span>
                </a>
        </li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1297">
            <a href='http://the7.io/marketing-agency/agency/' data-level='1'>
                    <span class="menu-item-text"><span class="menu-text">Creá</span></span>
                </a>
        </li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1302 ">
            <a href="{{ action('AboutController@index')}}" data-level='1'>
                    <span class="menu-item-text"><span class="menu-text">Nosotros</span></span>
                </a>
        </li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1301">
            <a href='http://the7.io/marketing-agency/q-a/' data-level='1'>
                    <span class="menu-item-text"><span class="menu-text">Egresaditos</span></span>
                </a>
        </li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1300">
            <a href='http://the7.io/marketing-agency/showcase/' data-level='1'>
                    <span class="menu-item-text"><span class="menu-text">Inspirate(o QA)</span></span>
                </a>
        </li>

        <!-- current-menu-item page_item page-item-53 current_page_item menu-item-1299 act -->
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1298 ">
            <a href="{{ action('ContactController@index') }}" data-level='1'>
                    <span class="menu-item-text"><span class="menu-text">Contactanos</span></span>
                </a>
        </li>
    </ul>

</header>





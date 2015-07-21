<div class="row image-menu">
    <h2>ПИРОГИ И ЛАКОМСТВА ОТ УМЕЛОГО ПОВАРА</h2>
    <ul class="menu">
        <li class="logo">
            <a href="/" title="перейти на главную страницу сайта"><img src="../img/logo-big.jpg" alt="Заказ пирожков в Москве"/></a>
            <ul class="phones">
                <li class="phone-order">
                    <span class="phone-order-text">ЗАКАЗ ПО ТЕЛЕФОНАМ:</span>
                </li>
                <li class="phone-place">
                    <span class="phone-number">499 488 61 00</span>
                    <span class="phone-number">903 668 98 98</span>
                </li>
            </ul>
        </li>
        <?php foreach ($categories as $category) {
            $active_menu = 'class="VmClose"';
            $caturl = JRoute::_('index.php?option=com_virtuemart&view=category&virtuemart_category_id='.$category->virtuemart_category_id);
            $cattext = $category->category_name;
            if (in_array( $category->virtuemart_category_id, $parentCategories)) $active_menu = 'class="VmOpen"';
            ?>
            <li <?php echo $active_menu ?>>
                <?php echo JHTML::link($caturl, $cattext);
                if ($category->childs) {
                    ?>
                    <span class="VmArrowdown"> </span>
                    <?php
                }
                ?>
            </li>
            <?php
        } ?>
    </ul>
    <script>
        var url=document.location.href;
        $.each($('.image-menu li a'),function(){
            if(this.href==url){
                $(this).addClass('active');
            }
        });
    </script>
</div>
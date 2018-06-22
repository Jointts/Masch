<footer>
    <div class="container footer-container">
        <div class="col-xs-4 footer-first-section">
            <p class="company-name">Masch OÜ</p>
            <p class="company-telephone"><i class="fa fa-phone"></i> 531124</p>
            <p class="company-mail"><i class="fa fa-envelope-o"></i> info@masch.ee</p>
        </div>
        <div class="col-xs-offset-5 col-xs-2 footer-second-section">
            <ul>
                <?php render_footer_menu(); ?>
            </ul>
        </div>
    </div>
</footer>

<?php

function render_footer_menu(){
    $items = wp_get_nav_menu_items('menu');

    foreach ($items as &$item){
        $class = "";
        if (is_page($item->title)) $class = "active";
        echo '<li><a class="' . $class . '" href="' . $item->url . '">' . $item->title . '</a></li>';
    }
}

?>
<head>
    <link rel="stylesheet" type="text/css"
          href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
    <script type="text/javascript"
            src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/main.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,900" rel="stylesheet">
    <link rel="stylesheet"
          href="<?php echo get_bloginfo('template_directory'); ?>/res/font-awesome-4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <?php wp_head(); ?>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.png"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php render_menu(); ?>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>

<?php

function render_menu(){
    $items = wp_get_nav_menu_items('menu');

    foreach ($items as &$item){
        $class = "";
        if (is_page($item->title)) $class = "active";
        echo '<li><a class="' . $class . '" href="' . $item->url . '">' . $item->title . '</a></li>';
    }
}


?>
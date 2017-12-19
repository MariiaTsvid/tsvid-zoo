<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('«', true, 'right'); ?> </title>
    <?php wp_head(); ?>
</head>
<body>
    <a name="up"></a>
    <header>
        <div class="colontitul">
            <a href="/"><img class="logo" src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="This is logo our Zoo!"></a>
            <span class="contacts">  Germany, Berlin +49(089)123-45-67  mariia.tsvid@gmail.com </span>            
            <a href="https://www.facebook.com/zooberlin/"><img class="icons3" src="<?php echo get_template_directory_uri();?>/images/facebook.png" alt="Icons3" title="Это ссылка на facebook!"></a>
            <a href="https://www.instagram.com/zooberlin/"><img class="icons2" src="<?php echo get_template_directory_uri();?>/images/instagram.png" alt="Icons2" title="Это ссылка на instagram!"></a>        
            <a href="https://twitter.com/zooberlin/"><img class="icons1" src="<?php echo get_template_directory_uri();?>/images/twitter.png" alt="Icons2" title="Это ссылка на twitter!"></a>
            <a href="https://www.youtube.com/zooundtierparkberlin/"><img class="icons0" src="<?php echo get_template_directory_uri();?>/images/youtube.png" alt="Icons2" title="Это ссылка на youtube!"></a>    
        </div> 
        
        <h1>Добро пожаловать в ЗООПАРК</h1><br>    
        <? wp_nav_menu(array('menu' => 'topmenu', 'container' => '', 'menu_class' => 'topmenu')); ?>
        
        <div class="search">
            <?php get_search_form(); ?>
        </div>
        <br>  
    </header>
    
<?php get_header();?>
<div class="container">
    <!-- Боковое меню -->
    <?php get_sidebar();?>

    <!-- Основной контент -->
    <main class="str_animals1">
        <div class="text">
            <br> <h2><?php printf( __('Результаты поиска: %s', 'default'), get_search_query() ); ?></h2> <br>
            
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
		        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		        <p><?php the_excerpt(); ?></p>
	            <?php endwhile;	else:?>
		        <p><?php echo 'По вашему запросу ничего не найдено';?></p>
	        <?php endif; ?>
            <!-- Запрет на обтекание -->
            <div class="clear"></div>
            <br>
            <A class="up" href="#up">Вверх</A><br>
        </div>
        </div>
    </main>
    
    <!-- Запрет на обтекание -->
    <div class="clear"></div>

<?php get_footer();?>
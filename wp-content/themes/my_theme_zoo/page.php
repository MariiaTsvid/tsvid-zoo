<?php get_header();?>
<div class="container">

    <!-- Боковое меню -->
    <?php get_sidebar();?>

    <!-- Основной контент -->
    <main class="str_animals1">
        <div class="text">
            <br>  <h2><?php the_title(); ?></h2>    <br>

            <?php if (have_posts()): while (have_posts()): the_post(); ?>
		        <?php the_content(); ?>
	        <?php endwhile; endif; ?>

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
<?php get_header();?>
    <main>    
        <br>  
        <!-- Основной контент -->
        <h2><?php the_title(); ?></h2>
        <br>  
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>    
    </main>
        
    <!-- Запрет на обтекание -->
    <div class="clear"></div>

<?php get_footer();?>
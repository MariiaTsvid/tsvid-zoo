
<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <?php the_content(); ?>
    <script src="<?php echo get_template_directory_uri();?>/app.js"></script>
<?php endwhile; endif; ?>
<?php get_footer();?>



<?php /* Template Name: Archive */ ?>

<?php get_header(); ?>

<!--The content in the admin page-->
<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <h2><?php the_title(); ?></h2>

        <?php the_content(); ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
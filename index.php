<!DOCTYPE html>
<html lang="en">
<?php get_header();?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php the_title(); ?></h1>
    <div class="entry">
        <?php the_content(); ?>
    </div><!-- entry -->
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
</body>
</html>
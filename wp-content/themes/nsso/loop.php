<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="post">

     <h1><?php the_title(); ?></h1>

     <h2><?php the_time('d/m/Y') ?> by <?php the_author_posts_link() ?></h2>

     <?php the_content(); ?>

     <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
     


</div>

<?php endwhile; else: ?>

    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>


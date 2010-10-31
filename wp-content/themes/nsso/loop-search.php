<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php
    $homeId = get_option('page_on_front');
    $parentId = is_subpage();
    if( $homeId == $parentId )
        continue; //Exlude pages that are children of the home page
?>

<div class="post">

     <h2><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h2>

     <?php
        $search_excerpt = get_the_excerpt();

        $keys= explode(" ",$s);
        $search_excerpt = preg_replace('/('.implode('|', $keys) .')/iu', '<span class="search-excerpt">\0</span>', $search_excerpt);
     ?>

     <p><?php echo $search_excerpt; ?></p>

     <p><a href="<?php echo get_permalink() ?>"><?php echo get_permalink() ?></a></p>

</div>

<?php endwhile; else: ?>

    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>


<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<div id="search-navigation">
		<div class="nav-previous"><?php previous_posts_link(); ?></div>
		<div class="nav-next"><?php next_posts_link(); ?></div>
	</div>
    <div style="clear:both"></div>
<?php endif; ?>
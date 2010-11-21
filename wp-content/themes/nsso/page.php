<?php get_header(); ?>

<div id="content"<?php if( is_front_page() ) echo 'class="home"'?>>

    <?php if ( !is_front_page() ): ?>
        <div class="breadcrumb">
            <?php
            if(function_exists('bcn_display'))
            {
                bcn_display();
            }
            ?>
        </div>
    <?php endif; ?>

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>">

            <?php if ( !is_front_page() ): ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <?php endif; ?>

            <div class="entry-content">
                <?php the_content(); ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
                <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
            </div>
        </div>

    <?php endwhile; ?>



    <?php if ( is_front_page() ): ?>

        <?php $pages = get_pages( array( 'child_of' => get_the_ID(), 'sort_column' => 'menu_order', ) ); ?>
        <?php $count = count( $pages ); ?>

        <div id="home_feature_wrapper">

            <?php foreach( $pages as $page ): ?>

                <div class="home_feature<?php if( $count <= 1 ) echo " last"; ?>">
                    <h3><?php echo $page->post_title?></h3>
                    <?php echo $page->post_content;?>
                </div>

                <?php $count--; ?>

            <?php endforeach; ?>

        </div>

    <?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
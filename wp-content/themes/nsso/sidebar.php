<div id="sidebar-holder">
    <div id="sidebar">
        <?php get_search_form(); ?>

        <div id="news">
            <h1>Latest News</h1>
            <a href="<?php bloginfo( 'rss_url' ) ?>"><img src="<?php bloginfo('template_url')?>/images/rss_icon.jpg" alt="RSS Feed" /></a>

            <?php $recent_posts = wp_get_recent_posts( 5 ) ?>
            
            <?php foreach( $recent_posts as $post ): ?>
            <div class="news_post">
                <h2><a href="<?php echo get_permalink($post["ID"]); ?>"><?php echo $post['post_title']?></a></h2>
                <span class="news_date"><?php echo date( 'd/m/Y', strtotime( $post['post_date'] ) )?></span>
                <p>
                    <?php
                    if( !empty( $post['post_excerpt'] ) )
                        echo $post['post_excerpt'];
                    else
                        echo substr( $post['post_content'], 0, 250 ) . '...';
                    ?>
                </p>
                <div class="news_readmore_link"><a href="<?php echo get_permalink($post["ID"]); ?>">Read more</a></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div id="sidebar_bottom"></div>
</div>

<div style="clear:both"></div>
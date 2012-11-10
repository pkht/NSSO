<div>
    <form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>">
        <input class="searchfield" type="text" value="<?php if( get_search_query() ) the_search_query(); else echo "Search...";?>" name="s" id="s" />
        <input type="image" src="<?php bloginfo( 'template_url' )?>/images/search_go_button.jpg" id="searchsubmit" value="Go" />
    </form>
</div>
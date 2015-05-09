<footer>

    <?php
        foreach ( $featured_projects as $feat_proj ) {
            /* Declare the parameters for the snippet */
            $title       = $feat_proj->title();
            $src         = $feat_proj->image( 'thumb.jpg' )->url();
            $url         = $feat_proj->url();
            /* $hover_event = $feat_proj->hover_event(); */
            /* $hover_src   = $feat_proj->hover_src(); */

            /* Call the snippet with specified parameters */
            snippet( 'featured_projects', array(
                'title'  => $title,
                'src'    => $src,
                'url'    => $url,
                'active' => $feat_proj->isActive(),
                /* 'hover_event' => $hover_event, */
                /* 'hover_src'   => $hover_src, */
            ));
        }

    ?>

</footer>

<?php snippet( 'head' ) ?>

<?php snippet( 'header' ) ?>

<main>

<nav role="navigation">
    <ul class="nav--list">
        <?php //{{{
/*{{{
 * Build the navigation menu using the menu snippet
 * *----------------------------------------------------------------------
 * @Parameters  : title, url
 * @Param title : The title of the page is displayed as the menu item
 * @Param url   : The url of the page is used as the link in the menu item
 *
 * @example     : snippet('menu', array(
 *                  'title' => $page_for_navigation->title(),
 *                  'url'   => $page_for_navigation->url(),
 *                ));
 *
 * @usage       : all page objects are returned from /site/controllers/home.php, so be sure to define the item you want to add from there.
 *
 * @todo        : all items with a "menu" tag will be added to the menu
 * @todo        : all items will be ordered with "menu_number" tags. ie: "menu1".
 * *----------------------------------------------------------------------
 }}}
 */

        // About Page
        snippet( 'menu', array(
            'url'   => $about_page->url(),
            'title' => $about_page->title(),
        ));

        // Contact Page
        snippet( 'menu', array(
            'url'   => $contact_page->url(),
            'title' => $contact_page->title(),
        ));
        ?>

        <!-- Seperator --!>
        <hr class="nav--list--break"/>

        <?php
        // All Projects with a featured tag
        foreach ( $featured_projects as $project ) {
            snippet( 'menu', array(
                'url'   => $project->url(),
                'title' => $project->title(),
            ));
        }
        ?>

        <hr class="nav--list--break"/>

        <?php
        // Archive Page
        snippet( 'menu', array(
            'url'   => $archive_page->url(),
            'title' => $archive_page->title(),
        ));

        // }}}
        ?>
    </ul>
</nav>

<!-- The Featured Project Grid           --!>
<!-- Start the grid as an unordered list --!>
<ul class="project_grid">
<?php //{{{
/* Build the Grid using the featured_projects snippet
 * *----------------------------------------------------------------------
 * @Usage              : For each project item with a featured tag as sent by the home controller
 * @Parameters         : title, hover_event, src, hover_source
 * @Param title        : Returns the title of the project as specified in project.txt
 * @Param src          : Returns the title image URL
 * @Param hover_event  : **NOT YET IMPLEMENTED** Returns the specified hover event (EG. play gif on hover) for each project. If none, must return "none".
 * @Param hover_source : **NOT YET IMPLEMENTED** Returns the image URL to play on hover
 */

foreach ( $featured_projects as $feat_proj ) {
    /* Declare the parameters for the snippet */
    $title       = $feat_proj->title();
    $src         = $feat_proj->image( 'thumb.jpg' )->url();
    $url         = $feat_proj->url();
    /* $hover_event = $feat_proj->hover_event(); */
    /* $hover_src   = $feat_proj->hover_src(); */

    /* Call the snippet with specified parameters */
    snippet( 'featured_projects', array(
        'title'       => $title,
        'src'         => $src,
        'url'         => $url,
        /* 'hover_event' => $hover_event, */
        /* 'hover_src'   => $hover_src, */
    ));
}

// }}} ?>
</ul>


</main>

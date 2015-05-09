<?php snippet( 'head'    ); ?>
<?php snippet( 'header'  ); ?>

<nav role="navigation">
    <ul class="nav--list">
        <?php
        // {{{

        // About Page
        snippet( 'menu', array(
            'url'    => $about_page->url(),
            'title'  => $about_page->title(),
            'active' => $about_page->isActive(),
        ));

        // Contact Page
        snippet( 'menu', array(
            'url'    => $contact_page->url(),
            'title'  => $contact_page->title(),
            'active' => $contact_page->isActive(),
        ));
        ?>

        <!-- Seperator --!>
        <hr class="nav--list--break"/>

        <?php
        // All Projects with a featured tag
        foreach ($featured_projects as $project) {
            snippet( 'menu', array(
                'url'    => $project->url(),
                'title'  => $project->title(),
                'active' => $project->isActive(),
            ));
        }
        ?>

        <hr class="nav--list--break"/>

        <?php
        // Archive Page
        snippet( 'menu', array(
            'url'    => $archive_page->url(),
            'title'  => $archive_page->title(),
            'active' => $archive_page->isActive(),
        ));

        // }}}
        ?>
    </ul>
</nav>

<?php snippet( 'project' ); ?>
<?php snippet( 'footer'  ); ?>



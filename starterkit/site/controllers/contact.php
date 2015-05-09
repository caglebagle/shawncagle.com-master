<?php
/*{{{
 * @Author   : Kristopher Watts <kristopher.a.watts@gmail.com>
 * @Date     : April 17 2015
 *
 * @Location : "/site/controllers/project.php"
 *
 * @Uses     : Returns several arrays of categorized projects
 * @Example  :
 *  In the project template
 *  <?php foreach ($projects as $project): ?>
 *     <!-- html code here--!>
 *  <?php end foreach ?>
 *
 * @TODO: pull based on function called from homepage, eg pull('projects', 'tag','archive') pull('pages','tag','photograph')
 * @TODO: Navigation based on nav tag
}}}*/

// Get all featured projects
return function($site, $pages, $page){

    /* Returns all projects */
    $projects = $site->pages('projects')->children('project');

    /* Returns projects with featured tag */
    $featured_projects = $projects->filterBy('tags', '==', 'featured');

    /* Returns projects with the archived tag */
    $archived_projects = $projects->filterBy('tags', '==', 'archived');

    /* Returns items marked for navigation */
    $navables = $site->pages()->visible();

    /* Menu Item 1 -> About page */
    $about_page = $site->page('about');

    /* Menu Item 2 -> Contact page */
    $contact_page = $site->page('contact');

    /* Last Menu Item -> Archive page */
    $archive_page = $site->page('archive');

    /* Sends all projects to the home template */
    return compact('projects', 'featured_projects', 'archived_projects', 'navables', 'about_page', 'contact_page', 'archive_page');
}


?>

<?php
/*{{{
 * @Author: Kristopher Watts <kristopher.a.watts@gmail.com>
 * @Location: "/site/snippets/project.php"
 *
 * @Uses: Generate project pages
 * @Example: <?php snippet('project') ?>
 *
 *
}}}*/
?>

<article class="project">
    <hr class="project--break" />

    <h1 class="project--header">
        <?php echo $page->title() ?>
    </h1>


    <p class="project--description">
        <?php echo $page->text() ?>
    </p>
    <ul class="project--images">

        <?php foreach( $page->images() as $image ): ?>

            <li class="project--image">
                <img src="<?php echo $image->url(); ?>" alt="<?php echo $image->title(); ?>" />
            </li>

        <?php endforeach ?>

    </ul>

    <hr class="project--break" />
</article>

<?php
/*{{{
 * @Author   : Kristopher Watts <kristopher.a.watts@gmail.com>
 *
 * @Location : "/site/snippets/featured_projects.php"
 *
 * @Uses     : snippet('featured_projects', array(@param => value);
 * @Param    : hover_event, title, src, hover_src
 * @Example  : <?php snippet('featured_projects', array(hover_event => magnify, title => My Project, => src => http : //img-src.com)) ?>
 *
 * @TODO     : Better conditionals, flesh out thumbnails and alt data, etc.
 *
 *
}}}*/
?>

<?php
    if ( $active ){
        $is_active = "project--thumb-active";
    } else{
        $is_active = "project--thumb-not_active";
    }
?>
<!-- Grid Item --!>
<li class="project--item <?php //echo $hover_event ?> ">
    <a href="<?php echo $url; ?>">

        <img class="project--thumb <?php echo $is_active ?> " src="<?php echo $src ?>" alt="<?php echo $title ?>" />

    <?php if ( $hover_source ): ?>
        <img class="project--thumb project--hover-source" src="<?php echo $hover_src ?>" alt="hover <?php echo $title ?>" />
    <?php endif ?>
    </a>
</li>

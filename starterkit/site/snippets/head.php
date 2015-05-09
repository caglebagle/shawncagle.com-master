<!DOCTYPE html>
<?php
/*{{{
 * Author: Kristopher Watts
 * Date: April 17 2015
 * Email: kristopher.a.watts@gmail.com
 *
 * Location: "site/snippets/head.php"
 * Usage: Place at the top of every page
 *
}}}*/
?>

<html lang="en">
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>
        <?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?>
    </title>

    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

    <?php echo css('assets/css/main.css') ?>

</head>
<body>

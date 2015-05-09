<?php
    if ( $active ){
        $is_active = "nav--list--item-active";
    } else{
        $is_active = "nav--list--item-not_active";
    }
?>

<li class="nav--list--item <?php echo $is_active; ?>">
    <a href=" <?php echo $url; ?> "> <?php echo $title; ?> </a>
</li>

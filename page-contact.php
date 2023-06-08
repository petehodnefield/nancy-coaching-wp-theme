<?php

get_header();

while (have_posts()) {
    the_post(); ?>



<div class="container container--narrow page-section">
    <h2>Contact</h2>
    <?php
        $parentPage = wp_get_post_parent_id(get_the_id());


        ?>



    <?php
        $testArray = get_pages(array(
            'child_of' => get_the_ID()
        ));

        if ($parentPage or $testArray) { ?>

    <div class="page-links">
        <h2 class="page-links__title"><a
                href="<?php echo get_permalink($parentPage); ?>"><?php echo get_the_title($parentPage); ?></a></h2>
        <ul class="min-list">
            <?php
                    if ($parentPage) {
                        $findChildrenOf = $parentPage;
                    } else {
                        $findChildrenOf = get_the_ID();
                    }
                    wp_list_pages(array(
                        'title_li' => NULL,
                        'child_of' => $findChildrenOf,
                        'sort_column' => 'menu_order'
                    ));
                    ?>
        </ul>
    </div>
    <?php } ?>

    <div class="generic-content">
        <?php the_content(); ?>
    </div>

</div>

<?php }

get_footer();

?>
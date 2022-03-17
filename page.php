<?php get_header("small"); ?>
    <div id="content-and-sidebar-container">
        <div id="content">
            <h1><?php echo get_the_title(); ?></h1>
            <?php echo the_content(); ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
    <?php get_footer(); ?>
</div>

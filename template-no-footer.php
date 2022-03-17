<?php
/*
 * Template Name: No Footer
 * description: No Footer
 */
include get_template_directory() . "/header-small.php";
?>
<div id="content-and-sidebar-container">
    <div id="content">
        <h1><?php echo get_the_title() ?></h1>
        <?php echo the_content() ?>
    </div>
    <?php get_sidebar()?>
</div>
</div>
<script src="<?php echo $url ?>/scripts.js"></script>
<?php wp_footer()?>
</body>
</html>
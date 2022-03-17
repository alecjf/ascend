<div id="navigation" class="closed">
    <?php dynamic_sidebar("Navigation"); ?>
</div>
<div id="hamburger"
    class="hamburger-closed <?php
    echo get_the_title() === 'Home' ? 'normal' : 'mobile-only';
    echo get_the_title() === 'Contact' ? ' up-top' : ' down-low';
    ?>"
    onclick="toggleNav()">
        <div id="top-line"></div>
        <div id="mid-line"></div>
        <div id="btm-line"></div>
</div>

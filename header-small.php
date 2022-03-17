<?php include "pre-header.php"?>
<div id="small-header" class="<?php echo get_the_title() == 'Contact' ? 'dont-drop' : 'drop' ?>">
    <div id="header-container">
        <div id="banner"></div>
        <a href="../">
            <div id="logo-container">
                <img id="tree" src="<?php echo $url ?>/images/tree.png" />
                <img id="just-logo" src="<?php echo $url ?>/images/just-logo.png" />
            </div>
        </a>
    </div>
    <div id="sticky-phone" class="<?php echo get_the_title() == 'Contact' ? 'no-visible-sticky-phone' : 'shown' ?>">
		<h2>
			<a href="tel:650-362-3398" class="phone">(650) 362-3398</a>
			<a href="./message">MESSAGE US</a>
		</h2>
	</div>

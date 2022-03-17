<?php
global $url;
$url = get_template_directory_uri();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"
		/>
		<title>Ascend - <?php echo get_the_title() ?></title>
        <script>
            function toggleNav() {
                const navOpen = document.getElementsByClassName("open")[0],
                    navClosed = document.getElementsByClassName("closed")[0],
                    nav = navOpen || navClosed,
                    isMobileOnly = Boolean(document.getElementsByClassName("mobile-only")[0]),
                    isUpTop = Boolean(document.getElementsByClassName("up-top")[0]),
                    hamburger = document.getElementById("hamburger"),
                    cn = nav.className === "open" ? "closed" : "open";
                nav.className = cn;
                hamburger.className = "hamburger-" + cn + " shown" + (isMobileOnly ? " mobile-only" : " normal") + (isUpTop ? " up-top" : " down-low");
            }
        </script>
		<?php wp_head()?>
	</head>
	<body>
    <?php include "navigation.php";?>

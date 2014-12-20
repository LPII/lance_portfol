	    <link rel="Stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/footer.css"></link>
	<!--stylesheet conditional-->


<?php

if ( is_home(  ) ) { ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" media="screen" type="text/css" />

<?php
} elseif ( is_page_template( 'about.php' ) ) { ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/about-style.css" media="screen" type="text/css" />


<!--port-->
<?php
} elseif ( is_page_template( 'portfolio.php' ) ) { ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/port-style.css" media="screen" type="text/css" />

<!--port-brand -->
<?php
} elseif ( is_page_template( 'brand.php' ) ) { ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/brand-style.css" media="screen" type="text/css" />

<!--port-print -->
<?php
} elseif ( is_page_template( 'print.php' ) ) { ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/print-style.css" media="screen" type="text/css" />

<!--port-web -->
<?php
} elseif ( is_page_template( 'web.php' ) ) { ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/web-style.css" media="screen" type="text/css" />

<!--port-misc -->
<?php
} elseif ( is_page_template( 'misc.php' ) ) { ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/misc-style.css" media="screen" type="text/css" />



<?php
} elseif ( is_page_template( 'contact.php' ) ) { ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/contact-style.css" media="screen" type="text/css" />



<?php
} else {}?>


	
	
<!--end stylesheet conditional-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"

    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>



    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />



    <?php if (is_search()) { ?>

    <meta name="robots" content="noindex, nofollow" />

    <?php } ?>



    <title>

        Home

    </title>

    <link rel="icon" href="<?php bloginfo('template_directory');?>/images/fav.png" type="image/png">



    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery-1.4.1.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.lwtCountdown-1.0.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/misc.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/iesucks.js"></script>

    <script type="text/javascript">
        function slideSwitch() {

            var $active = $('#slideshow IMG.active');



            if ($active.length == 0) $active = $('#slideshow IMG:last');



            // use this to pull the images in the order they appear in the markup

            var $next = $active.next().length ? $active.next()

            : $('#slideshow IMG:first');



            // uncomment the 3 lines below to pull the images in random order



            // var $sibs  = $active.siblings();

            // var rndNum = Math.floor(Math.random() * $sibs.length );

            // var $next  = $( $sibs[ rndNum ] );




            $active.addClass('last-active');



            $next.css({
                opacity: 0.0
            })

            .addClass('active')

            .animate({
                opacity: 1.0
            }, 1000, function() {

                $active.removeClass('active last-active');

            });

        }



        $(function() {

            setInterval("slideSwitch()", 6800);

        });
    </script>

    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/colorplugin.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/colorscript.js"></script>

<?php get_sidebar('css');?>




<?php wp_head(); ?>  



</head>



<body>

<?php get_sidebar('headnav');?>


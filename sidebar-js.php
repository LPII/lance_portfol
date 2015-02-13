
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>


<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.lightbox.js"></script>


    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/misc.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/iesucks.js"></script>
		

<script type='text/javascript'>
(function($) {
	
	        var i = 0;
			//cache a reference to the button
	        var button = $(".button");
			var colors = [ "#565656","#2c3e50","#c0392b", "#2980b9", "#16a085" ];

			// set initial button color
	        button.css('backgroundColor', colors[0]);

	 		// change color every 30 milliseconds
	        window.setInterval(function() {
			    i = i == colors.length ? 0 : i;
				button.animate({backgroundColor: colors[i]}, 2900);
	            i++;
	        }, 30);

})(jQuery);
</script>

   




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




<!-- Activate the jQuery lightBox plugin -->
<script type="text/javascript">
$(function() {
	// When DOM is ready, attach the lightBox to the proper elements

	$('.gallery a').lightBox();

});
</script>


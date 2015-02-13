$(window).load(function() {
	colors();
});

function colors() {
	var color = '#'+Math.floor(Math.random()*16777215).toString(16);
	$('html').animate({backgroundColor: color}, {duration: 15000, complete: colors});
    //console.log(color);
}
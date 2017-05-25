$( "button:first" ).click(function() {
	$( "p:first" ).fadeToggle( "slow", "linear" );
});
$( "button:last" ).click(function() {
	$( "p:last" ).fadeToggle( "fast", function() {
		$( "#log" ).append( "<div>finished</div>" );
	});
});
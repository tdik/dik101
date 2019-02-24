<?php

	//require __DIR__ . '/src/autoload.php';
	//require __DIR__ . '/src/RandomQuotes.php';
	/*
	require_once './src/RandomQuotes.php';
	$rq = new \RandomQuotes\RandomQuotes();
	echo $rq->generate();
	echo "\n";
	//echo ('Hello World, this is a demo sentence');
	/
	https://www.tutorialspoint.com/articles/how-to-install-and-configure-the-composer-on-ubuntu-16-04
	https://www.youtube.com/results?search_query=how+to+create+composer.json+file+

	*/

	require_once './src/RandomQuotes.php';

	// Creates a new object of RandomQuotes class.
	$rq = new \RandomQuotes\RandomQuotes();

	// Generates a random quote.
	print_r( $rq->generate() );

	echo "\n";

?>
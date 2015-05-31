<?php

function debug ( $arg ) {
	$data = print_r( $arg, true );
	file_put_contents( '/Users/adriaan.scholvinck/PROJECTS/BALT/studiohansraj/studiohansraj/logs/temp.log', $data, FILE_APPEND );

	file_put_contents( '/Users/adriaan.scholvinck/PROJECTS/BALT/studiohansraj/studiohansraj/logs/temp.log', "-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-\n\n\n\n\n\n\n\n\n\n\n\n", FILE_APPEND );
}

<?php
/**
 * Plugin Name: Wdp Plugin demo
 * Description: Display content using a shortcode to insert in a page or post,When activated you will randomly
 *see a lyric from <cite>,Stopping by Woods on a Snowy Evening </cite> on every page.
 * Version: 0.1
 * Author: Anandu Ravikumar
 */
 
 function get_lyric(){

	$lyric="Whose woods these are I think I know
	His house is in the village though   
	He will not see me stopping here   
	To watch his woods fill up with snow   

	My little horse must think it queer   
	To stop without a farmhouse near   
	Between the woods and frozen lake   
	The darkest evening of the year   

	He gives his harness bells a shake   
	To ask if there is some mistake   
	The only other sound’s the sweep   
	Of easy wind and downy flake

	The woods are lovely, dark and deep   
	But I have promises to keep   
	And miles to go before I sleep   
	And miles to go before I sleep";


	$lyric = explode( "\n", $lyric ); //split the lyrics into lines
	return wptexturize( $lyric[ mt_rand( 0, count( $lyric ) - 1 ) ] );  //randomly choose a line.
}

function woods() {
	$chosen = get_lyric(); //a randomly choosen line is stored into this variable.
}
	$lang   = '';
	if ( 'en_' !== substr( get_user_locale(), 0, 3 ) ) {
		$lang = ' lang="en"';
	}
	printf(
		$lang,
	);
	return $chosen;
}

add_shortcode('wdp-plugin-demo','woods');
 

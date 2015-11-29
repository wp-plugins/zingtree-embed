<?php
/*
Plugin Name: Zingtree Embed
Plugin URI: https://wordpress.org/plugins/zingtree-embed/
Description: Embed a Zingtree Tree on your site
Version: 1.0.2
Author: David Artiss
Author URI: http://www.artiss.co.uk
Text Domain: zingtree-embed
Domain Path: /languages
*/

define( 'zingtree_embed_version', '1.0.2' );

/**
* Add meta to plugin details
*
* Add options to plugin meta line
*
* @since	1.0
*
* @param	string  $links	Current links
* @param	string  $file	File in use
* @return   	string		Links, now with settings added
*/

function zingtree_set_plugin_meta( $links, $file ) {

	if ( strpos( $file, 'zingtree-embed.php' ) !== false ) {
		$links = array_merge( $links, array( '<a href="http://wordpress.org/support/plugin/zingtree-embed">' . __( 'Support', 'zingree-embed' ) . '</a>' ) );
		$links = array_merge( $links, array( '<a href="http://www.artiss.co.uk/donate">' . __( 'Donate', 'zingree-embed' ) . '</a>' ) );
	}

	return $links;
}

add_filter( 'plugin_row_meta', 'zingtree_set_plugin_meta', 10, 2 );

/**
* Zingtree shortcode
*
* Shortcode function to output Zingtree code script
*
* @since	1.0
*
* @param	string	$paras		Shortcode parameters
* @param	string	$content	Content between shortcode start and stop - ignored!
* @return	string				Output code
*/

function zingtree_shortcode( $paras = '', $content = '' ) {

	extract( shortcode_atts( array( 'id' => '', 'style' => 'buttons', 'width' => '100%', 'height' => '', 'persist_names' => '', 'persist_node_ids' => '', 'variables' => '', 'values' => '', 'debug' => 'true' ), $paras ) );

	// Check for any missing information

	$error = false;
	if ( $id == '' ) { $error = 'No ID specified'; }
	if ( $style != 'buttons' && $style != 'panels' ) { $error = __( 'The \'style\' should only be \'buttons\' or \'panels\'', 'zingree-embed' ); }

	// If an error occurred output that

	if ( $error !== false ) {

		$content = '<p style="color: #f00">Zingtree Embed ' . __( 'Error', 'zingree-embed' ) . ': ' . $error . '</p>';

	} else {

		// If no errors, output the appropriate Zingtree script

		$url = '//zingtree.com/deploy/';
		if ( $style == 'panels' ) { $url .= 'panels.php'; }

		$newline = "\n";
		$content = $newline;

		if ( $debug == 'true' ) { $content .= '<!-- Zingtree Embed v' . zingtree_embed_version . ' -->' . $newline; }
		$content .= '<iframe class="zingtree" id="zingtree" name="zingtree" ';
		if ( $height != '' ) { $content .= 'height=' . $height . ' '; }
		$content .= 'width="' . $width . '" frameborder="0" seamless src="' . $url . '?deploy_name='.$id.'&deploy_id=' . $id;
		if ( $persist_names != '' ) { $content .= '&persist_names=' . $persist_names; }
		if ( $persist_node_ids != '' ) { $content .= '&persist_node_ids=' . $persist_node_ids; }
		if ( $variables != '' ) { $content .= '&variables=' . $variables; }
		if ( $values != '' ) { $content .= '&values=' . $values; }
		$content .= '"></iframe>' . $newline;
		$content .= '<script type="text/javascript" src="//zingtree.com/js/iframeResizer.js"></script>' . $newline;
		$content .= '<script type="text/javascript">iFrameResize();</script>' . $newline;
		if ( $debug == 'true' ) { $content .= '<!-- ' . __( 'End of Zingtree Embed code', 'zingtree-embed' ) . ' -->' . $newline; }
	}

    return $content;
}

add_shortcode( 'zingtree', 'zingtree_shortcode' );
?>
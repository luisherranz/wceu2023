<?php
/**
 * Plugin Name:       WCEU 2023
 * Version:           1.0.0
 * Requires at least: 6.2
 * Requires PHP:      5.6
 * Description:       Plugin created for the WCEU 2023 workshop: Building Interactive Blocks, a step-by-step workshop
 * Author:            Luis Herranz
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wceu2023
 */

// Define plugin path constants.
define( 'QUIZ_BLOCK_PATH', plugin_dir_path( __FILE__ ) );
define( 'QUIZ_BLOCK_URL', plugin_dir_url( __FILE__ ) );

/**
 * Automatically registers block types by scanning the build/blocks folder.
 *
 * This function searches for JSON files within each subfolder and registers
 * them as block types. It is triggered on WordPress 'init' action.
 */
function wceu2023_auto_register_block_types() {
	register_block_type_from_metadata( QUIZ_BLOCK_PATH . '/build/blocks/quiz' );
	register_block_type_from_metadata( QUIZ_BLOCK_PATH . '/build/blocks/quiz-progress' );
}
add_action( 'init', 'wceu2023_auto_register_block_types' );

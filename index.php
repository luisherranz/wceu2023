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

/**
 * Automatically registers block types by scanning the build/blocks folder.
 *
 * This function searches for JSON files within each subfolder and registers
 * them as block types. It is triggered on WordPress 'init' action.
 */
function wceu2023_auto_register_block_types()
{
		if (file_exists(__DIR__ . '/build/blocks/')) {
				$block_json_files = glob(__DIR__ . '/build/blocks/*/block.json');
				foreach ($block_json_files as $filename) {
						$block_folder = dirname($filename);
						register_block_type($block_folder);
				};
		};
}
add_action('init', 'wceu2023_auto_register_block_types');
<?php
/**
 * ACF Blocks.
 *
 * @package Starter_FSE
 */

class ACFBlocks {

    // Register custom category for ACF Blocks.
    public function __construct() {
        add_filter( 'block_categories', array( $this, 'register_block_categories' ), 10, 1 );
        add_action( 'acf/init', array( $this, 'register_blocks' ) );
    }

    /**
     * Register custom category for ACF Blocks.
     *
     * @param array $categories The block categories.
     * @return array
     */
    public function register_block_categories( $categories ) {
        return array_merge(
            array(
                array(
                    'slug'  => 'chocoland',
                    'title' => __( 'Chocoland', 'chocoland' ),
                ),
            ),
            $categories
        );
    }

    /**
     * Register the blocks.
     */
    public function register_blocks() {
        // Check if function exists.
        if ( function_exists( 'acf_register_block_type' ) ) {

            // Register a Hero Slider block.
            acf_register_block_type(
                array(
                    'name'            => 'hero-slider',
                    'title'           => __( 'Hero Slider' ),
                    'description'     => __( 'A custom hero slider block.' ),
                    'render_template' => 'template-parts/blocks/hero-slider.php',
                    'category'        => 'chocoland',
                    'icon'            => 'admin-comments',
                    'keywords'        => array( 'hero', 'slider' ),
                )
            );
        }
    }
}
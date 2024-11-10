<?php
// The render callback function for the Hero block.

$slides = get_field( 'slide' );
?>


<div class="hero-slider">
    <div class="hero-slider__inner">
        <pre>
            <?php var_dump( $slides ); ?>
        </pre>
    </div>
</div>
<?php
// The render callback function for the Hero block.

$slides = get_field( 'slide' );
?>

<div class="hero-slider swiper alignfull" style="--swiper-navigation-color: var(--wp--preset--color--secondary); --swiper-pagination-color: var(--wp--preset--color--secondary);">
        <?php if ( $slides ) : ?>
            <div class="swiper-wrapper">
                <?php foreach ( $slides as $slide ) : ?>
                    <div class="swiper-slide bg-cover bg-center text-white "  style="background-image:url(<?php echo $slide['background_image']; ?>)">
                        <div class="hero-slider__content w-full lg:w-2/4 bg-opacity-70 bg-gradient-to-r from-primary from-5% to-transparent to-120% py-40 md:py-52 px-14 md:px-24">
                            <?php if ( $slide['title'] ) : ?>
                                <h2 class="text-3xl md:text-4xl lg:text-5xl mb-4"><?php echo esc_html( $slide['title'] ); ?></h2>
                            <?php endif; ?>
                                
                            <?php if ( $slide['text'] ) : ?>
                            <p><?php echo esc_html( $slide['text'] ); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php if ( count( $slides ) > 1 ) : ?>
                <div class="swiper-pagination"></div>
            <?php endif; ?>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        <?php endif; ?>
    </div>
</div>
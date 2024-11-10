<?php
// The render callback function for the Hero block.

$title = get_field( 'title' );
$description = get_field( 'description' );
$exceed_range_limit = get_field( 'exceed_range_limit' );

if ( $exceed_range_limit ) {
    $posts_to_show = get_field( 'custom_posts_to_show' );
} else {
    $posts_to_show = get_field( 'posts_to_show' );
}

// Query for Posts with the given posts_to_show value.
$args = array(
    'posts_per_page' => $posts_to_show,
    'post_type' => 'post',
    'post_status' => 'publish',
);

$news_query = new WP_Query( $args );

?>

<div class="news-list mt-20">
    <div class="container mx-auto">
        <?php if ( $title || $description ) : ?>
            <div class="news-list__header mb-8">
                <?php if ( $title ) : ?>
                    <h2 class="text-5xl mb-4 text-secondary"><?php echo esc_html( $title ); ?></h2>
                <?php endif; ?>
                <?php if ( $description ) : ?>
                    <p><?php echo esc_html( $description ); ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <div class="news-list__posts text-wrap">
            <?php if ( $news_query->have_posts() ) : ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <?php // The loop of posts. ?>
                    <?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>

                        <div class="news-list__post bg-white shadow-lg rounded-md overflow-hidden hover:shadow-2xl transition-all hover:scale-105">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title() ?>" class="w-full">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="news-list__thumbnail">
                                        <?php the_post_thumbnail( 'medium' ); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="news-list__card-content p-8 text-sm">
                                    <h3 class="text-2xl mb-4 text-tertiary"><?php the_title(); ?></h3>
                                    <?php the_excerpt(); ?>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>

            <?php else : ?>
                <p><?php esc_html_e( 'No posts found.', 'chocoland' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
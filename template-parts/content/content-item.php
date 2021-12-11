<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 product-item">
    <div class="product-item-content img-zoom">
        <div class="product-item-content-img">
            <a href="<?php echo esc_url(get_permalink());  ?>"><img src="<?php the_post_thumbnail_url(); ?>"" /></a>
        </div>
        <a href="<?php echo esc_url(get_permalink());  ?>">
            <h4 class="product-item-content-title">
                <?php the_title(); ?>
            </h4>
        </a>

        <div class="product-item-content-desc">
            <?php the_excerpt(); ?>
        </div>

    </div>
</div>
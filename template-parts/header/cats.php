<?php

?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 product-cats-box">
    <div class="product-cats-box-content">
        <?php
        foreach ($args["categories"] as $category) {
        ?>
            <div class="product-cats-box-item img-zoom">
                <a href="<?php echo get_category_link($category->term_id) ?>" class="" title="<?php echo $category->name; ?>"><img class="img-zoom" src="<?php echo get_field('cats_back_image', $category); ?>" /><label><?php echo $category->name; ?></label></a>
            </div>
        <?php
        }
        ?>
    </div>
</div>
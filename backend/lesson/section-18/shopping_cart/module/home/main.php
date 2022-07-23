<?php get_header(); ?>
<?php
$info_phone = get_product_cat(1);
$info_macbook = get_product_cat(2);
$list_phone = get_product_by_cat_id(1);
$list_macbook = get_product_by_cat_id(2);
?>
<style>
    .text-dark {
        color: #000;
    }
</style>
<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <? echo get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <a href="<?php echo $info_phone['url']; ?>" class="text-dark">
                        <h3 class="section-title"><?php echo $info_phone['cat_title'] ?></h3>
                    </a>
                </div>
                <div class="section-detail">
                    <?php if (!empty($list_phone)) { ?>
                        <ul class="list-item clearfix">
                            <?php foreach ($list_phone as $item) { ?>
                                <li>
                                    <a href="<?php echo $item['url'] ?>" title="" class="thumb">
                                        <img src="<?php echo $item['product_thumb'] ?>" alt="">
                                    </a>
                                    <a href="<?php echo $item['url'] ?>" title="" class="title"><?php echo $item['product_title'] ?></a>
                                    <p class="price"><?php echo currency_format($item['price'], 'đ'); ?></p>
                                </li>
                            <? } ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>
            <div class="section list-cat">
                <div class="section-head">
                    <a href="<?php echo $info_macbook['url']; ?>" class="text-dark">
                        <h3 class="section-title"><?php echo $info_macbook['cat_title'] ?></h3>
                    </a>
                </div>
                <div class="section-detail">
                    <?php if (!empty($list_macbook)) { ?>
                        <ul class="list-item clearfix">
                            <?php foreach ($list_macbook as $item) { ?>
                                <li>
                                    <a href="<?php echo $item['url'] ?>" title="" class="thumb">
                                        <img src="<?php echo $item['product_thumb'] ?>" alt="">
                                    </a>
                                    <a href="<?php echo $item['url'] ?>" title="" class="title"><?php echo $item['product_title'] ?></a>
                                    <p class="price"><?php echo currency_format($item['price'], 'đ'); ?></p>
                                </li>
                            <? } ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>
            <div class="section list-cat">
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
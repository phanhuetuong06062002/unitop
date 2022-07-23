<?php get_header(); ?>
<?php
$cat_id = $_GET['cat_id'];
$info_cat = get_product_cat($cat_id);
$list_item = get_product_by_cat_id($cat_id);
?>
<div id="main-content-wp" class="category-product-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title"><?php echo $info_cat['cat_title'] ?></h3>
                    <p class="section-desc">Có <?php echo "<i>".count($list_item)."</i>"; ?> sản phẩm trong mục này</p>
                </div>
                <div class="section-detail">
                    <?php if (!empty($list_item)) { ?>
                        <ul class="list-item clearfix">
                            <?php foreach ($list_item as $item) { ?>
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
        </div>
    </div>
    </>
    <?php get_footer(); ?>
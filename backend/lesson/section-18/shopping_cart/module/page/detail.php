<?php get_header(); ?>
<?php 
$id = (int)$_GET['id'];
$item = get_page_by_id($id);
?>
<div id="main-content-wp" class="detail-news-page">
    <div class="wp-inner clearfix">
        <?php echo get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="detail-news-wp">
                <div class="section-head">
                    <h3 class="section-title"><?php echo $item['page_title'] ?></h3>
                </div>
                <div class="section-detail">
                    <p class="create-date"><?echo $item['created_at']?></p>
                    <div class="content-news">
                       <?php echo $item['page_content']?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
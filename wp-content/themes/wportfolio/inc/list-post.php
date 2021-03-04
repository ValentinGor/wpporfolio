<div class="blog__item">
    <div class="blog__item_head">
        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
    </div>
    <div class="blog__item_info">
        <div class="blog__item_info-date">
            <?php echo get_the_date('j m Y')?>
        </div>
        <div class="blog__item_info-link">
            <?php echo get_the_tag_list('',', ','');?>
        </div>
    </div>
    <div class="blog__item_text">
        <?php if ( carbon_get_post_meta( get_the_ID(), 'articles_except' ) ) { ?>
            <p><?php echo carbon_get_post_meta( get_the_ID(), 'articles_except' ); ?></p>
        <?php } ?>
    </div>
</div>

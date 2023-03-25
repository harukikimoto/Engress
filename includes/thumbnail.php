<?php if (has_post_thumbnail()): ?>
<img src="<?php the_post_thumbnail_url("large"); ?>">
<?php else: ?>
<img src="<?php echo get_template_directory_uri(); ?>/img/sample01.png'" alt="">
<?php endif; ?>

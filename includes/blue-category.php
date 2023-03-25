<?php $category = get_the_category(); ?>
<p class="blue-category">
    <a href="<?php echo get_category_link($category[0] -> term_id); ?>">
        <?php echo $category[0]->name ;?>
    </a>
</p>
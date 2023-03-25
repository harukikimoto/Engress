<?php
global $wp_query;
$pageMax = (int)$wp_query->max_num_pages;// 最後のページ番号
$current = max( 1, get_query_var('paged') ); // 現在のページ番号
$midSize = 2; // 現在のページから前後何ページ分表示するか指定。今回は2ページ。

if ($current === 1 || $current === $pageMax) { // 1ページ目、最後のページのときは前後4ページ分表示
    $midSize = 3;
} elseif ($current === 2 || $current === $pageMax - 1) { // 2ページ目、（最後のページ - 1）ページ目のときは、前後3ページ分表示
    $midSize = 2;
}
the_posts_pagination(array(
    'mid_size'      => $midSize,
    'type'          => 'list',
));?>
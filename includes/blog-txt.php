<p class="blog-txt">
<?php
if ( mb_strlen( $post->post_content, 'UTF-8' ) > 100 ) {
$content = str_replace( array('\r\n', '\r', '\n'), '', mb_substr( strip_tags( $post->post_content ), 0, 100, 'UTF-8' ) );
echo $content . '…';
} else {
echo str_replace( array('\r\n', '\r', '\n'), '', strip_tags( $post->post_content ) );
}
?>
</p>
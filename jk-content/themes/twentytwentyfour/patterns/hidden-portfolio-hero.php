<?php
/**
 * Title: Portfolio hero
 * Slug: twentytwentyfour/hidden-portfolio-hero
 * Inserter: no
 */
?>

<!-- jk:spacer {"height":"var:preset|spacing|50","style":{"layout":{}}} -->
<div style="height:var(--jk--preset--spacing--50)" aria-hidden="true" class="jk-block-spacer"></div>
<!-- /jk:spacer -->

<!-- jk:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="jk-block-group alignwide">
	<!-- jk:heading {"level":1,"align":"wide","style":{"typography":{"lineHeight":"1.2"}},"fontSize":"xx-large"} -->
	<h1 class="jk-block-heading alignwide has-xx-large-font-size" style="line-height:1.2"><?php echo jk_kses_post( __( 'I’m <em>Leia Acosta</em>, a passionate photographer who finds inspiration in capturing the fleeting beauty of life.', 'twentytwentyfour' ) ); ?></h1>
	<!-- /jk:heading -->
</div>
<!-- /jk:group -->

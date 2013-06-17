<?php
/**
 * @package Toolbox
 */
?>
<!-- content -->

<div class="card">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<h1><?php the_title(); ?></h1>
	
	<?php the_post_thumbnail(); ?>
	
	<?php the_content(); ?>

</article><!-- #post-<?php the_ID(); ?> -->
</div>
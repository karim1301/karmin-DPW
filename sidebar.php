<div id="sidebar">
	<?php if (is_home()) { ?>
		<div id="secondcol">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>
			<?php endif; ?>
		</div> <!-- end #secondcol -->
	<?php }; ?>

</div> <!-- end sidebar -->
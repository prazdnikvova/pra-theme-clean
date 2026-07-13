<?php
/**
 * Previous / next post links under a single post.
 */
the_post_navigation(
	array(
		'prev_text' => '<span class="meta-nav">&larr;</span> %title',
		'next_text' => '%title <span class="meta-nav">&rarr;</span>',
	)
);

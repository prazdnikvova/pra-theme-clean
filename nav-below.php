<?php
/**
 * Older / newer pagination for post lists (index, archive, search).
 */
the_posts_navigation(
	array(
		/* translators: %s: arrow */
		'prev_text' => sprintf( esc_html__( '%s older', 'pra-theme-clean' ), '<span class="meta-nav">&larr;</span>' ),
		/* translators: %s: arrow */
		'next_text' => sprintf( esc_html__( 'newer %s', 'pra-theme-clean' ), '<span class="meta-nav">&rarr;</span>' ),
	)
);

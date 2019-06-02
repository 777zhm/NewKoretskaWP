<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; else : ?>
			<h2><?php esc_html_e( '404', 'uber-partners' ); ?></h2>
				<p><?php esc_html_e( 'Sorry! No content found.', 'uber-partners' ); ?></p>
			<?php endif; ?>
		</main>
	</div>
<?php get_footer(); ?>
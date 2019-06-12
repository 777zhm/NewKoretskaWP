<?php /* Template Name: Service Item page ukr */ ?>
<?php get_header(); ?>

<div id="primary" class="content-area service_item_section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="section_heading"><?php the_title( ); ?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 service_item_block">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
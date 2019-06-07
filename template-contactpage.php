<?php /* Template Name: Contacts page ukr */ ?>
<?php get_header(); ?>

<section>
<div class="contact_form_section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="sectiion_heading">Зворотній зв’язок</h2>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-6">
				 <?php echo do_shortcode( '[contact-form-7 id="29" title="main_contact_form"]' ); ?>
			</div>
		</div>
	</div>
</div>
</section>

<?php get_footer(); ?>
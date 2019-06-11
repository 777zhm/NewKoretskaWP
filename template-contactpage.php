<?php /* Template Name: Contact page */ ?>
<?php get_header(); ?>

<section>
<div class="contact_form_section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7 col-sm-10 contact_form_box">
				<?php if (get_locale() == 'uk'){ ?>
					<?php echo do_shortcode( '[contact-form-7 id="29" title="main_contact_form_ua"]' ); ?>
					<p class="form_hint">Ви також можете надіслати нам листа на пошту <a class="form_hint_link" href="mailto:<?php the_field('admin_email', 'theme_settings'); ?>"><?php the_field('admin_email', 'theme_settings'); ?></a></p>
				<?php }elseif (get_locale() == 'ru_RU'){ ?>
					<?php echo do_shortcode( '[contact-form-7 id="117" title="main_contact_form_ru"]' ); ?>
					<p class="form_hint">Ви также можете отправить письмо нам на почту <a class="form_hint_link" href="mailto:<?php the_field('admin_email', 'theme_settings'); ?>"><?php the_field('admin_email', 'theme_settings'); ?></a></p>
				<?php } ?>

			</div>
		</div>
	</div>
</div>
</section>

<?php get_footer(); ?>
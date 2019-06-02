</main>

<footer class="footer" style="background-image: url(<?php assets_url('img/footer_bg.jpg') ?>);">
	
		<div class="container-fluid">
			<div class="row contacts_row">
				<div class="col-md-3 contacts_item">
					<div class="contacts_icon">
						<img src="<?php assets_url('img/telephone.png') ?>" alt="telephone">
					</div>
					<div class="contacts_link">
						<a href="tel:+380442214047" class="contacts_link">+38 (044) 221 40 47</a>
						<br>
						<a href="tel:+380671234047" class="contacts_link">+38 (067) 123 40 47</a>
					</div>
				</div>
				<div class="col-md-3 contacts_item">
					<div class="contacts_icon">
						<img src="<?php assets_url('img/email.png') ?>" alt="email">
					</div>
					<div class="contacts_link">
						<a href="mailto:info@koretska-legal.com" class="contacts_link">info@koretska-legal.com</a>
					</div>
				</div>
				<div class="col-md-3 contacts_item">
					<div class="contacts_icon">
						<img src="<?php assets_url('img/facebook.png') ?>" alt="facebook">
					</div>
					<div class="contacts_link">
						<a href="https://www.facebook.com/" class="contacts_link">Facebook</a>
					</div>
				</div>
				<div class="col-md-3 contacts_item">
					<div class="contacts_icon">
						<img src="<?php assets_url('img/location.png') ?>" alt="location">
					</div>
					<div class="contacts_link">
						<a href="https://www.google.com.ua/maps/place/Vector/@50.4476284,30.5070038,16.83z/data=!4m8!1m2!2m1!1z0LwuINCa0LjRl9CyLCDQstGD0LsuINCRLiDQpdC80LXQu9GM0L3QuNGG0YzQutC-0LPQviwgNTIg0JHQpiAi0JLQtdC60YLQvtGAIg!3m4!1s0x40d4ce5f34e48cbd:0xa6799624b9e00686!8m2!3d50.4484033!4d30.5064369?hl=ru" target="blank" class="contacts_link">м. Київ, вул. Б. Хмельницького, 52 <br> БЦ "Vector", оф. 414 </a>
					</div>
				</div>			
			</div>
			<div class="row justify-content-center">
				<div class="logotype">
					<?php if ( has_custom_logo() ) : the_custom_logo(); endif; ?>	
				</div>
			</div>
		</div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
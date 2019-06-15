<section>
<div class="aboutus_wiki_section">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="wiki_item_0">
					<p><span class="icon_box"><img class="about_icon" src="<?php assets_url('img/svg/man.svg') ?>" alt="icon"></span><strong><?php the_field('strong_1');?></strong><?php the_field('strong_1_end');?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-9 col-md-12">
				<div class="wiki_item_main_block">
					<div class="wiki_item_1">
					<?php if( have_rows('lists_1') ): ?>
						<ul>
						<?php while( have_rows('lists_1') ): the_row(); ?>
						<li><?php the_sub_field('listitem');?></li>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
					</div>
					<div class="wiki_item_2">
						<h4><span class="icon_box"><img class="about_icon" src="<?php assets_url('img/svg/blank.svg') ?>" alt="icon"></span><strong><?php the_field('strong_2');?></strong></h4>	
						<?php if( have_rows('lists_2') ): ?>
							<ul>
							<?php while( have_rows('lists_2') ): the_row(); ?>
							<li><?php the_sub_field('listitem');?></li>
							<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
					<div class="wiki_item_3">
						<h4><span class="icon_box"><img class="about_icon" src="<?php assets_url('img/svg/book_ua.svg') ?>" alt="icon"></span><strong><?php the_field('strong_3');?></strong></h4>
						<?php if( have_rows('lists_3') ): ?>
							<ul>
							<?php while( have_rows('lists_3') ): the_row(); ?>
							<li><?php the_sub_field('listitem');?></li>
							<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
				</div>
				<div class="wiki_item_4">
					<p><span class="icon_box"><img class="about_icon" src="<?php assets_url('img/svg/computer.svg') ?>" alt="icon"></span><strong><?php the_field('strong_4');?></strong>&nbsp;<?php the_field('strong_4_end');?></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-12">
				<div class="wiki_item_5">
					<h4><?php the_field('strong_5');?></h4>
					
					<?php if( have_rows('lists_5') ): ?>
						<ul>
						<?php while( have_rows('lists_5') ): the_row(); ?>
						<li><?php the_sub_field('listitem');?></li>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
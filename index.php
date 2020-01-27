<?php get_header(); ?>

<body>
	<div class="container-fluid">
	<!-- the first section -->
	<div class="row no-gutters">
		<div class="col-sm-12 col-md-6 relative">
			<img class="img-fluid" src="<?php the_field('img_top_1'); ?>" alt="">
			<div class="col-8 offset-lg-3 absolute-left">
				<h3 class="hidden-title"><?php the_field('visible_title_img_top_1'); ?></h3>
				<div class="hidden">
					<h3><?php the_field('title_text_img_top_1'); ?></h3>
					<p><?php the_field('text_img_top_1'); ?></p>
					<p>
						<a href="<?php the_field('link_text_img_top_1'); ?>"><?php the_field('title_link_text_img_top_2'); ?></a>
						<img src="<?php the_field('title_icon'); ?>" alt=""/>
					</p>
				</div>
			</div>
			<button type="button" class="btn btn-left offset-md-1"><img class="color" src="<?php the_field('title_icon'); ?>" alt=""/></button>
		</div>
		<div class="col-sm-12 col-md-6 relative">
			<img class="img-fluid" src="<?php the_field('img_top_2'); ?>" alt="">
			<div class="col-8 offset-lg-1 absolute-right">
				<h3 class="hidden-title"><?php the_field('visible_title_img_top_2'); ?></h3>
				<div class="hidden">
					<h3><?php the_field('title_text_img_top_2'); ?></h3>
					<p><?php the_field('text_img_top_2'); ?></p>
					<p>
						<a href="<?php the_field('link_text_img_top_2'); ?>"><?php the_field('title_link_text_img_top_2'); ?></a>
						<img class="color" src="<?php the_field('title_icon'); ?>" alt=""/>
					</p>
				</div>
			</div>
			<button type="button" class="btn btn-right"><img src="<?php the_field('title_icon'); ?>" alt=""/></button>
		</div>
	</div>
	<!-- cookies -->
	<div class="row no-gutters" id="cookiesRow">
		<div class="col-12 d-flex justify-content-end" id="cookies">
			<p>
			<?php the_field('cookie_text'); ?>
				<a href="<?php the_field('cookies_link'); ?>"><?php the_field('link_cookies_title'); ?></a>
				<button type="submit" id="submit"><p><?php the_field('cookies_button'); ?></p></button>
			</p>
		</div>
	</div>
	<!-- the second section -->
		<div class="row secondSection no-gutters">
			<div class="col-sm-12 col-md-4 col-lg-6 leftBlock">
				<div class="col-sm-12 col-lg-10 blackBlock left-align">
					<p class=" offset-md-4 col-md-5"><?php the_field('black_block'); ?></p>
				</div>
				<div class="d-block d-sm-none col-sm-12 p-0">
					<img class="img-fluid" src="<?php the_field('central_img'); ?>" alt="">
				</div>
				<div class="col-md-12 col-lg-7 offset-lg-3 firstParagraph">
						<h2><?php the_field('title_paragraph_1'); ?></h2>
						<p><?php the_field('paragraph_1'); ?></p>
						<a href="<?php the_field('link_magasin'); ?>"><?php the_field('le_magasin'); ?><img class="icon" src="<?php the_field('title_icon'); ?>" alt=""/></a>
				</div>
			</div>
			<div class="d-none d-md-block col-md-8 col-lg-6 offset-md-4 offset-lg-0 centralImg">
				<div class="col-lg-8 offset-lg-1 centralImg">
					<img class="img-fluid" src="<?php the_field('central_img'); ?>" alt="">
				</div>
			</div>
		</div>
	<!-- the third section -->
		<div class="row no-gutters">
			<div class="col-12 d-flex align-items-center justify-content-center">
				<div class="col-md-10 col-lg-4 thirdSection">
					<a href="#"><img class="logo" src="<?php the_field('logo'); ?>" alt="logo"></a>
					<p><?php the_field('paragraph_2'); ?></p>
					<p>
						<a href="<?php the_field('link_services_archi'); ?>">
						<?php the_field('services_darchi_d’interieur'); ?>
						<img class="icon" src="<?php the_field('title_icon'); ?>">
						</a>
					</p>
				</div>
			</div>
		</div>
	<!-- the last section -->
	<div class="row no-gutters" id="lastSection">
		<div class="col-md-12 col-lg-6">
			<img class="img-fluid" src="<?php the_field('img_bottom'); ?>" alt="">
		</div>
		<div class="col-md-12 col-lg-6 d-flex align-items-center thirdParagraph">
			<div class="col-md-10 col-lg-8 offset-1">
				<h2><?php the_field('title_paragraph_3'); ?></h2>
				<p><?php the_field('paragraph_3'); ?></p>
				<a href="<?php the_field('link_tapisserie'); ?>"><?php the_field('tapisserie_dameublement'); ?>
				<img class="icon" src="<?php the_field('title_icon'); ?>" ?>
			</a>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
<?php get_header(); ?>

<main class="l-main">

	<section class="p-contact l-section">
		<div class="p-contact__inner l-inner">
			<div class="p-contact__wrapper">
				<div class="c-head">
					<h2><?php the_title(); ?></h2>
				</div>
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : ?>
						<?php the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<!-- /.p-contact -->

</main>

<?php get_footer(); ?>
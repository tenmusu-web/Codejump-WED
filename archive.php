<?php get_header(); ?>

<main class="l-main">

	<section class="p-archive l-section">
		<div class="p-archive__inner l-inner">
			<div class="p-archive__wrapper">
				<div class="c-head">
					<h2>News & Press</h2>
				</div>
				<div class="p-archive__body">
					<ul class="p-archive__tabs">
						<li class="p-archive__tab is-active">ニュース</li>
						<li class="p-archive__tab">プレスリリース</li>
					</ul>
					<ul class="p-archive__menus">
						<li class="p-archive__items is-active">
							<?php if (have_posts()) : ?>
								<?php while (have_posts()) : ?>
									<?php the_post(); ?>
									<a href="<?php the_permalink(); ?>" class="p-archive__item">
										<div class="p-archive__meta">
											<time class="p-archive__time" datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time>
											<div class="p-archive__tag">NEWS</div>
										</div>
										<div class="p-archive__title"><?php the_title(); ?></div>
									</a>
								<?php endwhile; ?>
							<?php endif; ?>
						</li>
						<li class="p-archive__items">
							<?php
							$the_query = new WP_Query(
								array(
									'post_type'      => 'post', //投稿のタイプ
									'category_name'   => 'press', //カテゴリースラッグ
									'posts_per_page' => 5 //呼び込む記事数

								)
							);
			
							?>
							<?php if ($the_query->have_posts()) : ?>
								<?php while ($the_query->have_posts()) : ?>
									<?php $the_query->the_post(); ?>
									<a href="<?php the_permalink(); ?>" class="p-archive__item">
										<div class="p-archive__meta">
											<time class="p-archive__time" datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time>
											<div class="p-archive__tag">PRESS</div>
										</div>
										<div class="p-archive__title"><?php the_title(); ?></div>
									</a> <?php endwhile; ?>
							<?php endif; ?>
							<?php wp_reset_postdata(); ?>
						</li>


					</ul>


				</div>
			</div>
		</div>
	</section>
	<!-- /.archive -->

</main>

<?php get_footer(); ?>
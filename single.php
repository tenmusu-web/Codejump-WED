<?php get_header(); ?>

	<main class="l-main">

		<section class="p-single l-section">
			<div class="p-single__inner l-inner">
				<div class="p-single__wrapper">
					<div class="p-single__head">
						<h2><?php the_title(); ?></h2>
					</div>
					<div class="p-single__body">
						<div class="p-single__tag"><?php my_the_post_category(false); //リンクありのときはtrue,なしはfalse ?></div>
						<div class="p-single__meta">
							<time datetime="<?php the_time('c'); ?>">公開日：<?php the_time('Y.m.d'); ?></time>
						</div>
						<div class="p-single__thumbnail">
							<?php if(has_post_thumbnail()) : //アイキャッチ画像が設定されていれば表示 ?>
							<?php the_post_thumbnail(); ?>
							<?php else: // なければnoimge画像をデフォルトで表示 ?>
							<img src="assets/img/single/single-news.jpg" alt="">
							<?php endif; ?>
						</div>
						<div class="p-single__content">
							<?php the_content(); ?>
						</div>
					</div>


					<div class="p-single__more">
					<?php 
					$next_post = get_next_post();
					$prev_post = get_previous_post();
					if ($next_post)://次の投稿がある場合
					?>
						<div class="p-single__next">
							<a href="<?php echo get_permalink($next_post->ID); ?>">&lt; NEXT</a>
						</div>
					<?php 
					endif;
					if ($prev_post)://前の投稿がある場合
					?>
						<div class="p-single__prev">
							<a href="<?php echo get_permalink($prev_post->ID); ?>">PREV &gt;</a>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
		<!-- /.p-single -->
		
	</main>

<?php get_footer(); ?>
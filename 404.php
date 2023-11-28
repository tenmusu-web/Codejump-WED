<?php get_header(); ?>

	<main class="l-main">

		<section class="p-contact l-section">
			<div class="p-contact__inner l-inner">
				<div class="p-contact__wrapper">
					<div class="c-head">
						<h2>404 Not Found</h2>
					</div>
					<div class="p-contact__body">
						<p class="p-contact__message">大変申し訳ありませんが、お探しのページがございません。
							<br>こちらから<a href="<?php echo esc_url( home_url() ); ?>">トップページ</a>へお戻りいただけます。</p>
					</div>
				</div>
			</div>
		</section>
		<!-- /.p-contact -->
		
	</main>

<?php get_footer(); ?>
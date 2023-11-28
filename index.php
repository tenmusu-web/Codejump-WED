<?php get_header(); ?>

<main class="l-main">

	<div class="p-mainVisual"></div>
	<!-- /.p-mainVisual -->

	<section id="news" class="p-news">
		<div class="p-news__inner l-inner">
			<div class="p-news__wrapper">
				<div class="p-news__head">
					<div class="c-title">
						<h2>NEWS</h2>
						<p>ニュース</p>
					</div>
				</div>
				<div class="p-news__body">
					<?php $the_query = new WP_Query( // 同じタグの記事を３記事読み込むパターン
						array(
							'post_type'      => 'post', //投稿のタイプ
							'posts_per_page' => 3 //呼び込む記事数
						)
					); ?>
					<?php if ($the_query->have_posts()) : ?>
						<?php while ($the_query->have_posts()) : ?>
							<?php $the_query->the_post(); ?>
							<a class="p-news__entry" href="<?php the_permalink(); ?>">
								<div class="p-news__meta">
									<time class="p-news__time" datetime="<?php the_time('c') ?>"><?php the_time('Y.m.d') ?></time>
									<div class="p-news__tag"><?php my_the_post_category(false); ?></div>
								</div>
								<div class="p-news__title">
									<p><?php the_title(); ?></p>
								</div>
							</a>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</section>
	<!-- /.p-news -->

	<section id="about" class="p-about">
		<div class="p-about__inner l-inner">
			<div class="p-about__wrapper">
				<div class="p-about__image">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/top/about.jpg" width="760" height="400" loading="lazy">
				</div>
				<div class="p-about__wrap">
					<div class="p-about__head">
						<div class="c-title">
							<h2>ABOUT</h2>
							<p>私たちについて</p>
						</div>
					</div>
					<div class="p-about__body">
						<p class="p-about__content">ウェブエンターテイメントデザイン（WED）は、2021年に設立され、東京・渋谷に拠点を置くクリエイティブカンパニーです。我々はWeb制作・マーケティング、インターネットメディア、プロモーション企画・制作、ソーシャル企画・運営など多岐にわたるサービスを提供しています。てんむすを中心に、革新的なデジタル体験を生み出し、お客様のビジネスを成功へと導くことを使命としています。一緒に未来のデジタルエンターテイメントを築き上げましょう。</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /.p-about -->

	<section id="business" class="p-business">
		<div class="p-business__inner l-inner">
			<div class="p-business__wrapper">
				<div class="p-business__head">
					<div class="c-title">
						<h2>BUSINESS</h2>
						<p>事業内容</p>
					</div>
				</div>
				<div class="p-business__body">
					<ul class="p-business__cards">
						<li class="c-card">
							<div class="c-card__head">
								<p>Web制作・マーケティング</p>
							</div>
							<div class="c-card__body">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/top/business1.jpg" width="368" height="232" loading="lazy" alt="">
							</div>
						</li>
						<li class="c-card">
							<div class="c-card__head">
								<p>インターネットメディア事業</p>
							</div>
							<div class="c-card__body">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/top/business2.jpg" width="368" height="232" loading="lazy" alt="">
							</div>
						</li>
					</ul>
					<ul class="p-business__cards">
						<li class="c-card">
							<div class="c-card__head">
								<p>プロモーション企画・制作</p>
							</div>
							<div class="c-card__body">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/top/business3.jpg" width="368" height="232" loading="lazy" alt="">
							</div>
						</li>
						<li class="c-card">
							<div class="c-card__head">
								<p>ソーシャル企画・運営</p>
							</div>
							<div class="c-card__body">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/top/business4.jpg" width="368" height="232" loading="lazy" alt="">
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- /.p-business -->

	<section id="company" class="p-company">
		<div class="p-company__inner l-inner">
			<div class="p-company__wrapper">
				<div class="p-company__wrap">
					<div class="p-company__head">
						<div class="c-title">
							<h2>COMPANY</h2>
							<p>会社情報</p>
						</div>
					</div>
					<div class="p-company__body">
						<dl>
							<div class="p-company__row">
								<dt>会社情報</dt>
								<dd>ウェブエンターテイメントデザイン株式会社</dd>
							</div>
							<div class="p-company__row">
								<dt>所在地</dt>
								<dd>東京都渋谷区桜丘町99-9 West Building 3F</dd>
							</div>
							<div class="p-company__row">
								<dt>代表</dt>
								<dd>てんむす</dd>
							</div>
							<div class="p-company__row">
								<dt>設立</dt>
								<dd>2021年1月1日</dd>
							</div>
							<div class="p-company__row">
								<dt>資本金</dt>
								<dd>3,000,000円</dd>
							</div>
							<div class="p-company__row">
								<dt>事業内容</dt>
								<div class="p-company__definition">
									<dd>Web制作・マーケティング</dd>
									<dd>インターネットメディア事業</dd>
									<dd>プロモーション企画・制作</dd>
									<dd>ソーシャル企画・運営</dd>
								</div>
							</div>
						</dl>
					</div>
				</div>
				<div class="p-company__image">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/top/company.jpg" width="547" height="400" loading="lazy" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- /.p-company -->

</main>

<?php get_footer(); ?>
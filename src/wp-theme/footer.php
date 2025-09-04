<?php get_template_part('parts/p-top-sns'); ?>

<footer class="footer">
	<div class="footer__inner inner">
		<div class="footer__container">
			<div class="footer__logo">
				<a href="<?php echo esc_url(home_url('/')); ?>">
					<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/logo-footer.svg")); ?>" alt="kirara" />
				</a>

			</div>
			<ul class="footer__nav">
				<li class="footer__item">
					<a class="footer__item-link" href="">トップページ</a>
				</li>
				<li class="footer__item">
					<a class="footer__item-link" href="">kid’sキララの特徴</a>
				</li>
				<li class="footer__item">
					<a class="footer__item-link" href="">ご利用案内</a>
				</li>
				<li class="footer__item">
					<a class="footer__item-link" href="">お問い合わせ</a>
				</li>
				<li class="footer__item">
					<a class="footer__item-link" href="">アクセス</a>
				</li>

			</ul>

		</div>
	</div>
	<!-- <div class="footer__copyright"> -->
	<!-- <small>
    Copyright(c)&nbsp;2023&nbsp;All&nbsp;Rights&nbsp;Reserved.
    </small> -->
	<!-- </div> -->
</footer>

<?php wp_footer(); ?>
</div>

</body>

</html>
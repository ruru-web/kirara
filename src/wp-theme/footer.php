<?php get_template_part('parts/p-top-sns'); ?>

<footer class="footer">
	<div class="footer__inner">
		<div class="footer__container">
			<div class="footer__logo">
				<a href="<?php echo esc_url(home_url('/')); ?>">
					<img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/logo-footer.svg")); ?>" alt="キララ" />
				</a>

			</div>
			<ul class="footer__nav">
				<li class="footer__item">
					<a class="footer__item-link" href="#top">トップページ</a>
				</li>
				<li class="footer__item">
					<a class="footer__item-link" href="#feature">kid’sキララの特徴</a>
				</li>
				<li class="footer__item">
					<a class="footer__item-link" href="#guide">ご利用案内</a>
				</li>
				<li class="footer__item">
					<a class="footer__item-link" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a>
				</li>
				<li class="footer__item">
					<a class="footer__item-link" href="#access">アクセス</a>
				</li>

			</ul>

		</div>
	</div>
</footer>

<?php wp_footer(); ?>


</body>

</html>
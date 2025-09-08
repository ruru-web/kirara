<?php get_header(); ?>



<main>

	<section class="top-mv top-mv-layout" id="top">
		<div class="top-mv__container">
			<picture>
				<!-- PCサイズ（768px以上） -->
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/mv.png"
					media="(min-width: 768px)">

				<!-- SPサイズ（768px未満） -->
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/mv-sp.png" alt="ランドセルを背負って走る子ども">
			</picture>

			<h2 class="top-mv__title">
				お子様が自分で<br class="u-mobile">踏み出す<br class="u-desktop">
				「一歩」の<br class="u-mobile">お手伝いをします
			</h2>
		</div>
	</section>

	<section class="top-worries top-worries-layout">
		<div class="top-worries__inner inner">
			<div class="top-worries__title section-title">
				お子様にこんな不安は<br class="u-mobile">ありませんか？
			</div>



			<div class="top-worries__image">
				<picture>
					<!-- PCサイズ（768px以上） -->
					<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/worries.png"
						media="(min-width: 768px)">

					<!-- SPサイズ（768px未満） -->
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/worries-sp.png" alt="不安の症例8つ">
				</picture>

			</div>
		</div>

	</section>


	<section class="top-about top-about-layout">
		<div class="top-about__bottom">
			<div class="top-about__inner inner">
				<h3 class="top-about__title section-title">
					放課後等デイサービスって<br class="u-mobile">どんなところ？
				</h3>
				<div class="top-about__container">
					<div class="top-about__wrap">
						<p class="top-about__text">
							発達・成長に心配のあるお子様や、
							障がいなどの困難を持っている
							お子様が放課後や夏休みなどの
							長期休暇中に通い、継続的かつ
							専門的な支援を受けられる場所です。
							関連機関とも連携しながら、日常
							生活における自立を促すとともに、
							放課後の居場所づくり。そして
							ご家族のサポートを行います。
						</p>
						<div class="top-about__image">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/common/about.jpg' ); ?>"
								alt="遊んでいる子どもたち">
						</div>
					</div>

					<p class="top-about__support-text">
						令和6年度報酬改定において、「児童発達支援」「放課後等デイサービス」での支援で、<br class="u-desktop">
						「5領域」全て含めた総合的な支援を提供することが運営基準に明記されています。
					</p>

					<ul class="top-about__support-list">
						<?php
						// 全ての画像アイテムを一つの配列にまとめる
						$support_items = [
							['src' => 'about1.png', 'alt' => '健康・生活'],
							['src' => 'about2.png', 'alt' => '運動・感覚'],
							['src' => 'about3.png', 'alt' => '認知・行動'],
							['src' => 'about4.png', 'alt' => '言語・コミュニケーション'],
							['src' => 'about5.png', 'alt' => '人間関係・社会性'],
						];
	
						// ループで画像を出力
						foreach ($support_items as $index => $item) :
						?>
						<li class="top-about__support-item top-about__support-item--<?php echo $index + 1; ?>">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/common/' . $item['src']); ?>"
								alt="<?php echo esc_attr($item['alt']); ?>">
						</li>
						<?php endforeach; ?>
					</ul>


					<p class="top-about__note">
						kid’sキララではその基本5領域に加えて<br>
						3つのサービスをご提供します。
					</p>
				</div>
			</div>
		</div>

	</section>

	<section class="top-features top-features-layout" id="feature">
		<div class="top-features__inner inner">
			<h3 class="top-features__title section-title">
				<!-- kid’sキララ3つの特徴 -->
				kid’sキララ3つの特徴
			</h3>
			<p class="top-features__text">
				kid’sキララは、食育と<br class="u-mobile">スキルアップに力を入れる<br>
				県内でも珍しい放課後等<br class="u-mobile">デイサービスです。
			</p>

			<!-- 吹き出し -->
			<div class="top-features__bubble">
				<div class="top-features__bubble-item top-features__bubble--learn  js-bubble-animation">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/common/features1.png' ); ?>"
						alt="学ぶ" class="js-fade-slide">
				</div>
				<div class="top-features__bubble-item top-features__bubble--eat  js-bubble-animation">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/common/features2.png' ); ?>"
						alt="食べる" class="js-fade-slide">
				</div>
				<div class="top-features__bubble-item top-features__bubble--use  js-bubble-animation">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/common/features3.png' ); ?>"
						alt="活かす" class="js-fade-slide">
				</div>

			</div>

			<!-- 星の画像 -->
			<div class="top-features__image js-floating">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/common/star.png' ); ?>"
					alt="星のキャラクター">

			</div>

			<div class="top-features__cards features-cards">
				<!-- カード1枚目 -->
				<div class="features-cards__item features-card">
					<div class="features-card__image">
						<img
							src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/common/features-card1.jpg' ); ?>"
							alt="地図を囲んで勉強している子どもたち">
					</div>
					<div class="features-card__wrap">
						<div class="features-card__number">1</div>
						<div class="features-card__title-wrap">

							<div class="features-card__title">
								ソーシャルスキル<br>
								トレーニング
							</div>
						</div>
					</div>
					<div class="features-card__text">
						こども達が社会生活を送る上で必要な
						スキルを総合的に高めることを目的と
						したトレーニングです。<br>
						「順番を守る」「あいさつ」「お願いを
						伝える」などをイラストを使った遊びや
						ロールプレイで学んでいきます。<br>
						「出来ること」を増やして、より生活
						しやすくなるようサポートします。
					</div>
				</div>

				<!-- カード2枚目 -->
				<div class="features-cards__item features-card">
					<div class="features-card__image">
						<img
							src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/common/features-card2.jpg' ); ?>"
							alt="お弁当箱の前で手を合わせている子どもたち">
					</div>
					<div class="features-card__wrap">
						<div class="features-card__number">2</div>
						<div class="features-card__title-wrap">
							<div class="features-card__title features-card__title--center">
								食育
							</div>

						</div>
					</div>
					<div class="features-card__text">
						週末や夏休みなどの長期休暇時に、
						『手作り給食』を提供します。<br>
						家事と仕事に忙しいご家族の負担を
						軽減し、安心で栄養バランスの取れ
						たお食事で、食べることへの楽しみ
						も感じてもらえます。
					</div>
				</div>

				<!-- カード3枚目 -->
				<div class="features-cards__item features-card">
					<div class="features-card__image">
						<img
							src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/common/features-card3.jpg' ); ?>"
							alt="パソコンで学習する女の子">
					</div>
					<div class="features-card__wrap">
						<div class="features-card__number">3</div>
						<div class="features-card__title-wrap">

							<div class="features-card__title">
								デジタルスキル
							</div>
						</div>
					</div>
					<div class="features-card__text">
						将来必ず役に立つパソコン基本操作の
						学習をいたします。<br>
						一人一人に寄り添ってエクセル、ワード、
						パワーポイントや人気のデザインソフト
						であるCanvaなども取り入れ、デジタ
						ルスキルを楽しみながら習得してもらい、
						自立を目指してもらうことも「kid’s
						キララ」の目的としています。
					</div>
				</div>
			</div>

			<div class=" top-features__button-wrap">
				<a href="#" class="button">
					<p class="button__text">詳しく見る</p>
				</a>
			</div>
		</div>
	</section>

	<section class="top-guide top-guide-layout" id="guide">
		<div class="top-guide__bottom">
			<div class="top-guide__inner inner">
				<h3 class="top-guide__title section-title">
					ご利用案内
				</h3>


				<ul class="top-guide__items guide-list">
					<li class="guide-list__item guide-item">
						<h4 class="guide-item__title">ご利用方法</h4>
						<p class="guide-item__text">
							テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト

						</p>

					</li>
					<li class="guide-list__item guide-item">
						<h4 class="guide-item__title">料金</h4>
						<p class="guide-item__text">
							テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
						</p>

					</li>
					<li class="guide-list__item guide-item">
						<h4 class="guide-item__title">入所の流れ</h4>
						<p class="guide-item__text">
							テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
						</p>

					</li>
				</ul>

			</div>

		</div>
	</section>

	<section class="top-facility top-facility-layout">
		<div class="top-facility__inner inner">
			<div class="top-facility__info">
				<h3 class="top-facility__title section-title">
					施設案内
				</h3>

				<div class="top-facility__list">
					<dl class="top-facility__term">
						<dt>設置・<br class="u-mobile">運営団体</dt>
						<dd>合同会社 kid’s キララ</dd>
					</dl>
					<dl class="top-facility__term">
						<dt>所在地</dt>
						<dd>〒880-2104 <br class="u-mobile">宮崎市浮田１０３２－１</dd>
					</dl>
					<dl class="top-facility__term">
						<dt>TEL</dt>
						<dd>080-5267-1381</dd>
					</dl>
					<dl class="top-facility__term">
						<dt>FAX</dt>
						<dd>0985-65-4282</dd>
					</dl>
					<dl class="top-facility__term">
						<dt>支援内容</dt>
						<dd>放課後等デイサービス</dd>
					</dl>
					<dl class="top-facility__term">
						<dt>定員</dt>
						<dd>１０名</dd>
					</dl>
					<dl class="top-facility__term">
						<dt>対象年齢</dt>
						<dd>小学１年生〜高校３年生</dd>
					</dl>
					<dl class="top-facility__term top-facility__term--staff">
						<dt>職員構成</dt>
						<dd>管理者１名、児童発達支援管理責任者１名、児童指導員１名、保育士２名、調理師１名</dd>
					</dl>
					<dl class="top-facility__term">
						<dt>施設運営<br class="u-mobile">システム</dt>
						<dd>HUG</dd>
					</dl>
				</div>


			</div>
		</div>


		<div class="top-facility__photo">
			<div class="top-facility__image">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/common/photo1.jpg' ); ?>"
					alt="外観の写真">
			</div>
			<div class="top-facility__image">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/common/photo2.jpg' ); ?>"
					alt="室内の写真">
			</div>
			<!-- <div class="top-facility__image">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/common/sample.jpg' ); ?>"
					alt="施設の写真">
			</div>
			<div class="top-facility__image">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/common/sample.jpg' ); ?>"
					alt="施設の写真">
			</div> -->
		</div>

		<div class="top-facility__inner inner">
			<div class="top-facility__contact">

				<h3 class="top-facility__contact-title section-title">
					ご相談・お問い合わせ
				</h3>
				<p class="top-facility__contact-text">
					お子さまのことでご不安なこと、<br class="u-mobile">まずはご相談ください。
				</p>
				<div class="top-facility__contact-container">
					<div class="top-facility__contact-phone">
						<a href="tel:08052671381">
							TEL&nbsp;080-5267-1381
						</a>
					</div>
					<div class="top-facility__contact-button">
						<a href="#">お問い合わせ</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="top-access top-access-layout" id="access">
		<div class="top-access__inner inner">
			<h3 class="top-access__title section-title">
				アクセス
			</h3>
			<div class="top-access__map">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3386.3108841818853!2d131.36430918159633!3d31.925315960083406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3538b685af695fa5%3A0xc3638075bfe137fd!2z44CSODgwLTIxMDQg5a6u5bSO55yM5a6u5bSO5biC5rWu55Sw77yR77yQ77yT77yS4oiS77yR!5e0!3m2!1sja!2sjp!4v1757277708691!5m2!1sja!2sjp"
					width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
					referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="top-access__wrap">
				<div class="top-access__container">

					<div class="top-access__logo">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/common/logo-name.svg' ); ?>"
							alt="kid's キララ">
					</div>
					<p class="top-access__address">
						宮崎市浮田１０３２－１<br>
						<span>（角力田バス停目の前）</span>
					</p>

					<div class="top-access__list">
						<div class="top-access__item">
							<dt class="top-access__term">利用時間</dt>
							<dd class="top-access__decs">月〜金曜日&emsp;14：00〜17：00<br>
								祝日・長期休暇&emsp;9：30〜14：30<br>
								<span class="top-access__sub">(延長あり)</span>
							</dd>
						</div>
						<div class="top-access__item">
							<dt class="top-access__term">送迎</dt>
							<dd class="top-access__decs">あり
								<span class="top-access__sub">（詳細はお問い合わせください）</span>
							</dd>
						</div>
					</div>

				</div>
				<div class="top-access__image">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/common/access1.jpg' ); ?>"
						alt="キララの施設写真">
				</div>

			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
<?php get_header(); ?>



<main>

	<section class="top-mv top-mv-layout">
		<div class="top-mv__container">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/mv.png" alt="ランドセルを背負って走る子ども">
			<h2 class="top-mv__title">
				お子様が自分で踏み出す<br>
				「一歩」のお手伝いをします
			</h2>
		</div>
	</section>

	<section class="top-worries top-worries-layout">
		<div class="top-worries__inner inner">
			<div class="top-worries__title section-title">
				お子様にこんな不安はありませんか？
			</div>
			<div class="top-worries__image">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/common/worries.png' ); ?>"
					alt="お悩みの症例8つ">
			</div>
		</div>

	</section>


	<section class="top-about top-about-layout">
		<div class="top-about__inner inner">
			<div class="top-about__title section-title">
				放課後等デイサービスってどんなところ？
			</div>
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
					令和6年度報酬改定において、「児童発達支援」「放課後等デイサービス」での支援で、<br>
					「5領域」全て含めた総合的な支援を提供することが運営基準に明記されています。
				</p>

				<div class="top-about__support-list">
					<div class="top-about__support-row top-about__support-row--first">
						<?php
						$first_row_items = [
							['src' => 'about1.png', 'alt' => '健康・生活'],
							['src' => 'about2.png', 'alt' => '運動・感覚'],
							['src' => 'about3.png', 'alt' => '認知・行動'],
						];

				    foreach ($first_row_items as $index => $item) : ?>
						<div class="top-about__support-item top-about__support-item--<?php echo $index + 1; ?>">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/common/' . $item['src']); ?>"
								alt="<?php echo esc_attr($item['alt']); ?>">
						</div>
						<?php endforeach; ?>
					</div>

					<div class="top-about__support-row top-about__support-row--second">
						<?php
						$second_row_items = [
							['src' => 'about4.png', 'alt' => '言語・コミュニケーション'],
							['src' => 'about5.png', 'alt' => '人間関係・社会性'],
						];

				    foreach ($second_row_items as $index => $item) : ?>
						<div class="top-about__support-item top-about__support-item--<?php echo $index + 4; ?>">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/common/' . $item['src']); ?>"
								alt="<?php echo esc_attr($item['alt']); ?>">
						</div>
						<?php endforeach; ?>
					</div>
				</div>
				<p class="top-about__note">
					kid’sキララではその基本5領域に加えて<br>
					3つのサービスをご提供します。
				</p>
			</div>
		</div>

	</section>

	<section class="top-features top-features-layout">
		<div class="top-features__inner inner">
			<div class="top-features__title section-title">
				<!-- kid’sキララ3つの特徴 -->
				kid’sキララ3つの特徴
			</div>
			<p class="top-features__text">
				kid’sキララは、食育とスキルアップに力を入れる<br>
				県内でも珍しい放課後等デイサービスです。
			</p>

			<div class="top-features__wrap">
				<!-- 吹き出し -->
				<div class="top-features__bubbles">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/common/features1.png' ); ?>"
						alt="学ぶ" class="top-features__bubble js-fade-slide">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/common/features2.png' ); ?>"
						alt="食べる" class="top-features__bubble js-fade-slide">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/common/features3.png' ); ?>"
						alt="活かす" class="top-features__bubble js-fade-slide">
				</div>

				<!-- 星の画像 -->
				<div class="top-features__image js-floating">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/common/star.png' ); ?>"
						alt="星のキャラクター">
				</div>
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
							<div class="features-card__title">
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

	<section class="top-guide top-guide-layout">
		<div class="top-guide__inner inner">
			<div class="top-guide__title section-title">
				ご利用案内
			</div>


			<ul class="top-guide__items guide-list">
				<li class="guide-list__item guide-item">
					<h3 class="guide-item__title">ご利用方法</h3>
					<p class="guide-item__text">
						テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト

					</p>

				</li>
				<li class="guide-list__item guide-item">
					<h3 class="guide-item__title">料金</h3>
					<p class="guide-item__text">
						テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト

					</p>

				</li>
				<li class="guide-list__item guide-item">
					<h3 class="guide-item__title">入所の流れ</h3>
					<p class="guide-item__text">
						テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト

					</p>

				</li>
			</ul>







		</div>
	</section>

	<section class="top-facility top-facility-layout">
		<div class="top-facility__inner inner">
			<div class="top-facility__info">
				<h2 class="top-facility__title section-title">
					施設案内
				</h2>

				<div class="top-facility__list">


					<dl class="top-facility__term">
						<dt>設置・運営団体</dt>
						<dd>合同会社 kid’s キララ</dd>
					</dl>
					<dl class="top-facility__term">
						<dt>所在地</dt>
						<dd>〒880-2104 宮崎市浮田１０３２－１</dd>
					</dl>
					<dl class="top-facility__term">
						<dt>TEL</dt>
						<dd>080-5267-1381</dd>
					</dl>
					<dl class="top-facility__term">
						<dt>支援内容</dt>
						<dd>放課後等デイサービス</dd>
					</dl>
					<dl class="top-facility__term">
						<dt>定員</dt>
						<dd>10名</dd>
					</dl>
					<dl class="top-facility__term">
						<dt>対象年齢</dt>
						<dd>小学1年生〜高校3年生</dd>
					</dl>
					<dl class="top-facility__term">
						<dt>職員構成</dt>
						<dd>管理者1名、児童発達支援管理責任者1名、児童指導員1名、保育士2名、調理師1名</dd>
					</dl>
					<dl class="top-facility__term">
						<dt>施設運営システム</dt>
						<dd>HUG</dd>
					</dl>
				</div>


			</div>




			<div class="top-facility__photo">
				<div class="top-facility__image">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/common/sumple.jpg' ); ?>"
						alt="施設の写真">
				</div>
				<div class="top-facility__image">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/common/sumple.jpg' ); ?>"
						alt="施設の写真">
				</div>
				<div class="top-facility__image">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/common/sumple.jpg' ); ?>"
						alt="施設の写真">
				</div>
				<div class="top-facility__image">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/common/sumple.jpg' ); ?>"
						alt="施設の写真">
				</div>
			</div>

			<div class="top-facility__contact">

				<h2 class="top-facility__contact-title section-title">
					ご相談・お問い合わせ
				</h2>
				<p class="top-facility__contact-text">
					お子さまのことでご不安なこと、まずはご相談ください。
				</p>
				<div class="top-facility__contact-container">
					<div class="top-facility__contact-phone">TEL 000-0000-0000</div>
					<div class="top-facility__contact-button">
						<a href="#">お問い合わせ</a>
					</div>
				</div>
			</div>
		</div>
	</section>



	<section class="top-access top-access-layout">
		<div class="top-access__inner inner">
			<h2 class="top-access__title section-title">
				アクセス
			</h2>
			<div class="top-access__map">
				<iframe>
				</iframe>
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
								<span class="top-access__sub">（延長あり）</span>
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
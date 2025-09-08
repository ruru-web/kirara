
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  let topBtn = $('.c-to-top');
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });


  //  ヘッダークラス名付与
  let header = $('.header');
  let headerHeight = $('.header').height();
  let height = $('.js-mv-height').height();

  console.log('ヘッダー高さ ' + headerHeight);
  console.log('mv高さ ' + height);

  $(window).scroll(function () {
    if ($(this).scrollTop() > (height - headerHeight)) {
      header.addClass('is-color');
    } else {
      header.removeClass('is-color');
    }
  });


  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });





  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)
  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    return false;
  });

  let swiper = new Swiper(".js-works-swiper", {
    pagination: {
      el: ".js-works-pagination",
    },
    loop: true,
    clickable: true,
    // autoplay: {
    //   delay: 3000,
    // },
  });


  // アコーディオン
  $('.js-drawer-accordion').on('click', function () {
    $(this).next().slideToggle();
    $(this).toggleClass('is-open');
  });
  


  // MVスワイパー
  new Swiper(".js-mv-swiper", {
    loop: true,
    speed: 2000,
    effect: "fade",
    fadeEffect: {
        crossFade: true,
    },
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
  });

  
});


document.addEventListener("DOMContentLoaded", () => {
  setUpAccordion();
});

const setUpAccordion = () => {
  const details = document.querySelectorAll(".js-details");
  const RUNNING_VALUE = "running"; // アニメーション実行中のときに付与する予定のカスタムデータ属性の値
  const IS_OPENED_CLASS = "is-opened"; // アイコン操作用のクラス名

  details.forEach((element) => {
    const summary = element.querySelector(".js-summary");
    const content = element.querySelector(".js-content");

    summary.addEventListener("click", (event) => {
      // デフォルトの挙動を無効化
      event.preventDefault();

      // 連打防止用。アニメーション中だったらクリックイベントを受け付けないでリターンする
      if (element.dataset.animStatus === RUNNING_VALUE) {
        return;
      }

      let icon = element.children[0];
      // detailsのopen属性を判定
      if (element.open) {
        // アコーディオンを閉じるときの処理
        // アイコン操作用クラスを切り替える(クラスを取り除く)
        element.classList.toggle(IS_OPENED_CLASS);
        // アニメーションを実行
        const closingAnim = content.animate(
          closingAnimKeyframes(content),
          animTiming
        );
        // アニメーション実行中用の値を付与
        element.dataset.animStatus = RUNNING_VALUE;

        icon.classList.toggle(IS_OPENED_CLASS);
        // アニメーションの完了後に
        closingAnim.onfinish = () => {
          // open属性を取り除く
          element.removeAttribute("open");
          // アニメーション実行中用の値を取り除く
          element.dataset.animStatus = "";
        };
      } else {
        // アコーディオンを開くときの処理
        // open属性を付与
        element.setAttribute("open", "true");

        // アイコン操作用クラスを切り替える(クラスを付与)
        element.classList.toggle(IS_OPENED_CLASS);
        // アニメーションを実行
        const openingAnim = content.animate(
          openingAnimKeyframes(content),
          animTiming
        );
        // アニメーション実行中用の値を入れる
        element.dataset.animStatus = RUNNING_VALUE;

        icon.classList.toggle(IS_OPENED_CLASS);
        // アニメーション完了後にアニメーション実行中用の値を取り除く
        openingAnim.onfinish = () => {
          element.dataset.animStatus = "";
        };
      }
    });
  });
};

/**
 * アニメーションの時間とイージング
 */
const animTiming = {
  duration: 400,
  easing: "ease-out",
};

/**
 * アコーディオンを閉じるときのキーフレーム
 */
const closingAnimKeyframes = (content) => [
  {
    height: content.offsetHeight + "px", // height: "auto"だとうまく計算されないため要素の高さを指定する
    opacity: 1,
  },
  {
    height: 0,
    opacity: 0,
  },
];

/**
 * アコーディオンを開くときのキーフレーム
 */
const openingAnimKeyframes = (content) => [
  {
    height: 0,
    opacity: 0,
  },
  {
    height: content.offsetHeight + "px",
    opacity: 1,
  },
];



document.addEventListener('DOMContentLoaded', function() {
	// Intersection Observerのオプション
	const observerOptions = {
		threshold: 0.3, // 30%見えたらトリガー
		rootMargin: '0px 0px -50px 0px'
	};

	let animationStarted = false; // アニメーション開始フラグ

	// 吹き出しアニメーション用のObserver
	const bubbleObserver = new IntersectionObserver((entries) => {
		entries.forEach(entry => {
			if (entry.isIntersecting && !animationStarted) {
				animationStarted = true; // 重複実行を防ぐ

				const bubbleItems = document.querySelectorAll('.js-bubble-animation');
				let completedAnimations = 0; // 完了したフェードインの数
				
				// 左から順番にフェードイン（0ms, 300ms, 600ms）
				bubbleItems.forEach((item, index) => {
					const delay = index * 300; // インデックスに基づく遅延
					
					setTimeout(() => {
						// フェードイン開始
						item.classList.add('is-animated');
						
						// フェードイン完了をカウント
						setTimeout(() => {
							completedAnimations++;
							
							// 全てのフェードインが完了したら、同じタイミングでpulseアニメーション開始
							if (completedAnimations === bubbleItems.length) {
								bubbleItems.forEach(bubbleItem => {
									bubbleItem.classList.add('is-pulse');
								});
							}
						}, 800); // transitionの時間と合わせる
						
					}, delay);
				});
				
				// 一度アニメーションしたら監視を停止
				bubbleObserver.unobserve(entry.target);
			}
		});
	}, observerOptions);

	// 吹き出しセクションを監視
	const bubbleSection = document.querySelector('.top-features__bubble');
	if (bubbleSection) {
		bubbleObserver.observe(bubbleSection);
	}
});
<!DOCTYPE html>
<html lang="ru">
	<head>
		<!-- Мета теги -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Фавикон -->
		<link href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />

		<!-- Шрифты -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700|Ubuntu:400i&amp;subset=cyrillic" rel="stylesheet">

		<!-- Стили -->

		<link href="css/uikit.min.css" type="text/css" rel="stylesheet" />
		<link href="css/components/slideshow.min.css" type="text/css" rel="stylesheet" />
		<link href="css/styles.css" type="text/css" rel="stylesheet" />
		<link href="css/custom.css" type="text/css" rel="stylesheet" />

		<!-- Скрипты -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<script type="text/javascript" src="js/uikit.min.js"></script>
		<script type="text/javascript" src="js/components/slideshow.min.js"></script>
		<script type="text/javascript" src="js/components/slideset.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>

		<!-- Title -->
		<title>mirador.by</title>
		
	</head>

	<body>
        
        <header class="header">
			<div class="uk-headerbar uk-container uk-container-center">
				<div class="uk-grid uk-grid-collapse uk-flex-middle">
					<div class="uk-width-3-10 uk-width-small-2-10 uk-width-medium-1-6 uk-width-large-2-10 uk-width-xlarge-1-6">
						<div class="uk-logo uk-flex-order-first-xlarge">
							<a href="/"><img src="images/logo.png" alt="logo"></a>
						</div>
					</div>

					<div class="uk-headerbar-right-holder uk-width-5-10 uk-width-small-7-10 uk-width-medium-4-6 uk-width-large-7-10 uk-width-xlarge-1-6 uk-flex-order-last-xlarge">
						<div class="uk-headerbar-right">
							<div class="uk-headerbar-phone uk-text-right">
								<a class="text-black h5 text-bold" href="tel:+375 (44) 741-24-74">+375(44)741-24-74</a>
							</div>
							<div class="uk-headerbar-buttons uk-flex uk-flex-right">
								<a class="button button-small button-request_call" href="#">Заказать звонок</a>
								<form class="uk-search form-hidden position-relative">
									<div class="form-control form-control-search">
										<input name="search" placeholder="Введите текст для поиска">
									</div>
									<button class="button button-small button-search js-button-search"></button>
								</form>
							</div>
						</div>
					</div>
					
					<div class="uk-width-2-10 uk-width-small-1-10 uk-width-medium-1-6 uk-width-large-1-10 uk-width-xlarge-4-6 uk-navbar-holder">
						<nav class="uk-navbar uk-width-1-1">
							<ul class="uk-navbar-nav uk-flex uk-flex-space-between uk-width-1-1">
								<li class="uk-parent" data-uk-dropdown="" aria-haspopup="true" aria-expanded="false">
									<a href="#">Каталог</a>
									<div class="uk-dropdown uk-dropdown-navbar uk-dropdown-bottom" aria-hidden="true" tabindex="">
										<ul class="uk-nav uk-nav-navbar">
											<li><a href="#">Двери</a></li>
											<li><a href="#">Перегородки</a></li>
											<li><a href="#">Фасады</a></li>
											<li><a href="#">Экраны на радиатор</a></li>
										</ul>
									</div>
								</li>

								<li><a href="#">Покупателям</a></li>
								<li><a href="#">Наши преимущества</a></li>
								<li class="uk-active"><a href="#">Акции</a></li>
								<li><a href="#">Как мы работаем</a></li>
								<li><a href="#">Партнерам</a></li>
								<li><a href="#">Контакты</a></li>
							</ul>
						</nav>
						<button class="offcanvas_button" data-uk-offcanvas="{target:'#offcanvas-right'}">
							<span></span>
							<span></span>
							<span></span>
						</button>
					</div>
				</div>
			</div>
		</header>

		<section class="slider position-relative">
			<div data-uk-slideshow="{autoplay: true, animation: 'fade'}">
				<ul class="uk-slideshow">
					<li>
						<img src="images/slider/slide001.jpg" alt="">
						<div class="uk-overlay-panel uk-overlay-fade">
							<div class="uk-container uk-container-center uk-height-1-1 uk-flex uk-flex-middle">
								<div class="uk-width-medium-1-2">
									<div class="uk-overlay-panel-content h3 text-dark text-light">
										<p class="slider-title">МЕЖКОМНАТНЫЕ ДВЕРИ</p>
										из МДФ от производителя
									</div>
									<a class="button button-bordered margin-top-large" href="#"><span>Заказать дверь</span></a>
								</div>
							</div>
						</div>
					</li>
					<li><img src="images/slider/slide002.jpg" alt=""></li>
					<li><img src="images/slider/slide003.jpg" alt=""></li>
					<li><img src="images/slider/slide004.jpg" alt=""></li>
				</ul>
				<div class="uk-dotnav-holder uk-position-absolute">
					<div class="uk-container uk-container-center">
						<ul class="uk-dotnav">
							<li data-uk-slideshow-item="0"></li>
							<li data-uk-slideshow-item="1"></li>
							<li data-uk-slideshow-item="2"></li>
							<li data-uk-slideshow-item="3"></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="slider-bottom_overlap uk-position-absolute uk-position-bottom-left uk-position-bottom-right">
				<svg viewBox="0 0 100 6">
					<polygon class="polygon-top" points="0,0 50,2.7 100,0 100,0.2 50,2.9 0,0.2"></polygon>
					<polygon class="polygon-bottom" points="0,0.2 50,2.9 100,0.2 100,6 50,6 0,6"></polygon>
				</svg>
			</div>

		</section>

		<section class="catalog-block">
			<div class="uk-container uk-container-center">
				<div class="page-title-large uk-text-center">Каталог товаров</div>

				<div class="catalog-block-categories uk-flex uk-flex-space-between">
					<a class="catalog-block-categories-button button button-bordered margin-top-large" href="#"><span>Двери</span></a>
					<a class="catalog-block-categories-button button button-bordered margin-top-large" href="#"><span>Перегородки</span></a>
					<a class="catalog-block-categories-button button button-bordered margin-top-large" href="#"><span>Фасады</span></a>
					<a class="catalog-block-categories-button button button-bordered margin-top-large" href="#"><span>Экраны на радиатор</span></a>
					<a class="catalog-block-categories-button button button-bordered margin-top-large" href="#"><span>Домовая резьба</span></a>
				</div>

				<div class="catalog-block-products_list product_list">
					<div data-uk-slideset="{default: 1, small: 2, medium: 3, large: 3, xlarge: 4}">
						<div class="uk-slidenav-position uk-position-relative">
							<ul class="catalog-block-products_list-slideset uk-grid uk-grid-collapse uk-slideset position-relative">
								<li>
									<div class="catalog-block-products_list-item uk-position-relative">
										<div class="catalog-block-products_list-item-holder uk-position-absolute">
											<div class="catalog-block-products_list-item-image">
												<a href="#"><img src="images/catalog/product001.jpg" alt="product001"></a>
											</div>
											<div class="catalog-block-products_list-item-info uk-flex uk-flex-space-between text-blue">
												<div class="catalog-block-products_list-item-name text-avenir h6">
													Ньюдор №15
												</div>
												<div class="catalog-block-products_list-item-price">
													<span class="catalog-block-products_list-item-price-value text-avenir-bold h4">220<sup>00</sup></span>
													<span class="catalog-block-products_list-item-price-currency text-avenir h5">руб.</span>
												</div>
											</div>


										<div class="catalog-block-products_list-item-additional margin-top-small">
											<div class="catalog-block-products_list-item-params text-medium text-avenir text-semibold">
												<div>
													<span class="catalog-block-products_list-item-params-name text-muted">
														Материал:
													</span>
													<span class="catalog-block-products_list-item-params-value text-blue">
														массив сосны, МДФ
													</span>
												</div>
												<div>
													<span class="catalog-block-products_list-item-params-name text-muted">
														Цвет:
													</span>
													<span class="catalog-block-products_list-item-params-value text-blue">
														графитовый
													</span>
												</div>
												<div>
													<span class="catalog-block-products_list-item-params-name text-muted">
														Каркас:
													</span>
													<span class="catalog-block-products_list-item-params-value text-blue">
														каркасно-сотовый
													</span>
												</div>
											</div>
											<div class="catalog-block-products_list-item-button margin-top-medium">
												<a class="button uk-width-1-1" href="#">Подробнее</a>
											</div>
										</div>
										</div>
									</div>
								</li>
								<li>
									<div class="catalog-block-products_list-item uk-position-relative">
										<div class="catalog-block-products_list-item-holder uk-position-absolute">
											<div class="catalog-block-products_list-item-image">
												<a href="#"><img src="images/catalog/product002.jpg" alt="product001"></a>
											</div>
											<div class="catalog-block-products_list-item-info uk-flex uk-flex-space-between text-blue">
												<div class="catalog-block-products_list-item-name text-avenir h6">
													Ньюдор №15
												</div>
												<div class="catalog-block-products_list-item-price">
													<span class="catalog-block-products_list-item-price-value text-avenir-bold h4">220<sup>00</sup></span>
													<span class="catalog-block-products_list-item-price-currency text-avenir h5">руб.</span>
												</div>
											</div>


											<div class="catalog-block-products_list-item-additional margin-top-small">
												<div class="catalog-block-products_list-item-params text-medium text-avenir text-semibold">
													<div>
													<span class="catalog-block-products_list-item-params-name text-muted">
														Материал:
													</span>
													<span class="catalog-block-products_list-item-params-value text-blue">
														массив сосны, МДФ
													</span>
													</div>
													<div>
													<span class="catalog-block-products_list-item-params-name text-muted">
														Цвет:
													</span>
													<span class="catalog-block-products_list-item-params-value text-blue">
														графитовый
													</span>
													</div>
													<div>
													<span class="catalog-block-products_list-item-params-name text-muted">
														Каркас:
													</span>
													<span class="catalog-block-products_list-item-params-value text-blue">
														каркасно-сотовый
													</span>
													</div>
												</div>
												<div class="catalog-block-products_list-item-button margin-top-medium">
													<a class="button uk-width-1-1" href="#">Подробнее</a>
												</div>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="catalog-block-products_list-item uk-position-relative">
										<div class="catalog-block-products_list-item-holder uk-position-absolute">
											<div class="catalog-block-products_list-item-image">
												<a href="#"><img src="images/catalog/product003.jpg" alt="product001"></a>
											</div>
											<div class="catalog-block-products_list-item-info uk-flex uk-flex-space-between text-blue">
												<div class="catalog-block-products_list-item-name text-avenir h6">
													Ньюдор №15
												</div>
												<div class="catalog-block-products_list-item-price">
													<span class="catalog-block-products_list-item-price-value text-avenir-bold h4">220<sup>00</sup></span>
													<span class="catalog-block-products_list-item-price-currency text-avenir h5">руб.</span>
												</div>
											</div>


											<div class="catalog-block-products_list-item-additional margin-top-small">
												<div class="catalog-block-products_list-item-params text-medium text-avenir text-semibold">
													<div>
													<span class="catalog-block-products_list-item-params-name text-muted">
														Материал:
													</span>
													<span class="catalog-block-products_list-item-params-value text-blue">
														массив сосны, МДФ
													</span>
													</div>
													<div>
													<span class="catalog-block-products_list-item-params-name text-muted">
														Цвет:
													</span>
													<span class="catalog-block-products_list-item-params-value text-blue">
														графитовый
													</span>
													</div>
													<div>
													<span class="catalog-block-products_list-item-params-name text-muted">
														Каркас:
													</span>
													<span class="catalog-block-products_list-item-params-value text-blue">
														каркасно-сотовый
													</span>
													</div>
												</div>
												<div class="catalog-block-products_list-item-button margin-top-medium">
													<a class="button uk-width-1-1" href="#">Подробнее</a>
												</div>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="catalog-block-products_list-item uk-position-relative">
										<div class="catalog-block-products_list-item-holder uk-position-absolute">
											<div class="catalog-block-products_list-item-image">
												<a href="#"><img src="images/catalog/product004.jpg" alt="product001"></a>
											</div>
											<div class="catalog-block-products_list-item-info uk-flex uk-flex-space-between text-blue">
												<div class="catalog-block-products_list-item-name text-avenir h6">
													Ньюдор №15
												</div>
												<div class="catalog-block-products_list-item-price">
													<span class="catalog-block-products_list-item-price-value text-avenir-bold h4">220<sup>00</sup></span>
													<span class="catalog-block-products_list-item-price-currency text-avenir h5">руб.</span>
												</div>
											</div>


											<div class="catalog-block-products_list-item-additional margin-top-small">
												<div class="catalog-block-products_list-item-params text-medium text-avenir text-semibold">
													<div>
													<span class="catalog-block-products_list-item-params-name text-muted">
														Материал:
													</span>
													<span class="catalog-block-products_list-item-params-value text-blue">
														массив сосны, МДФ
													</span>
													</div>
													<div>
													<span class="catalog-block-products_list-item-params-name text-muted">
														Цвет:
													</span>
													<span class="catalog-block-products_list-item-params-value text-blue">
														графитовый
													</span>
													</div>
													<div>
													<span class="catalog-block-products_list-item-params-name text-muted">
														Каркас:
													</span>
													<span class="catalog-block-products_list-item-params-value text-blue">
														каркасно-сотовый
													</span>
													</div>
												</div>
												<div class="catalog-block-products_list-item-button margin-top-medium">
													<a class="button uk-width-1-1" href="#">Подробнее</a>
												</div>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="catalog-block-products_list-item uk-position-relative">
										<div class="catalog-block-products_list-item-holder uk-position-absolute">
											<div class="catalog-block-products_list-item-image">
												<a href="#"><img src="images/catalog/product001.jpg" alt="product001"></a>
											</div>
											<div class="catalog-block-products_list-item-info uk-flex uk-flex-space-between text-blue">
												<div class="catalog-block-products_list-item-name text-avenir h6">
													Ньюдор №15
												</div>
												<div class="catalog-block-products_list-item-price">
													<span class="catalog-block-products_list-item-price-value text-avenir-bold h4">220<sup>00</sup></span>
													<span class="catalog-block-products_list-item-price-currency text-avenir h5">руб.</span>
												</div>
											</div>


											<div class="catalog-block-products_list-item-additional margin-top-small">
												<div class="catalog-block-products_list-item-params text-medium text-avenir text-semibold">
													<div>
													<span class="catalog-block-products_list-item-params-name text-muted">
														Материал:
													</span>
													<span class="catalog-block-products_list-item-params-value text-blue">
														массив сосны, МДФ
													</span>
													</div>
													<div>
													<span class="catalog-block-products_list-item-params-name text-muted">
														Цвет:
													</span>
													<span class="catalog-block-products_list-item-params-value text-blue">
														графитовый
													</span>
													</div>
													<div>
													<span class="catalog-block-products_list-item-params-name text-muted">
														Каркас:
													</span>
													<span class="catalog-block-products_list-item-params-value text-blue">
														каркасно-сотовый
													</span>
													</div>
												</div>
												<div class="catalog-block-products_list-item-button margin-top-medium">
													<a class="button uk-width-1-1" href="#">Подробнее</a>
												</div>
											</div>
										</div>
									</div>
								</li>

							</ul>

							<ul class="uk-slideset-nav uk-dotnav uk-dotnav-simple uk-flex uk-flex-center">
								<li data-uk-slideset-item="0" class="uk-active"></li>
								<li data-uk-slideset-item="1"></li>
								<li data-uk-slideset-item="2"></li>
							</ul>

						</div>
					</div>
				</div>

			</div>
		</section>

		<section class="delivery-block">
			<div class="uk-container uk-container-center uk-position-relative">
				<div class="uk-grid uk-grid-collapse">
					<div class="delivery-block-text-holder uk-width-1-1 uk-width-small-3-5 uk-width-medium-1-2">
						<div class="delivery-block-text">
							<div class="delivery-block-subtitle text-contrast h4 text-light">Закажите 5 дверей и получите</div>
							<div class="delivery-block-title page-title-large text-contrast">Бесплатную доставку</div>
						</div>
					</div>
					<div class="delivery-block-image-holder uk-width-1-1 uk-width-small-2-5 uk-width-medium-1-2">
						<div class="delivery-block-image position-relative uk-height-1-1"><img class="uk-position-bottom-right uk-position-bottom-left" src="images/delivery-block-image.png" alt=""></div>
					</div>
				</div>
			</div>
		</section>

		<section class="advantages-block position-relative">
			<div class="uk-container uk-container-center">
				<div class="advantages-block-slider position-relative">
					<div class="advantages-block-slideshow position-relative">
						<ul class="uk-slideshow">
							<li>
								<div class="advantages-block-slider-grid uk-grid">
									<div class="uk-width-1-1 uk-width-large-1-2 uk-position-relative advantages-block-slider-left-holder">
										<div class="advantages-block-slider-left">
											<div class="advantages-block-slider-title text-blue h4 text-vollkorn">
												Межкомнатные двери, предоставляемые компанией «Мирадор» - это высококачественный продукт, при производстве которого учитываются все современные тенденции.
											</div>

											<div class="advantages-block-slider-text text-muted text-medium margin-top-medium">
												<p>Разнообразные цвета и оригинальные варианты декорирования, которые мы предоставляем нашим клиентам, могут подчеркнуть любой интерьер. Наши двери не теряются на фоне стен, они качественно выделяются, заставляют обратить на себя внимание.</p>

												<p>Наша компания осуществляет индивидуальный подход к каждому из клиентов, предлагая именно то, что ему нужно – продукт с качественной и надежной основой, который идеально впишется в интерьер.</p>

												<p>Подчеркивая элегантность, строгость или напыщенность любого помещения.</p>
											</div>

											<div class="uk-dotnav-holder uk-dotnav-holder-mobile uk-position-absolute">
												<div class="uk-container uk-container-center">
													<ul class="uk-dotnav uk-dotnav-simple uk-dotnav-advantages uk-flex uk-flex-center">
														<li data-uk-slideshow-item="0"></li>
														<li data-uk-slideshow-item="1"></li>
														<li data-uk-slideshow-item="2"></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="uk-width-1-1 uk-width-large-1-2 uk-position-relative advantages-block-slider-right-holder">
										<div class="advantages-block-slider-right uk-position-relative">
											<div class="advantages-block-slider-right-image uk-position-absolute">
												<img src="images/advantages/advantages-slide001.png" alt="">
											</div>
											<div class="advantages-block-slider-right-title text-contrast page-title">
												Уникальные решения при производстве
											</div>
											<ul class="advantages-block-slider-right-list slider-list margin-top-large">
												<li>Подсветка</li>
												<li>Узоры, фигуры</li>
												<li>Индивидуальный дизайн</li>
											</ul>
											<div class="margin-top-large">
												<a class="button button-large button-bordered" href="#"><span>Спроектировать дверь</span></a>
											</div>
										</div>

										<div class="advantages-block-bg-right uk-position-absolute">
											<div class="advantages-block-bg-right-inner uk-height-1-1">
												<div class="advantages-block-bg-right-inner-bg uk-height-1-1"></div>
											</div>
										</div>

										<svg class="advantages-block-bg-right-triangle uk-position-absolute" viewBox="0 0 10 20">
											<polygon points="5.1,0 5.2,0 5.2,15 0.1,15"></polygon>
										</svg>


									</div>
								</div>
							</li>

							<li>
								<div class="advantages-block-slider-grid uk-grid">
									<div class="uk-width-1-1 uk-width-large-1-2 uk-position-relativeadv antages-block-slider-left-holder">
										<div class="advantages-block-slider-left">
											<div class="advantages-block-slider-title text-blue h4 text-vollkorn">
												Межкомнатные двери, предоставляемые компанией «Мирадор» - это высококачественный продукт, при производстве которого учитываются все современные тенденции.
											</div>

											<div class="advantages-block-slider-text text-muted text-medium margin-top-medium">
												<p>Разнообразные цвета и оригинальные варианты декорирования, которые мы предоставляем нашим клиентам, могут подчеркнуть любой интерьер. Наши двери не теряются на фоне стен, они качественно выделяются, заставляют обратить на себя внимание.</p>

												<p>Наша компания осуществляет индивидуальный подход к каждому из клиентов, предлагая именно то, что ему нужно – продукт с качественной и надежной основой, который идеально впишется в интерьер.</p>

												<p>Разнообразные цвета и оригинальные варианты декорирования, которые мы предоставляем нашим клиентам, могут подчеркнуть любой интерьер. Наши двери не теряются на фоне стен, они качественно выделяются, заставляют обратить на себя внимание.</p>

												<p>подчеркивая элегантность, строгость или напыщенность любого помещения.</p>
											</div>

											<div class="uk-dotnav-holder uk-dotnav-holder-mobile uk-position-absolute">
												<div class="uk-container uk-container-center">
													<ul class="uk-dotnav uk-dotnav-simple uk-dotnav-advantages uk-flex uk-flex-center">
														<li data-uk-slideshow-item="0"></li>
														<li data-uk-slideshow-item="1"></li>
														<li data-uk-slideshow-item="2"></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="uk-width-1-1 uk-width-large-1-2 uk-position-relative advantages-block-slider-right-holder">
										<div class="advantages-block-slider-right uk-position-relative">
											<div class="advantages-block-slider-right-image uk-position-absolute">
												<img src="images/advantages/advantages-slide002.png" alt="">
											</div>
											<div class="advantages-block-slider-right-title text-contrast page-title">
												Уникальные решения
											</div>
											<ul class="advantages-block-slider-right-list slider-list margin-top-large">
												<li>Подсветка</li>
												<li>Индивидуальный дизайн</li>
												<li>Подсветка</li>
												<li>Узоры, фигуры</li>
												<li>Индивидуальный дизайн</li>
											</ul>
											<div class="margin-top-large">
												<a class="button button-large button-bordered" href="#"><span>Спроектировать дверь</span></a>
											</div>
										</div>

										<div class="advantages-block-bg-right uk-position-absolute">
											<div class="advantages-block-bg-right-inner uk-height-1-1">
												<div class="advantages-block-bg-right-inner-bg uk-height-1-1"></div>
											</div>
										</div>

										<svg class="advantages-block-bg-right-triangle uk-position-absolute" viewBox="0 0 10 20">
											<polygon points="5.1,0 5.2,0 5.2,15 0.1,15"></polygon>
										</svg>


									</div>
								</div>
							</li>

							<li>
								<div class="advantages-block-slider-grid uk-grid">
									<div class="uk-width-1-1 uk-width-large-1-2 uk-position-relative advantages-block-slider-left-holder">
										<div class="advantages-block-slider-left">
											<div class="advantages-block-slider-title text-blue h4 text-vollkorn">
												Межкомнатные двери, предоставляемые компанией «Мирадор» - это высококачественный продукт.
											</div>

											<div class="advantages-block-slider-text text-muted text-medium margin-top-medium">
												<p>Разнообразные цвета и оригинальные варианты декорирования, которые мы предоставляем нашим клиентам, могут подчеркнуть любой интерьер. Наши двери не теряются на фоне стен, они качественно выделяются, заставляют обратить на себя внимание.</p>

											</div>

											<div class="uk-dotnav-holder uk-dotnav-holder-mobile uk-position-absolute">
												<div class="uk-container uk-container-center">
													<ul class="uk-dotnav uk-dotnav-simple uk-dotnav-advantages uk-flex uk-flex-center">
														<li data-uk-slideshow-item="0"></li>
														<li data-uk-slideshow-item="1"></li>
														<li data-uk-slideshow-item="2"></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="uk-width-1-1 uk-width-large-1-2 uk-position-relative advantages-block-slider-right-holder">
										<div class="advantages-block-slider-right uk-position-relative">
											<div class="advantages-block-slider-right-image uk-position-absolute">
												<img src="images/advantages/advantages-slide001.png" alt="">
											</div>
											<div class="advantages-block-slider-right-title text-contrast page-title">
												Уникальные решения при производстве
											</div>
											<div class="margin-top-large">
												<a class="button button-large button-bordered" href="#"><span>Спроектировать дверь</span></a>
											</div>
										</div>

										<div class="advantages-block-bg-right uk-position-absolute">
											<div class="advantages-block-bg-right-inner uk-height-1-1">
												<div class="advantages-block-bg-right-inner-bg uk-height-1-1"></div>
											</div>
										</div>

										<svg class="advantages-block-bg-right-triangle uk-position-absolute" viewBox="0 0 10 20">
											<polygon points="5.1,0 5.2,0 5.2,15 0.1,15"></polygon>
										</svg>


									</div>
								</div>
							</li>



						</ul>
						<div class="uk-dotnav-holder uk-position-absolute">
							<div class="uk-container uk-container-center">
								<div class="uk-width-1-2">
									<ul class="uk-dotnav uk-dotnav-simple uk-dotnav-advantages uk-flex uk-flex-center">
										<li data-uk-slideshow-item="0"></li>
										<li data-uk-slideshow-item="1"></li>
										<li data-uk-slideshow-item="2"></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</section>
		<section class="dignity-block">
			<div class="uk-container uk-container-center">
				<div class="dignity-block-head uk-flex uk-flex-left">
					<div class="dignity-block-title page-title">
						Почему стоит обратиться к нам
					</div>
					<div class="dignity-block-subtitle text-medium text-muted">
						Мы производим двери. Мы продаем двери. Мы любим двери.<br>
						Мы знаем о дверях все. Кратко о том как мы делаем двери.
					</div>
				</div>

				<div class="dignity-block-list uk-flex uk-flex-space-between">

					<div class="dignity-block-list-item uk-width-1-5 margin-top-large uk-text-center">
						<div class="dignity-block-list-item-icon dignity-block-list-item-icon-one"></div>

						<div class="dignity-block-list-item-title margin-top-large text-blue text-vollkorn h4">
							Организуем производство
						</div>

						<div class="dignity-block-list-item-text text-medium text-muted margin-top-medium">
							И исключаем из стоимости
							цену посредников
						</div>
					</div>

					<div class="dignity-block-list-item uk-width-1-5 margin-top-large uk-text-center">
						<div class="dignity-block-list-item-icon dignity-block-list-item-icon-two"></div>

						<div class="dignity-block-list-item-title margin-top-large text-blue text-vollkorn h4">
							Выбираем материалы
						</div>

						<div class="dignity-block-list-item-text text-medium text-muted margin-top-medium">
							Выбираем качественные
							материалы и фурнитуру
						</div>
					</div>

					<div class="dignity-block-list-item uk-width-1-5 margin-top-large uk-text-center">
						<div class="dignity-block-list-item-icon dignity-block-list-item-icon-three"></div>

						<div class="dignity-block-list-item-title margin-top-large text-blue text-vollkorn h4">
							Нанимаем профессионалов
						</div>

						<div class="dignity-block-list-item-text text-medium text-muted margin-top-medium">
							На производстве работает
							команда квалифицированных
							специалистов
						</div>
					</div>

					<div class="dignity-block-list-item uk-width-1-5 margin-top-large uk-text-center">
						<div class="dignity-block-list-item-icon dignity-block-list-item-icon-four"></div>

						<div class="dignity-block-list-item-title margin-top-large text-blue text-vollkorn h4">
							Заботимся о<br> клиенте
						</div>

						<div class="dignity-block-list-item-text text-medium text-muted margin-top-medium">
							Предоставляем вам
							лучший сервис и качество
							на каждом этапе
						</div>
					</div>

					<div class="dignity-block-list-item uk-width-1-5 margin-top-large uk-text-center">
						<div class="dignity-block-list-item-icon dignity-block-list-item-icon-five"></div>

						<div class="dignity-block-list-item-title margin-top-large text-blue text-vollkorn h4">
							Даем гарантию<br>
							6 месяцев
						</div>

						<div class="dignity-block-list-item-text text-medium text-muted margin-top-medium">
							Остаемся с вами
							и после установки двери
						</div>
					</div>
				</div>
				<div class="dignity-block-description">
					<div class="dignity-block-description-title page-title">
						Больше, чем магазин дверей
					</div>

					<div class="dignity-block-description-text text-medium margin-top-large">
						<div class="uk-grid">
							<div class="uk-width-1-1 uk-width-medium-1-2">
								<p>Для покупателей mirador.by – это возможность создать неповторимый интерьер квартиры, сделать обстановку дома уютной, пребывание гостей в офисе – комфортабельным. А для нас, команды mirador, двери – это объект искреннего интереса и увлечения. Поэтому мы неизменно растем и предлагаем реализовать новые возможности на рынке межкомнатных дверей.</p>

								<p>Наша команда предлагает вам межкомнатные двери с авторским дизайном. Мы предлагаем двери, опираясь на любые ваши пожелания. Цвет двери, ее рисунок ограничены только вашей фантазией. Мы постоянно развиваем собственные навыки и возможности производства. На сегодняшний день mirador.by – это фабрика полного цикла, выпускающая двери отличного качества. Но мы и дальше будем поднимать эту планку,</p>
							</div>

							<div class="uk-width-1-1 uk-width-medium-1-2">
								<p>улучшать материалы, модернизировать производство, чтобы всегда отвечать самым высоким стандартам.</p>

								<p>Не меньше чем о дизайне, мы думаем и о качестве дверей. Поэтому весь МДФ, из которого производятся двери, окрашен. Окраска приводит к практически полному устранению испарения связующих веществ. И материал становится безопаснее, чем натуральное дерево, из которого испаряются смолы.  Окрашенные, экологичные, с качественной фурнитурой двери от miradoor оставили довольными уже более 2 000 покупателей. Осчастливят и вас. Мы в этом уверены!</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>

        <footer class="footer">

			<div class="footer-nav">
				<div class="uk-container uk-container-center">
					<div class="uk-grid uk-grid-collapse uk-flex-middle">
						<div class="uk-width-3-10 uk-width-small-2-10 uk-width-medium-1-6 uk-width-large-2-10 uk-width-xlarge-1-6">
							<div class="uk-logo uk-flex-order-first-xlarge">
								<a href="/"><img src="images/logo.png" alt="logo"></a>
							</div>
						</div>

						<div class="uk-headerbar-right-holder uk-width-5-10 uk-width-small-7-10 uk-width-medium-4-6 uk-width-large-7-10 uk-width-xlarge-1-6 uk-flex-order-last-xlarge">
							<div class="uk-footer-nav-right">
								<div class="uk-footer-nav-phone uk-text-right">
									<a class="text-black h5 text-bold" href="tel:+375 (44) 741-24-74">+375(44)741-24-74</a>
								</div>

							</div>
						</div>

						<div class="uk-width-2-10 uk-width-small-1-10 uk-width-medium-1-6 uk-width-large-1-10 uk-width-xlarge-4-6 uk-navbar-holder">
							<div class="uk-navbar uk-width-1-1">
								<ul class="uk-navbar-nav uk-flex uk-flex-space-between uk-width-1-1">
									<li class="uk-parent" data-uk-dropdown="" aria-haspopup="true" aria-expanded="false">
										<a href="#">Каталог</a>
										<div class="uk-dropdown uk-dropdown-navbar uk-dropdown-bottom" aria-hidden="true" tabindex="">
											<ul class="uk-nav uk-nav-navbar">
												<li><a href="#">Двери</a></li>
												<li><a href="#">Перегородки</a></li>
												<li><a href="#">Фасады</a></li>
												<li><a href="#">Экраны на радиатор</a></li>
											</ul>
										</div>
									</li>

									<li><a href="#">Покупателям</a></li>
									<li><a href="#">Наши преимущества</a></li>
									<li class="uk-active"><a href="#">Акции</a></li>
									<li><a href="#">Как мы работаем</a></li>
									<li><a href="#">Партнерам</a></li>
									<li><a href="#">Контакты</a></li>
								</ul>
							</div>
							<button class="offcanvas_button" data-uk-offcanvas="{target:'#offcanvas-right'}">
								<span></span>
								<span></span>
								<span></span>
							</button>
						</div>
					</div>
				</div>
			</div>

			<div class="footer-bottom">
				<div class="uk-container uk-container-center">
					<div class="uk-grid">
						<div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-3-4 text-blue_light margin-bottom-medium">
							© <? echo date('Y');?>, ООО «Мирадор»
						</div>
						<div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-4 margin-bottom-medium">
							<div class="medialine-copyrate text-blue_light">
								Разработано - <a class="text-blue_light" href="http://www.medialine.by/" target="_blank">Медиа Лайн</a>
								<?/*Разработано - <a class="text-contrast" href="http://www.medialine.by/" target="_blank"<? if ($APPLICATION->GetCurPage(false) !== '/'){ echo ' rel="nofollow"'; } ?>>Медиа Лайн</a>*/?>
							</div>
						</div>
					</div>
				</div>
			</div>
        </footer>

		<div id="offcanvas-right" class="uk-offcanvas">
			<div class="uk-offcanvas-bar">
				<a href="#" onclick="jQuery.UIkit.offcanvas.hide();" class="uk-close uk-offcanvas-close" data-uk-offcanvas=""></a>

				<form class="uk-search uk-search-offcanvas">
					<div class="uk-flex uk-flex-space-between">
						<div class="form-control uk-width-1-1">
							<input name="search" type="text" placeholder="Введите текст для поиска">
						</div>
						<button class="button button-small button-search"></button>
					</div>
				</form>

				<ul class="uk-nav uk-nav-offcanvas margin-top-medium" data-uk-nav>

					<li class="uk-parent">
						<a href="#">Каталог</a>
						<ul class="uk-nav-sub">
							<li><a href="#">Двери</a></li>
							<li><a href="#">Перегородки</a></li>
							<li><a href="#">Фасады</a></li>
							<li><a href="#">Экраны на радиатор</a></li>
						</ul>
					</li>

					<li><a href="#">Покупателям</a></li>
					<li><a href="#">Наши преимущества</a></li>
					<li><a href="#">Акции</a></li>
					<li><a href="#">Как мы работаем</a></li>
					<li><a href="#">Партнерам</a></li>
					<li><a href="#">Контакты</a></li>

				</ul>


			</div>
		</div>

	</body>

</html>



















<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Сахарчук Вадим</title>
	<meta name="description" contant>
	<meta name="Vadym" content>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/media.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
</head>
<body>
	 <header id="up"	class="header" style="background-image: url(img/0-header.jpg);">
	 	<div class="header-logo">
	 		<div class="logo-menu">
	 			<a href="#menu" class="menu-link">
				<span></span>
				</a>
	 		</div>
	 			
	 	</div>
	 
		<div class="menu">
			<ul>
			<li><a href="#about">Обо мне</a></li>
			<li><a href="#skills">Мои навыки</a></li>
			<li><a href="#work">Мои работы</a></li>
			<li><a href="#auth">Сотрудничество</a></li>
			<li><a href="#testimonials">Отзывы обо мне</a></li>
			<li><a href="#contacts">Контакты</a></li>
			</ul>
		</div>
		<div class="header-content">
			<h1 class="animated fadeInUp">Вадим Сахарчук</h1>
			<span  class="wow fadeInUp" data-wow-delay="0.3s">Розработчик интернет-сайтов, лендингов, сайтов под ключ</span>
			<div class="header-buttons  wow fadeInUp" data-wow-delay="0.5s">
						<a href="#about"><button class="but-one animated fadeInUp">Обо мне</button></a>
						<a href="#contacts"><button class="but-two animated fadeInUp">Связатся</button></a>
			</div>
		</div>
			<a href="#overlay"	class="button-call"></a>
		<div class="overlay" id="overlay">
			<div class="call">
			<div class="closer" title="Закрыть">&times;</div>
			<h2>Заказать звонок</h2>
			<form action="mailer/smart.php" method="POST" class="overlay-form">
				<label for="#user_phone">Введіть Ваш номер телефону</label>
				<input type="tel" name="user_phone" placeholder="+380 XXX XXX X" id="user_phone">
				<label for="#user_name">Введіть Ваше ім'я</label>
				<input type="tel" name="user_name" placeholder="Введите Ваше имя" id="user_name" class="user_name">
				<p><span id="userName"></span>Я перезвоню Вам в ближайшее время!</p>
				<button class="button-go" type="submit">Позвоните мне!</button>
			</form>
		</div>
		</div>
	 </header>
		<section class="about-me_section" id="about">
			<h2 class="wow fadeInUp">КТО Я ТАКОЙ?</h2>
			<span class="wow fadeInUp" data-wow-delay="0.3s">Професиональный веб-розработчик, создатель сайтов <br>с нуля до выгрузки на хостинг</span>
			<p class="wow fadeInUp" data-wow-delay="0.4s">Меня зовут Вадим, я фрилансер, веб-разработчик. Люблю создавать хорошую и интуитивно понятную логику сайтов. Пишу хорошо структурирован, валидный и чистый код с использованием современных технологий. Мне нравится превращать сложные проблемы в простые, моя миссия - помочь Вашему бизнесу стимулировать продажи и повысить прибыльность.</p>
			<div class="about-me_items">
				<div class="about-me_item-top">
					<div class="about-me_item wow fadeInUp" data-wow-delay="0.3s">
						<span><img src="img/check-mark.svg" alt="">Цена</span>
						<p>Каждый проект индивидуален и цены могут кардинально отличаться. Можете быть уверены, что цены полностью соответствуют качеству и рыночным ценам. Гарантирую 100% отработки ваших денег. Свяжитесь со мной - обсудим.</p>
					</div>
					<div class="about-me_item wow fadeInUp" data-wow-delay="0.3s">
						<span><img src="img/check-mark.svg" alt="">Качество</span>
						<p>Современный и интуитивно понятный дизайн. Понятный, чистый, валидный код, который соответствует всем современным стандартам. Адаптивная верстка - Ваш сайт будет правильно отображаться на всех доступных устройствах, от мобильных телефонов до ПК.</p>
					</div>
				</div>
				<div class="about-me_item_bottom">
					<div class="about-me_item  wow fadeInUp" data-wow-delay="0.3s">
						<span><img src="img/check-mark.svg" alt="">Опыт</span>
						<p>Разработкой сайтов занимаюсь с 2018 года, несколько реалызованих проектов. Посмотрите мое портфолио и обнаружите, что большая часть проектов реализована для постоянных заказчиков, а они очень требовательны. Несмотря на огромную конкуренцию среди фрилансеров они продолжают доверять мне.</p>
					</div>
					<div class="about-me_item  wow fadeInUp" data-wow-delay="0.3s">
						<span><img src="img/check-mark.svg" alt="">Конкретные сроки</span>
						<p>После обсуждения Вашего проекта я распишу все этапы разработки и четко обозначу сроки на каждый этап. Можете быть уверены - проект будет сдан вовремя, в оговоренные сроки. В случае просрочки по моей вине - Вас ждет скидка! Но сомневаюсь, что Вам так повезет)</p>
					</div>	
				</div>
			</div>
		</section>
		<section class="my-skills_section" id="skills">
			<h2  class="wow fadeInUp">МОИ НАВЫКИ</h2>
			<span class="wow fadeInUp" data-wow-delay="0.3s">При разработке сайтов используется много современных технологий и специальных приложений</span>
			<div class="my-skills_section-items">
				<div class="my-skills_one">
					<div class="my-skills_section-item   wow fadeInUp" data-wow-delay="0.3s">
						<span><img src="img/wordpress-logo.svg" alt="WordPress">WordPress</span>
						<p>Ему доверяют лучшие 31% всех сайтов мира работают на WordPress, от личных блогов до крупнейших агентств. Мощные функции и бесконечные возможности. С ним Ваше управление сайтом станет легким как никогда.</p>
					</div>
					<div class="my-skills_section-item   wow fadeInUp" data-wow-delay="0.3s">
						<span><img src="img/css-3-logo.svg" alt="Css/Css3/Sass">Css/Css3/Sass</span>
						<p>Специальный язык, используемый для описания внешнего вида страниц, написанных на языках разметки данных. Используется современная версия и полезные предпроцесоры.</p>
					</div>
				</div>
				<div class="my-skills_two">
					<div class="my-skills_section-item   wow fadeInUp" data-wow-delay="0.3s">
						<span><img src="img/html-5-logo.svg" alt="Html/Html5">Html/Html5</span>
						<p>Cтандартный язык разметки веб-страниц в Интернете. Большинство веб-страниц создаются при помощи языка HTML. Использование валидности и чистоты кода присутствует.</p>
					</div>
					<div class="my-skills_section-item   wow fadeInUp" data-wow-delay="0.3s">
						<span><img src="img/js.svg" alt="JavaScript/jQuery">JavaScript/jQuery</span>
						<p>Чаще всего используется для создания сценариев веб-страниц, позволяет на стороне клиента взаимодействовать с пользователем, управлять браузером. Верстка станет отзывчивой и более динамичной.</p>
					</div>

				</div>
				<div class="my-skills_thre">
					<div class="my-skills_section-item   wow fadeInUp" data-wow-delay="0.3s">
						<span><img src="img/cube.svg" alt="UI/UX Design">UI/UX Design</span>
						<p>Благодаря сотрудничеству с коллегами-дизайнерами, вы можете рассчитывать на современный дизайн по вашим требованиям (только проверенные и высокопрофессиональные люди).</p>
					</div>
					<div class="my-skills_section-item   wow fadeInUp" data-wow-delay="0.3s">
						<span><img src="img/responsive.svg" alt="Адаптивня верстка">Адаптивня верстка</span>
						<p>Адаптивная верстка позволяет зделать так, что сайт будет качественно и удобно отображаться на разных устройствах, таких как: персональные компьютеры, ноутбуки, планшеты, смартфоны.</p>
					</div>

				</div>	
		</section>
		<section class="my-works_section" id="work">
			<span class=" wow fadeInUp" data-wow-delay="0.3s">МОИ РАБОТЫ</span>
			<p class=" wow fadeInUp" data-wow-delay="0.3s">Здесь собраны и подробно описаны наиболее интересные проекты, разработаны мной.</p>
			<div class="line"></div>
			<div class="works">
				<div class="works-one">
					<div class="works-item-one  wow fadeInUp" data-wow-delay="0.3s"><img src="img/1.jpg" alt="my site exemple"></div>
					<div class="works-item-two  wow fadeInUp" data-wow-delay="0.5s"><img src="img/2.jpg" alt="my site exemple"></div>
				</div>
				<div class="works-two">
					<div class="works-item-three  wow fadeInUp" data-wow-delay="0.3s"><img src="img/3.jpg" alt="my site exemple"></div>
					<div class="works-item-four  wow fadeInUp" data-wow-delay="0.5s"><img src="img/4.jpg" alt="my site exemple"></div>
				</div>
				<div class="works-three">
					<div class="works-item-five  wow fadeInUp" data-wow-delay="0.3s"><img src="img/5.jpg" alt="my site exemple"></div>
					<div class="works-item-six  wow fadeInUp" data-wow-delay="0.5s"><img src="img/6.jpg" alt="my site exemple"></div>
				</div>
			</div>
		</section>
		<section class="auth-section" id="auth">
			<h2 class=" wow fadeInUp" data-wow-delay="0.3s">Сотрудничество</h2>
			<p class=" wow fadeInUp" data-wow-delay="0.3s">С чем ведется работа</p>
			<div class="auth-container">
			<div class="auth-top">
				<span class=" wow fadeInUp" data-wow-delay="0.1s">Chrome</span>
				<span class=" wow fadeInUp" data-wow-delay="0.3s">Opera</span>
				<span class=" wow fadeInUp" data-wow-delay="0.5s">Sublime Text3</span>
				<span class=" wow fadeInUp" data-wow-delay="0.7s">Photoshop</span>
			</div>
			<div class="auth-bottom">
				<span class=" wow fadeInUp" data-wow-delay="0.9s">Yandex</span>
				<span class=" wow fadeInUp" data-wow-delay="1.1s">Internet Explorer</span>
				<span class=" wow fadeInUp" data-wow-delay="1.3s">Mozilla</span>
				<span class=" wow fadeInUp" data-wow-delay="1.5s">Google</span>
				<span class=" wow fadeInUp" data-wow-delay="1.7s">Safari</span>
			</div>
		</div>	
		</section>
		<section class="testimonials-section" id="testimonials">
			 <div id="quote-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 offset-sm-2">
                                        <p class="testi">Огромное спасибо за профессиональную работу, за постоянную
                                        коммуникацию, а так же за ответственное отношение к делу! Бесконечно
                                    	приятно работать с таким человеком! Спасибо!!!</p>
                                        <div class="text-center">
                                            <h4 class="text-org">Коломиец Настя</h4>
                                            <h5 class="text_dark">Предпренематель</h5>
                                        </div>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <div class="carousel-item item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 offset-sm-2">
                                        <p class="testi">Это настоящий профессионал своего дела! Очень рад, что
                                        выбрал именно его для нашей работы. Работа сделана очень оперативно, в
                                    	выходные дни, и самое главное - качественно!</p>
                                        <div class="text-center"><i class="fa fa-caret-down down-ar"></i></div>
                                        <div class="text-center">
                                            <h4 class="text-org">Частное лицо</h4>
                                            <h5 class="text_dark">Бизнес</h5></div>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <div class="carousel-item item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 offset-sm-2">
                                        <p class="testi">Спасибо за быстрою и качественную работу! Верстка
                                        сделана с точностью по макету, учтены все малейшие детали! 
                                    	Обязательно, будем обращаться еще</p>
                                        <div class="text-center"><i class="fa fa-caret-down down-ar"></i></div>
                                        <div class="text-center">
                                            <h4 class="text-org">Дениевский Артур</h4>
                                            <h5 class="text_dark">Интернет-магазин</h5>
                                        </div>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>

                    <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0"   class="active wow fadeInUp" data-wow-delay="0.3s">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="1" class=" wow fadeInUp" data-wow-delay="0.5s">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="2" class=" wow fadeInUp" data-wow-delay="0.7s">
                        </li>
                    </ol>
                    </a>

                </div>
            </div>
        </section>
<footer class="footer" id="contacts">
	<h2 class=" wow fadeInUp" data-wow-delay="0.3s">ОСТАВАЙТЕСЬ НА СВЯЗИ</h2>
	<p class=" wow fadeInUp" data-wow-delay="0.3s">Не стесняйтесь обращаться ко мне з <br> любыми идеями проекта или сотрудничества</p>
	<div class="line"></div>
	<a href="#up" class="button-up wow fadeInUp" data-wow-delay="0.3s" title="Вверх"></a>
	<div class="footer-social">
		<span class=" wow fadeInUp" data-wow-delay="0.1s">Нововолынск</span>
		<span class=" wow fadeInUp" data-wow-delay="0.3s">Украина, Волынская обл.</span>
		<span class=" wow fadeInUp" data-wow-delay="0.5s">+380639072158</span>
		<span class="span wow fadeInUp" data-wow-delay="0.7s">Все права защищены <div class="copy">&copy;</div></span>
	</div>
	<div class="footer-social-buttons">
		<a href="https://www.facebook.com/profile.php?id=100010035034611" class=" wow fadeInUp" data-wow-delay="0.1s" target="_blank" title="facebook"><img src="img/facebook-logo.svg" alt="facebook"></a>
		<a href="mailto:hellstaff686@gmail.com" class=" wow fadeInUp" data-wow-delay="0.3s" target="_blank"><img src="img/google-plus.svg" alt="google+" title="google+"></a>
		<a href="https://www.instagram.com/hellstaff_vs/" class=" wow fadeInUp" data-wow-delay="0.5s" target="_blank" title="instagram"><img src="img/instagram-logo.svg" alt="instagram"></a>
		<a href="https://vk.com/id164746113" class=" wow fadeInUp" data-wow-delay="0.7s" target="_blank" title="vk"><img src="img/vk-social-logotype.svg" alt="vk"></a>
	</div>
</footer>



































		







	
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<script src="js/modernizr-3.5.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="js/script.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-3.2.1.slim.min.js"><\/script')</script>
	 	<script>
	$(document).ready(function(){
		$('.button-call').on("click", function(){
		$('.overlay').show();
	})

		$('.closer').on("click", function(){
		$('.overlay').hide();
	});
			$('.button-go').on("click", function(){
		$('.overlay').hide();
	});
});

	$('.user_name').keyup(function(){
		$('#userName').text($(this).val() + '! ');
	});

	</script>
	<script>
		$(document).ready(function(){
			var link = $('.menu-link');
			var link_active = $('.menu-link__active');
			var menu = $('.menu');
			var nav_link = $('.menu a');
			var button = $('.but-one');
			var buttonTwo = $('.but-two');

				button.mouseover(function(){
				buttonTwo.css("background-color", "#F0650D");
				button.css("background-color", "grey");
			});
				button.mouseout(function(){
				buttonTwo.css("background-color", "grey");
				button.css("background-color", "#F0650D");
			});

				buttonTwo.mouseover(function(){
				button.css("background-color", "grey");
				buttonTwo.css("background-color", "#F0650D");
			});
				buttonTwo.mouseout(function(){
				button.css("background-color", "#F0650D");
				buttonTwo.css("background-color", "grey");
			});

			link.click(function(){
				link.toggleClass('menu-link__active');
				menu.toggleClass('menu_active');
			});
			nav_link.click(function(){
				link.toggleClass('menu-link__active');
				menu.toggleClass('menu_active');
			});
		});
	</script>
</body>
</html>
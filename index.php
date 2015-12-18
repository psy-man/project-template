<?php  
	
	$title = "Мы ищем Веб Разработчика";
	$description = "EVNE Developers ищет Веб Разработчика в городе Кировоград";
	$keywords = "EVNE Developers, EVNE, Работа программиста в Кировограде, Веб разработчик Кировоград";
	$socialTitle = "EVNE Developers ищет Веб Разработчика в городе Кировоград";

	$siteUrl = "http://hr.evne.su";

	$shareTitle = 'EVNE Developers';
	$shareDescription = $title;

	$twitter = "http://twitter.com/share?url=&text=' + text, 'tshare', 'height=400,width=550,resizable=1,toolbar=0,menubar=0,status=0,location=0";
	$odnoklassniki = "http://www.odnoklassniki.ru/dk?st.cmd=addShare&st._surl=http://www.youtube.com/watch?v=b9xBAtCsCTQ"
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<meta name="description" content="<?= $description ?>"/>
	<meta name="keywords" content="<?= $keywords ?>">
	<meta name="author" content="EVNE">

	<title><?= $title ?></title>

	<!-- OPEN GRAPH META TAGS -->
	<meta property="og:site_name" content="<?= $socialTitle ?>"/>
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="<?= $shareTitle ?>"/>
	<meta property="og:description" content="<?= $description ?>"/>
	<meta property="og:url" content="<?= $siteUrl ?>"/>

	<meta property="og:image" content="<?= $siteUrl ?>/favicon.png#keepProtocol">
	<meta property="og:image:width" content="200"/>
	<meta property="og:image:height" content="200"/>

	<meta itemprop="image" content="<?= $siteUrl ?>/favicon.png"/>

	<link rel="image_src" type="image/png" href="<?= $siteUrl ?>/favicon.png" />


	<!-- TWITTER META TAGS -->
	<meta name="twitter:card" content="summary"/>
	<meta name="twitter:title" content="<?= $title ?>"/>
	<meta name="twitter:description" content="<?= $description ?>"/>
	<meta name="twitter:image:src" content="<?= $siteUrl ?>/favicon.png#keepProtocol">

	<!-- LINK META TAGS -->
	<link rel="canonical" href="<?= $siteUrl ?>"/>
	<link rel="apple-touch-icon" type="image/x-icon" href="/favicon.png">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.png">

	
	<?php if ($_GET['dev']): ?>
		<link rel="stylesheet" type="text/css" href="/css/common.css">
	<?php else: ?>
		<link rel="stylesheet" type="text/css" href="/dist/css/common.min.css">
	<?php endif ?>

	

	<script>
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-70818369-1']);
		_gaq.push(['_trackPageview']);
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>

	<!-- Yandex.Metrika counter --><script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter33862124 = new Ya.Metrika({ id:33862124, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/33862124" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
</head>
<body ng-app="Hr">


	<div class="bg-1"></div>
	<div class="bg-2" data-0="background-position: 0px 0px;" data-end="background-position: 0px 2000px;"></div>

	<header>
		<h1>Мы ищем Веб Разработчика</h1>
		<div class="triangle" data-0="opacity: .4; transform: translateY(-350px) scale(.8) translateZ(0px);" data-100="opacity: 1; transform: translateY(0px) scale(1) translateZ(0px);"></div>
		<div class="find find-1" data-0="opacity: 1; transform: translateY(-100px) translateZ(0px);" data-100="opacity: 1; transform: translateY(0px) translateZ(0px);"></div>
		<div class="find find-2" data-0="opacity: 1; transform: translateY(50px) translateZ(0px);" data-100="opacity: 1; transform: translateY(0px) translateZ(0px);"></div>
		<div class="find find-3" data-0="opacity: 1; transform: translateY(150px) translateZ(0px);" data-100="opacity: 1; transform: translateY(0px) translateZ(0px);"></div>
	</header>

	<section class="computer" id="computer">
		<div class="holder">
			<video id="screen" class="video-js" preload width="743" height="512" poster="/video/lcd.jpg" webkit-playsinline>
			    <source src="/video/lcd_converted.mp4" type='video/mp4'>
			</video>
		</div>
	</section>

	<section class="circle">
		<div class="circle-bg"></div>

		<div class="line line1" data-1500="transform: translateY(100px) translateZ(0px);" data-2600="transform: translateY(-100px) translateZ(0px);"></div>
		<div class="line line2" data-1500="transform: translateY(0px) translateZ(0px);" data-2600="transform: translateY(350px) translateZ(0px);"></div>
		

		<div class="line line1 l" data-1500="transform: translateY(-100px) translateZ(0px);" data-2600="transform: translateY(100px) translateZ(0px);"></div>
		<div class="line line2 l" data-1500="transform: translateY(0px) translateZ(0px);" data-2600="transform: translateY(-350px) translateZ(0px);"></div>
		

		<div class="cross" data-1500="transform: translateY(0px) translateZ(0px);" data-2600="transform: translateY(400px) translateZ(0px);"></div>
		<div class="cross l" data-1500="transform: translateY(500px) translateZ(0px);" data-2600="transform: translateY(50px) translateZ(0px);"></div>

		<h2 class="circle-title">
			В нашей компанни тебя ждет
		</h2>

		<ul class="features">
			<li>
				<i class="icon icon-salary"></i>
				<div class="shadow"></div>
				<p>Высокий уровень ЗП</p>
			</li>
			<li>
				<i class="icon icon-place"></i>
				<div class="shadow"></div>
				<p>Удобное рабочее место</p>
			</li>
			<li>
				<i class="icon icon-projects"></i>
				<div class="shadow"></div>
				<p>Интересные проекты</p>
			</li>
			<li>
				<i class="icon icon-friends"></i>
				<div class="shadow"></div>
				<p>Дружелюбный Коллектив</p>
			</li>
		</ul>

		<div class="what" ng-controller="PostsController">

			<div class="select" ng-class="{opened: selectOpened}">
                <span class="selected" ng-click="openSelect()">{{ selectedPost.title }}</span>
                <ul>
	                <li ng-repeat="post in posts track by post.id" ng-click="select(post)" ng-if="post != selectedPost">{{ ::post.title }}</li>
	            </ul>
                <span class="open">
                    <i></i>
                </span>
            </div>

            <div class="lists">
            	<div class="list list-programmer">
            		<ul ng-bind-html="leftList"></ul>
            		<ul ng-bind-html="rightList"></ul>
            	</div>
            </div>

            <div class="personal">
            	<h3>Личные качества</h3>
            	<p>Целеустремленность, ответственность, умение работать в команде</p>
            </div>
		</div>
	</section>

	<section class="about-you">Эсли это о тебе</section>
	
	<section class="interview-container">
		<section class="interview" ng-controller="FormController">
			<audio controls id="nyan">
			  	<source src="5c956e4bd794.mp3" type="audio/mpeg">
			</audio>

			<div class="interview-title">
				запишись на собеседование
				<div class="light light-1"></div>
				<div class="light light-2"></div>
				<div class="light light-3"></div>
			</div>

			<!-- <div class="brain"></div> -->
				
			<form name="form.sendForm" method="post" enctype="multipart/form-data" novalidate>

				<div class="input" ng-class="{'success': form.sendForm.fio.$valid, 'error': form.sendForm.fio.$invalid && submited}">
					<input name="fio" type="text" placeholder="Ф.И.О" ng-model="fio" ng-pattern="/^[a-zA-Zа-яА-ЯёЁ \-]+$/" autocomplete="off" required>
					<i class="check"></i>
	                <i class="uncheck"></i>
				</div>

				<div class="input" ng-class="{'success': form.sendForm.phone.$valid, 'error': form.sendForm.phone.$invalid && submited}">
					<input name="phone" type="text" placeholder="Ваш телефон" ng-model="phone" ui-mask="+38 (999) 999-99-99"  ui-mask-placeholder ui-mask-placeholder-char="_" autocomplete="off" required>
					<i class="check"></i>
	                <i class="uncheck"></i>
				</div>

				<div class="input" ng-class="{'success': form.sendForm.email.$valid, 'error': form.sendForm.email.$invalid && submited}">
					<input name="email" type="email" placeholder="Ваш e-mail" ng-model="email" autocomplete="off" required>
					<i class="check"></i>
	                <i class="uncheck"></i>
				</div>

				<div class="form-group">
				    <div class="bot-title">На должность</div>

				    <div class="select-container">
				    	<div class="select" ng-class="{opened: selectOpened}">
			                <span class="selected" ng-click="openSelect()">{{ selectedPost.title }}</span>
			                <ul>
				                <li ng-repeat="post in posts track by post.id" ng-click="select(post)" ng-if="post != selectedPost">{{ ::post.title }}</li>
				            </ul>
			                <span class="open">
			                    <i></i>
			                </span>
			            </div>
				    </div>

				    <div class="file">
				        <span class="fake-file">
				            <input type="file" ngf-select 
				            	ng-model="file" 
				            	name="file" 
				            	ngf-max-size="5MB"
				            	ngf-pattern="'.png,.jpg,.gif,.psd,.doc,.docx,.ppt,.pptx,.pdf,.rtf,.txt'"
				            >
				            <span class="info" ng-if="form.sendForm.file.$valid">{{file.name ? file.name : 'не более 5 мб . . . . . . . .'}}</span>
				            <span class="info error" ng-if="form.sendForm.file.$error.maxSize">Файл слишком большой</span>
				            <span class="info error" ng-if="form.sendForm.file.$error.pattern">Неверный формат файла</span>
				        </span>
				    </div>

				    
				    

				</div>

				<button type="submit" ng-click="uploadPic(file)">Отправить</button>
			</form>
		</section>
	</section>

	<section class="socials-bot">
		<script>
			function popupwindow(url, title, w, h) {
			  var left = (screen.width/2)-(w/2);
			  var top = (screen.height/2)-(h/2);
			  return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
			}

			function shareFacebook() {
			  	popupwindow('http://facebook.com/sharer.php?u=<?= $siteUrl ?>', 'fbshare', 660, 380);
			}

			function shareTwitter() {
			  	popupwindow('http://twitter.com/share?url=<?= $siteUrl ?>&counturl=<?= $siteUrl ?>&text=<?= $description ?>', 'tshare', 500, 400);  
			}

			function shareVkontakte() {
			  	popupwindow('http://vkontakte.ru/share.php?url=<?= $siteUrl ?>&image=<?= $siteUrl ?>/favicon.png&title=<?= $shareTitle ?>&description=<?= $shareDescription?>', 'vkshare', 660, 380);
			}

			function shareOdnoklasniki() {
			  	popupwindow('http://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1&st._surl=<?= $siteUrl ?>&st.comments=<?= $description ?>', 'okshare', 660, 380);
			}
		</script>
		<ul>
			<li><a href="javascript:void(0)" onclick="shareVkontakte()" class="vk"></a></li>
			<li><a href="javascript:void(0)" onclick="shareTwitter()" class="tw"></a></li>
			<li><a href="javascript:void(0)" onclick="shareFacebook()" class="fb"></a></li>
			<li><a href="javascript:void(0)" onclick="shareOdnoklasniki()" class="ok"></a></li>
		</ul>
		
	</section>
	
	<footer>
		<div class="footer-inside">
			<div class="footer-l-r footer-left-items">
			   	<div class="footer-qrcode"></div>
			   	<div class="footer-copyrights">
			     	<div class="company-name">
			      		EVNE Developers <span class="ng-binding">© 2010 - <?php echo date('Y'); ?></span>
			     	</div>
			     	<div class="copyright-text">Все права защищены</div>
			   </div>
			</div>

			<div class="footer-l-r footer-right-items">
			    <div class="socials">
			      	<div class="title">Мы в социальных сетях:</div>

			      	<a target="_blank" ng-href="http://vk.com/evne_developers"  href="http://vk.com/evne_developers">
			        	<div class="vk social"><span></span></div>
			      	</a>

			      	<a target="_blank" ng-href="http://facebook.com/groups/evnedev/" href="http://facebook.com/groups/evnedev/">
			        	<div class="fb social"><span></span></div>
			      	</a>

			      	<a target="_blank" ng-href="http://twitter.com/evnedev" href="http://twitter.com/evnedev">
			        	<div class="tw social"><span></span></div>
			      	</a>

			      	<a target="_blank" ng-href="//plus.google.com/106473267402312361695" data-ng-if="global.lang == 'ru'" class="ng-scope" href="//plus.google.com/106473267402312361695">
			        	<div class="ok social"><span></span></div>
			      	</a>
			    </div>

			    <div class="footer-separator"></div>

			    <div class="footer-pdf">
			      	<div class="pdf-text">
			        	<a target="_blank" class="pdf-title" href="/evne.pdf">Презентация агентства</a>
			        	<div class="pdf-subtitle">(в формате pdf)</div>
			      	</div>
			      	<a target="_blank" href="/evne.pdf"><div class="pdf-icon"></div></a>
			    </div>
			</div>
		</div>
	</footer>

	

	<script type="text/ng-template" id="success">
	    <div class="ngdialog-message">
			<h2>Ваша заявка отправлена</h2>
			<div class="nyan">
				<div class="rainbow"></div>
				<div class="mail"></div>
			</div>
		</div>
		<div class="sound" ng-click="mute()" ng-class="{mute: isMuted}"></div>
	</script>

	<?php if ($_GET['dev']): ?>
		<script src="/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
		<script src="/bower_components/angular/angular.min.js" type="text/javascript"></script> 
		<script src="/bower_components/angular-sanitize/angular-sanitize.min.js" type="text/javascript"></script>
		<!-- // <script src="/bower_components/angular-animate/angular-animate.min.js" type="text/javascript"></script> -->
		<script src="/bower_components/ng-dialog/js/ngDialog.min.js" type="text/javascript"></script>
		<script src="/bower_components/angular-ui-mask/dist/mask.min.js" type="text/javascript"></script>

		<script src="/bower_components/ng-file-upload-shim/ng-file-upload.min.js" type="text/javascript"></script>

		<script src="/bower_components/jquery.easing/js/jquery.easing.min.js" type="text/javascript"></script>
		<script src="/bower_components/skrollr/dist/skrollr.min.js" type="text/javascript"></script>

		<script src="/js/main.js" type="text/javascript"></script>
		<script src="/js/app.js" type="text/javascript"></script>


	<?php else: ?>
		<script src="/dist/js/app.min.js"></script>
	<?php endif ?>
	
</body>
</html>
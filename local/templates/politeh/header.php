<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
global $APPLICATION;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <?
    $APPLICATION->ShowHead();
    
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/swiper.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.fancybox.js');
	
	$APPLICATION->SetAdditionalCSS('https://fonts.googleapis.com');
    $APPLICATION->SetAdditionalCSS('https://fonts.gstatic.com');
    $APPLICATION->SetAdditionalCSS('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');
	
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/fonts/stylesheet.css');
	
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/jquery.fancybox.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/swiper.min.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/style.css');
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/custom.css');
	
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/script.js');
    ?>
   
</head>
<body>
 <header class="header">
 <? $APPLICATION->ShowPanel(); ?>
    <div class="header-top">
		<div class="header-top-left">
			<div class="header-burger">
				<button class="burger-button"><span></span></button>
				<?/*
				<div class="header_mobile_top_menu">
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						"blue_menu", 
						array(
							"ROOT_MENU_TYPE" => "topmob",
							"MAX_LEVEL" => "1",
							"CHILD_MENU_TYPE" => "topmob",
							"USE_EXT" => "Y",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_USE_GROUPS" => "N",
							"MENU_CACHE_GET_VARS" => array(
							),
							"COMPONENT_TEMPLATE" => "blue_menu"
						),
						false
					);?>
				</div>
				*/?>
			</div>
			<?$APPLICATION->IncludeComponent(
				"bitrix:menu", 
				"top_menu", 
				array(
					"ROOT_MENU_TYPE" => "topmob",
					"MAX_LEVEL" => "1",
					"CHILD_MENU_TYPE" => "topmob",
					"USE_EXT" => "Y",
					"DELAY" => "N",
					"ALLOW_MULTI_SELECT" => "N",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_USE_GROUPS" => "N",
					"MENU_CACHE_GET_VARS" => array(
					),
					"COMPONENT_TEMPLATE" => "blue_menu"
				),
				false
			);?>
		</div>
		<div class="header-top-right">
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list", 
				"social_list", 
				array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"ADD_SECTIONS_CHAIN" => "N",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "A",
					"CHECK_DATES" => "Y",
					"DETAIL_URL" => "",
					"DISPLAY_BOTTOM_PAGER" => "N",
					"DISPLAY_DATE" => "N",
					"DISPLAY_NAME" => "N",
					"DISPLAY_PICTURE" => "N",
					"DISPLAY_PREVIEW_TEXT" => "N",
					"DISPLAY_TOP_PAGER" => "N",
					"FIELD_CODE" => array(
						0 => "",
						1 => "",
					),
					"FILTER_NAME" => "",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"IBLOCK_ID" => "5",
					"IBLOCK_TYPE" => "site_settings",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"INCLUDE_SUBSECTIONS" => "N",
					"MESSAGE_404" => "",
					"NEWS_COUNT" => "20",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_TEMPLATE" => ".default",
					"PAGER_TITLE" => "Социальные сети",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"PREVIEW_TRUNCATE_LEN" => "",
					"PROPERTY_CODE" => array(
						0 => "EXTERNAL_REF",
						1 => "",
					),
					"SET_BROWSER_TITLE" => "N",
					"SET_LAST_MODIFIED" => "N",
					"SET_META_DESCRIPTION" => "N",
					"SET_META_KEYWORDS" => "N",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "N",
					"SHOW_404" => "N",
					"SORT_BY1" => "SORT",
					"SORT_BY2" => "ACTIVE_FROM",
					"SORT_ORDER1" => "ASC",
					"SORT_ORDER2" => "DESC",
					"STRICT_SECTION_CHECK" => "N",
					"COMPONENT_TEMPLATE" => "social_list"
				),
				false
			);?>
			<a href="javascript:;" class="header-special-needs">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/eye.svg" alt="">
			</a>
			<div class="header-language">
				<button class="header-language-current">
					<span class="active_language">ru</span>
					<img class="active_language_img" src="<?=SITE_TEMPLATE_PATH?>/img/down-arrow.svg" alt="">
				</button>
				<div class="language_block">
					<div class="lang_elem" id="ru_lang">ru</div>
					<div class="lang_elem" id="eng_lang">eng</div>
				</div>
			</div>
		</div>
    </div>
    <div class="header-middle">
		<a href="/" class="header-logo">
			<img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="">
			<span>ВЯТСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ</span>
		</a>
		<div class="header-middle-wrap">
			<form action="#" class="header-search">
				<input type="text" name="" id="" placeholder="Что-то ищете? Введите слово">
				<button type="submit"><img src="<?=SITE_TEMPLATE_PATH?>/img/magnifying-glass.svg" alt=""></button>
			</form>
			<a href="/infostend/" class="about-educational">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/information.svg" alt="">
				<span>Сведения об <br> образовательной организации</span>
			</a>
			<a href="javascript:;" class="lk">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/user.svg" alt="">
				<span>Личный <br> кабинет</span>
			</a>
		</div>
    </div>
	<div class="header-bottom">
		<ul class="header-list">
			<li class="header-list__item sub"><a href="javascript:;" class="header-list__link">О ВятГУ</a>
				<div class="header-list-submenu">
					<span class="title">О вятгу</span>
					<ul class="header-sublist">
						<li class="header-sublist__item"><a href="javascript:;" class="header-sublist__link">Университет в цифрах</a></li>
						<li class="header-sublist__item"><a href="/infostend/" class="header-sublist__link">Сведения об образовательной организации</a></li>
						<li class="header-sublist__item"><a href="javascript:;" class="header-sublist__link">Часто задаваемые вопросы</a></li>
						<li class="header-sublist__item"><a href="javascript:;" class="header-sublist__link">Миссия и Стратегия</a></li>
						<li class="header-sublist__item"><a href="javascript:;" class="header-sublist__link">Сотрудничество</a></li>
						<li class="header-sublist__item"><a href="/history/" class="header-sublist__link">История Университета</a></li>
						<li class="header-sublist__item"><a href="javascript:;" class="header-sublist__link">ВятГУ на карте</a></li>
						<li class="header-sublist__item"><a href="/leadership/" class="header-sublist__link">Руководство</a></li>
						<li class="header-sublist__item"><a href="javascript:;" class="header-sublist__link">Контакты</a></li>
						<li class="header-sublist__item"><a href="/personalii/" class="header-sublist__link">Персоналии</a></li>
						<li class="header-sublist__item"><a href="javascript:;" class="header-sublist__link">Обращения граждан и организаций</a></li>
					</ul>
				</div>
			</li>
			<li class="header-list__item"><a href="javascript:;" class="header-list__link">Поступление</a></li>
			<li class="header-list__item"><a href="javascript:;" class="header-list__link">Образование</a></li>
			<li class="header-list__item"><a href="javascript:;" class="header-list__link">Наука и инновации</a></li>
			<li class="header-list__item"><a href="javascript:;" class="header-list__link">Студенческая жизнь</a></li>
			<li class="header-list__item"><a href="javascript:;" class="header-list__link">Сотрудничество</a></li>
			<li class="header-list__item"><a href="javascript:;" class="header-list__link">Вакансии</a></li>
		</ul>
		<div class="header-bottom-mobile-menu">
			<button class="header-bottom-mobile-menu-button">
				<span>меню</span>
				<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M11.768 0.73223C12.7443 1.70854 12.7443 3.29145 11.768 4.26776C10.7917 5.24407 9.20878 5.24407 8.23247 4.26776C7.25617 3.29145 7.25617 1.70854 8.23247 0.73223C9.20874 -0.244077 10.7916 -0.244077 11.768 0.73223Z" fill="white" />
					<path d="M11.768 8.23223C12.7443 9.20853 12.7443 10.7914 11.768 11.7677C10.7917 12.7441 9.20878 12.7441 8.23247 11.7677C7.25617 10.7914 7.25617 9.20853 8.23247 8.23223C9.20874 7.25592 10.7916 7.25592 11.768 8.23223Z" fill="white" />
					<path d="M11.768 15.7322C12.7443 16.7085 12.7443 18.2915 11.768 19.2678C10.7917 20.2441 9.20878 20.2441 8.23247 19.2678C7.25617 18.2915 7.25617 16.7085 8.23247 15.7322C9.20874 14.7559 10.7916 14.7559 11.768 15.7322Z" fill="white" />
				</svg>
			</button>
			<div class="header-bottom-mobile-menu-list">
				<div class="header-bottom-mobile-menu-list-wrap">
					<ul class="mobile-list">
						<li class="mobile-list__item sub"><a href="javascript:;" class="mobile-list__link">О ВятГУ <span class="arr"></span></a>
							<ul class="mobile-sublist">
								<li class="mobile-sublist__item"><a href="javascript:;" class="mobile-sublist__link">Университет в цифрах</a></li>
								<li class="mobile-sublist__item"><a href="/infostend/" class="mobile-sublist__link">Сведения об образовательной организации</a></li>
								<li class="mobile-sublist__item"><a href="javascript:;" class="mobile-sublist__link">Часто задаваемые вопросы</a></li>
								<li class="mobile-sublist__item"><a href="javascript:;" class="mobile-sublist__link">Миссия и Стратегия</a></li>
								<li class="mobile-sublist__item"><a href="javascript:;" class="mobile-sublist__link">Сотрудничество</a></li>
								<li class="mobile-sublist__item"><a href="/history/" class="mobile-sublist__link">История Университета</a></li>
								<li class="mobile-sublist__item"><a href="javascript:;" class="mobile-sublist__link">ВятГУ на карте</a></li>
								<li class="mobile-sublist__item"><a href="/leadership/" class="mobile-sublist__link">Руководство</a></li>
								<li class="mobile-sublist__item"><a href="javascript:;" class="mobile-sublist__link">Контакты</a></li>
								<li class="mobile-sublist__item"><a href="/personalii/" class="mobile-sublist__link">Персоналии</a></li>
								<li class="mobile-sublist__item"><a href="javascript:;" class="mobile-sublist__link">Обращения граждан и организаций</a></li>
							</ul>
						</li>
						<li class="mobile-list__item"><a href="javascript:;" class="mobile-list__link">Поступление</a></li>
						<li class="mobile-list__item"><a href="javascript:;" class="mobile-list__link">Образование</a></li>
						<li class="mobile-list__item sub"><a href="javascript:;" class="mobile-list__link">Наука и инновации <span class="arr"></span></a>
							<ul class="mobile-sublist">
								<li class="mobile-sublist__item"><a href="javascript:;" class="mobile-sublist__link">Научная деятельность</a></li>
								<li class="mobile-sublist__item"><a href="javascript:;" class="mobile-sublist__link">Инновации и предпринимательство</a></li>
								<li class="mobile-sublist__item"><a href="javascript:;" class="mobile-sublist__link">Научная инфраструктура</a></li>
								<li class="mobile-sublist__item"><a href="javascript:;" class="mobile-sublist__link">Подготовка научно-педагогических кадров</a></li>
								<li class="mobile-sublist__item"><a href="javascript:;" class="mobile-sublist__link">Научные мероприятия</a></li>
							</ul>
						</li>
						<li class="mobile-list__item"><a href="javascript:;" class="mobile-list__link">Студенческая жизнь</a></li>
						<li class="mobile-list__item"><a href="javascript:;" class="mobile-list__link">Сотрудничество</a></li>
						<li class="mobile-list__item"><a href="javascript:;" class="mobile-list__link">Вакансии</a></li>
					</ul>
					<br>
					<ul class="mobile-list">
						<li class="mobile-list__item"><a href="javascript:;" class="mobile-list__link selected">Абитуриенту</a></li>
						<li class="mobile-list__item"><a href="javascript:;" class="mobile-list__link">Студенту</a></li>
						<li class="mobile-list__item"><a href="javascript:;" class="mobile-list__link">Выпускнику</a></li>
						<li class="mobile-list__item"><a href="javascript:;" class="mobile-list__link">Сотруднику</a></li>
						<li class="mobile-list__item"><a href="javascript:;" class="mobile-list__link">Сервисы</a></li>
					</ul>

					<a href="/infostend/" class="about-educational">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/information.svg" alt="">
						<span>Сведения об <br> образовательной организации</span>
					</a>
					<a href="javascript:;" class="lk">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/user.svg" alt="">
						<span>Личный <br> кабинет</span>
					</a>

					<div class="header-social">
						<a href="javascript:;"><img src="<?=SITE_TEMPLATE_PATH?>/img/vk2.svg" alt=""></a>
						<a href="javascript:;"><img src="<?=SITE_TEMPLATE_PATH?>/img/telegram2.svg" alt=""></a>
						<a href="javascript:;"><img src="<?=SITE_TEMPLATE_PATH?>/img/youtube2.svg" alt=""></a>
						<a href="javascript:;"><img src="<?=SITE_TEMPLATE_PATH?>/img/rss2.svg" alt=""></a>
					</div>
				</div>
				<button class="close-menu">
					<span>меню</span>
					<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.46585 8.01314L15.6959 1.78287C16.1014 1.37762 16.1014 0.722377 15.6959 0.317124C15.2907 -0.0881297 14.6354 -0.0881297 14.2302 0.317124L7.99991 6.5474L1.76983 0.317124C1.36439 -0.0881297 0.709336 -0.0881297 0.304082 0.317124C-0.101361 0.722377 -0.101361 1.37762 0.304082 1.78287L6.53417 8.01314L0.304082 14.2434C-0.101361 14.6487 -0.101361 15.3039 0.304082 15.7092C0.506045 15.9113 0.771595 16.0129 1.03696 16.0129C1.30232 16.0129 1.56768 15.9113 1.76983 15.7092L7.99991 9.47889L14.2302 15.7092C14.4323 15.9113 14.6977 16.0129 14.9631 16.0129C15.2284 16.0129 15.4938 15.9113 15.6959 15.7092C16.1014 15.3039 16.1014 14.6487 15.6959 14.2434L9.46585 8.01314Z" fill="#879EB8" /></g></svg>
				</button>
			</div>
		</div>
	</div>
  </header>

<?
$url = explode('?', $_SERVER['REQUEST_URI']);
if($url[0] != '/' && $url[0] != '/history/') { ?>
	<div class="breadcrumb_container">
		<div class="breadcrumb_list">
			<span><a href="/">Университет</a></span>/
			<span><a href="javascript:;"><?$APPLICATION->ShowTitle();?></a></span>/
		</div>
		<h2><?$APPLICATION->ShowTitle();?></h2>
	</div>
			<? /*global $APPLICATION;
			$APPLICATION->IncludeComponent(
				"bitrix:breadcrumb",
				"classik",
				Array(
					"START_FROM" => "0",
					"PATH" => "",
					"SITE_ID" => "s1"
				)
			);
			/*$helper = new PHPInterface\ComponentHelper($component);
			$helper->deferredCall('ShowNavChain', array('.default'));
			$helper->saveCache(); *//*?>
			<h2><?$APPLICATION->ShowTitle();?></h2>
		</div>
	</div>
<?*/ } ?>
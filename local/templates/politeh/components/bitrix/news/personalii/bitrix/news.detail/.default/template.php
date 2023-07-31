<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="news-university-top">
	<h2>Новости университета</h2>
	<div class="top-block-navigation">
		<a href="/news/" class="top-block-navigation__item active" id="all">Все новости</a>
		<? $SectList = CIBlockSection::GetList(
			Array("SORT"=>"ASC"),
			Array("IBLOCK_ID"=>"1", "ACTIVE"=>"Y"),
			false,
			Array("ID","IBLOCK_ID","SECTION_ID","NAME")
		);
		while ($SectListGet = $SectList->GetNext()){ ?>
			<a class="top-block-navigation__item" id="<?=$SectListGet['ID']?>"><?=$SectListGet['NAME']?></a>
		<? } ?>
	</div>
</div>
<div class="event-section">
	<div class="event-section-content">
		<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["NAME"]?>">
		<h1><?=$arResult["NAME"]?></h1>
		<div class="date-time"><span><?=strtolower(FormatDate("d F Y H:i", MakeTimeStamp($arResult['ACTIVE_FROM']))) ?></span></div>
		<?=$arResult["DETAIL_TEXT"];?>
	</div>
	
	<div class="event-section-actions">
		<div class="event-section-actions-left">
<!--			<a href="#">Форма заявления о зачислении в порядке перевода >></a>
			<a href="#">Согласие на обработку персональных данных >></a>
-->
		</div>

		<div class="event-section-actions-right">
			<? if($arResult["PROPERTIES"]["GALLERY"]["VALUE"]){ ?>
				<a class="look_gallery">Посмотреть все фото</a>
				<div class="img_block fancybox">
					<? foreach($arResult["PROPERTIES"]["GALLERY"]["VALUE"] as $key => $galItem) {
						$rsFile = CFile::GetByID($galItem);
						$arFile = $rsFile->Fetch();
						if($key==0){ ?>
							<a class="first_img" data-fancybox="news_gallery" href="/upload/<?=$arFile["SUBDIR"]?>/<?=$arFile["FILE_NAME"]?>">
							<img src="/upload/<?=$arFile["SUBDIR"]?>/<?=$arFile["FILE_NAME"]?>"/>
							</a>
						<? } else { ?>
							<a data-fancybox="news_gallery" href="/upload/<?=$arFile["SUBDIR"]?>/<?=$arFile["FILE_NAME"]?>"></a>
						<? }
					} ?>
				</div>
			<? } ?>
			<a href="#">Поделиться</a>
		</div>
    </div>
	
	<div class="event-section-bottom-info">При полном или частичном цитировании гиперссылка на сайт www.vyatsu.ru обязательна!</div>

    <div class="news-item-tags">
      <span class="news-university-item-tags">
      	<?foreach($arResult["PROPERTIES"]["TAGS"]["VALUE"] as $k=>$value):?>
			<span class="news-university-item-tags__item <?/*category<?=$k?>*/?>" style="background-color:<?=$arResult["PROPERTIES"]["TAGS"]["VALUE_XML_ID"][$k]?>"><?=$value?></span> 
		<?endforeach?>
      </span>
    </div>
</div>

<?
//$GLOBALS['arrFilter'] = array('!ID' =>  $arResult['ID']);
//настройки фильтра по тэгам
$GLOBALS['arrFilter'] = array("PROPERTY_TAGS_VALUE" => $arResult["PROPERTIES"]["TAGS"]["VALUE"]);

$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"news_similar",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_DATE" => "N",	// Выводить дату элемента
		"DISPLAY_NAME" => "N",	// Выводить название элемента
		"DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "arrFilter",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "1",	// Код информационного блока
		"IBLOCK_TYPE" => "news",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "3",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => "round",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "TAGS",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
	),
	false
);?>
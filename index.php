<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Политех");
?>
 <main class="main">
    <section class="home-slider swiper">
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list", 
			"slider", 
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
				"IBLOCK_ID" => "4",
				"IBLOCK_TYPE" => "news",
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
				"PAGER_TITLE" => "Новости",
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
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "DESC",
				"SORT_ORDER2" => "ASC",
				"STRICT_SECTION_CHECK" => "N",
				"COMPONENT_TEMPLATE" => "slider"
			),
			false
		);?>
    </section>

    <section class="news-university">
      <div class="container">
        <div class="news-university-wrap">
			<?$GLOBALS['newsFilter'] = Array(
				/*"SECTION_ID"	=>	$arSection["ID"]*/
			);?>
			<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"news", 
	array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "TAGS",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "TAGS",
			1 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "6",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "round",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "Y",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "news",
		"SEF_FOLDER" => "/news/",
		"CACHE_NOTES" => "",
		"FILTER_NAME" => "newsFilter",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);?>
			<a href="/news/" class="all-news">Все новости</a>
        </div>
      </div>
    </section>


    <section class="events">
      <div class="container">
        <div class="events-wrap">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"events", 
	array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "N",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "DATE_EVENT_END",
			1 => "DATE_EVENT_START",
			2 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "6",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/events/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ACTIVE_FROM",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "DESC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "events",
		"CACHE_NOTES" => "",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);?>
			<a href="/events/" class="all-events">Все события</a>
        </div>
      </div>
    </section>

    <section class="specialties-and-directions">
      <div class="container">
        <div class="specialties-and-directions-wrap">
          <div class="specialties-and-directions-left">
            <h2>Специальности
              и направления</h2>
            <div class="specialties-and-directions-items">
              <a href="#" class="specialties-and-directions-item">
                <div class="specialties-and-directions-item__text">
                  <span class="title">Бакалавриат</span>
                  <span class="info">30 профилей</span>
                </div>
                <img src="<?=SITE_TEMPLATE_PATH?>/img/next-grey.svg" alt="" class="arr">
              </a>
              <a href="#" class="specialties-and-directions-item">
                <div class="specialties-and-directions-item__text">
                  <span class="title">Магистратура</span>
                  <span class="info">24 профиля</span>
                </div>
                <img src="<?=SITE_TEMPLATE_PATH?>/img/next-grey.svg" alt="" class="arr">
              </a>
              <a href="#" class="specialties-and-directions-item">
                <div class="specialties-and-directions-item__text">
                  <span class="title">Аспирантура</span>
                  <span class="info">18 профилей</span>
                </div>
                <img src="<?=SITE_TEMPLATE_PATH?>/img/next-grey.svg" alt="" class="arr">
              </a>
            </div>

            <a href="#" class="specialties-and-directions-more">В общий раздел</a>
          </div>
          <div class="specialties-and-directions-image">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/specialties-and-directions.png" alt="">
          </div>
        </div>
      </div>
    </section>


    <section class="university-dev-strategy">
      <div class="container">
        <div class="university-dev-strategy-wrap">
          <div class="university-dev-strategy-text">
            <h2>Стратегия развития университета</h2>
            <p>Миссия ВятГУ – содействие опережающему развитию Кировской области путем формирования региональной
              интеллектуальной элиты, научно-инновационной и предпринимательской среды. <br></p>

            <div class="university-dev-strategy-graph-mob">
              <img src="<?=SITE_TEMPLATE_PATH?>/img/grsph.svg" alt="">
            </div>
            <p>9 ключевых направлений
              развития</p>
            <div class="university-dev-strategy-items">
              <a href="#" class="university-dev-strategy-item">IT-направление</a>
              <a href="#" class="university-dev-strategy-item">Технические</a>
              <a href="#" class="university-dev-strategy-item">Естественнонаучные</a>
              <a href="#" class="university-dev-strategy-item">Гуманитарные</a>
              <a href="#" class="university-dev-strategy-item">Экономические</a>
              <a href="#" class="university-dev-strategy-item">Педагогические</a>
              <a href="#" class="university-dev-strategy-item">Творческие</a>
              <a href="#" class="university-dev-strategy-item">Юридические</a>
              <a href="#" class="university-dev-strategy-item">Future Industry</a>
            </div>
            <a href="#" class="all-university-dev-strategy">В общий раздел</a>
          </div>
          <div class="university-dev-strategy-graph">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/grsph.svg" alt="">
          </div>
        </div>
      </div>
    </section>

    <section class="rules-admission">
      <div class="container">
        <div class="rules-admission-wrap">
          <div class="rules-admission-text">
            <h2>Правила приёма в ВятГУ</h2>
            <p>Узнай — как поступить на желаемую специальность в 2021 году</p>
            <a href="#">В общий раздел</a>
          </div>
          <div class="rules-admission-image">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/rules-img.png" alt="">
          </div>
        </div>
      </div>
    </section>


    <section class="stats-university">
      <div class="container">
        <div class="stats-university-wrap">
          <h2>Университет в цифрах</h2>
        </div>
      </div>

      <div class="container2">
        <div class="stats-university-image-wrap">
			<div class="stats_container">
				<? $db_list = CIBlockSection::GetList(
					Array('SORT' => 'ASC'), 
					Array('IBLOCK_ID' => 12, 'GLOBAL_ACTIVE'=>'Y'),
					true,
					Array('UF_SIZE'));
				$db_list->NavStart(20);
				$_count  = $db_list->result->num_rows;
				while($ar_result = $db_list->GetNext()) { 
					$_position_left = round(90 / $_count * ($ar_result["SORT"] + 1) - $_count * 2); 
					$rsSize = CUserFieldEnum::GetList(array(), array("ID" => $ar_result["UF_SIZE"],));
					if($arSize = $rsSize->GetNext()) { ?>
						<div class="stats_item <?=$arSize["XML_ID"];?>" style="left: <?=$_position_left;?>%">
							<div class="stats_point" data-point_num="<?=$ar_result["SORT"];?>" data-x="<?=$_position_left;?>" data-y="<?=$arSize["SORT"];?>" style="background-color:<?=sprintf('#%02X%02X%02X', rand(0, 255), rand(0, 255), rand(0, 255));?>"></div>
							<div class="stats_name">
								<a href="/stats_university/#<?=$ar_result["CODE"];?>">
									<?=$ar_result["NAME"];?>
								</a>
							</div>
							<div class="stats_description">
								<?=html_entity_decode($ar_result["DESCRIPTION"]);?>
							</div>
						</div>
					<? } ?>
				<? } ?>
			</div>
			<div class="stats_background">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/vgu_stats.png">
			</div>
        </div>
      </div>
    </section>


    <section class="university-top">
      <div class="container">
        <div class="university-top-wrap">
          <h2>ТОП университета</h2>
          <div class="university-top-items">
            <a href="#" class="university-top-item">
              <div class="university-top-item__top">
                <span class="label">ТОП</span>
                <span class="title">Студентов</span>
                <p>Студенты университета, принимающие активное участие в жизни вуза (научная, общественная деятельность,
                  спорт, волонтерство)</p>
              </div>
              <div class="university-top-item__image">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/top1.png" alt="">
              </div>
            </a>
            <a href="#" class="university-top-item">
              <div class="university-top-item__top">
                <span class="label">ТОП</span>
                <span class="title">Преподавателей</span>
                <p>Лучшие преподаватели ВятГУ готовы передавать знания нашим студентам</p>
              </div>
              <div class="university-top-item__image">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/top2.png" alt="">
              </div>
            </a>
            <a href="#" class="university-top-item">
              <div class="university-top-item__top">
                <span class="label">ТОП</span>
                <span class="title">Образовательных
                  программ</span>
                <p>Самые актуальные программы
                  и востребованные специальности
                  для молодежи из РФ и зарубежья</p>
              </div>
              <div class="university-top-item__image">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/top3.png" alt="">
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>


    <section class="partners">
		<div class="container">
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list", 
				"partners_list", 
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
					"IBLOCK_ID" => "6",
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
					"PAGER_TITLE" => "Партнеры",
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
		</div>
    </section>

    <section class="feedback-section">
      <div class="container">
        <div class="feedback-section-wrap">
          <span class="subtitle">Остались вопросы?</span>
          <h2>Свяжитесь с нами!</h2>
          <form action="#" class="feedback-section-form">
            <div class="feedback-section-form-item">
              <label for=""><span>Ваше имя</span></label>
              <input type="text" placeholder="Иван Иванов">
            </div>
            <div class="feedback-section-form-item">
              <label for=""><span>Ваш номер телефона</span></label>
              <input type="text" placeholder="+ 7 (___) ___ - __ - __">
            </div>
            <div class="feedback-section-form-item">
              <label for=""><span>Ваш e-mail</span></label>
              <input type="text" placeholder="example@mail.com">
            </div>
            <button>Отправить мою заявку</button>
          </form>

          <p class="feedback-section-info">Отправляя заявку, Вы даете согласие на обработку Ваших персональных данных
          </p>
        </div>
      </div>
    </section>
  </main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
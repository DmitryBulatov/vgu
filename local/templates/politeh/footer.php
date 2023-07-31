<footer class="footer">
    <div class="container">
      <div class="footer-wrap">
        <div class="footer-top">
          <div class="footer-main-sections">
            <button class="footer-main-sections-button"><span>Основные разделы</span></button>
            <ul class="footer-main-sections-list">
              <li class="footer-main-sections-list__item"><a href="#"
                  class="footer-main-sections-list__link">Университет</a></li>
              <li class="footer-main-sections-list__item"><a href="#" class="footer-main-sections-list__link">Новости и
                  события</a></li>
              <li class="footer-main-sections-list__item"><a href="#"
                  class="footer-main-sections-list__link">Образование</a></li>
              <li class="footer-main-sections-list__item"><a href="#" class="footer-main-sections-list__link">Наука и
                  инновации</a></li>
              <li class="footer-main-sections-list__item"><a href="#"
                  class="footer-main-sections-list__link">Студенческая жизнь</a></li>
              <li class="footer-main-sections-list__item"><a href="#"
                  class="footer-main-sections-list__link">Сотрудничество</a></li>
              <li class="footer-main-sections-list__item"><a href="#" class="footer-main-sections-list__link">Доступная
                  среда</a></li>
              <li class="footer-main-sections-list__item"><a href="#"
                  class="footer-main-sections-list__link">Поступающим</a></li>
              <li class="footer-main-sections-list__item"><a href="#"
                  class="footer-main-sections-list__link">Студентам</a></li>
              <li class="footer-main-sections-list__item"><a href="#"
                  class="footer-main-sections-list__link">Выпускникам</a></li>
              <li class="footer-main-sections-list__item"><a href="#"
                  class="footer-main-sections-list__link">Преподавателям</a></li>
              <li class="footer-main-sections-list__item"><a href="#"
                  class="footer-main-sections-list__link">Работодателям</a></li>
              <li class="footer-main-sections-list__item"><a href="#"
                  class="footer-main-sections-list__link">Партнёрам</a></li>
              <li class="footer-main-sections-list__item"><a href="#"
                  class="footer-main-sections-list__link">Контакты</a></li>
              <li class="footer-main-sections-list__item"><a href="#"
                  class="footer-main-sections-list__link">Противодействие коррупции</a></li>
              <li class="footer-main-sections-list__item"><a href="#" class="footer-main-sections-list__link">Сведения о
                  доходах</a></li>
              <li class="footer-main-sections-list__item"><a href="#" class="footer-main-sections-list__link">Политика
                  обработки персональных данных</a></li>
              <li class="footer-main-sections-list__item"><a href="#"
                  class="footer-main-sections-list__link">Лицензия</a></li>
              <li class="footer-main-sections-list__item"><a href="#"
                  class="footer-main-sections-list__link">Государственная аккредитация</a></li>
              <li class="footer-main-sections-list__item"><a href="/infostend/" class="footer-main-sections-list__link">Сведения
                  об образовательной организации</a></li>
              <li class="footer-main-sections-list__item"><a href="#" class="footer-main-sections-list__link">Платежные
                  реквизиты</a></li>
            </ul>
          </div>
          <div class="footer-social">
            <a href="#" class="header-logo">
              <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="">
              <span>ВЯТСКИЙ
                ГОСУДАРСТВЕННЫЙ
                УНИВЕРСИТЕТ</span>
            </a>
            <a href="#" class="selection-committee">Приёмная комиссия</a>
            <div class="footer-social-item">
              <span class="label">Адрес:</span>
              <p class="value">610000, г. Киров, ул. Московская. д. 36, ауд. 129</p>
            </div>
            <div class="footer-social-item">
              <span class="label">Телефоны:</span>
              <a href="#" class="value">+7 (8332) 74-29-29,</a>
              <a href="#" class="value">64-89-89</a>
            </div>

            <div class="footer-social-item">
              <span class="label">E-mail:</span>
              <a href="#" class="value">prcom@vyatsu.ru</a>
            </div>

            <div class="footer-social-bottom">
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
				<div class="gerbs">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/min-pros.png" alt="" class="gerb">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/03_Bolee_45_mm_po_vysote_v_formate_PNG.png" alt="" class="gerb">
				</div>
            </div>
          </div>
          <ul class="footer-list">
            <li class="footer-list__item"><a href="#" class="footer-list__link">Университет</a></li>
            <li class="footer-list__item"><a href="#" class="footer-list__link">Новости и события</a></li>
            <li class="footer-list__item"><a href="#" class="footer-list__link">Образование</a></li>
            <li class="footer-list__item"><a href="#" class="footer-list__link">Наука и инновации</a></li>
            <li class="footer-list__item"><a href="#" class="footer-list__link">Студенческая жизнь</a></li>
            <li class="footer-list__item"><a href="#" class="footer-list__link">Сотрудничество</a></li>
            <li class="footer-list__item"><a href="#" class="footer-list__link">Доступная среда</a></li>
          </ul>
          <ul class="footer-list">
            <li class="footer-list__item"><a href="#" class="footer-list__link">Поступающим</a></li>
            <li class="footer-list__item"><a href="#" class="footer-list__link">Студентам</a></li>
            <li class="footer-list__item"><a href="#" class="footer-list__link">Выпускникам</a></li>
            <li class="footer-list__item"><a href="#" class="footer-list__link">Преподавателям</a></li>
            <li class="footer-list__item"><a href="#" class="footer-list__link">Работодателям</a></li>
            <li class="footer-list__item"><a href="#" class="footer-list__link">Партнёрам</a></li>
            <li class="footer-list__item"><a href="#" class="footer-list__link">Контакты</a></li>
          </ul>
          <ul class="footer-list">
            <li class="footer-list__item"><a href="#" class="footer-list__link">Противодействие коррупции</a></li>
            <li class="footer-list__item"><a href="#" class="footer-list__link">Сведения о доходах</a></li>
            <li class="footer-list__item"><a href="#" class="footer-list__link">Политика обработки персональных
                данных</a></li>
            <li class="footer-list__item"><a href="#" class="footer-list__link">Лицензия</a></li>
            <li class="footer-list__item"><a href="#" class="footer-list__link">Государственная аккредитация</a></li>
            <li class="footer-list__item"><a href="/infostend/" class="footer-list__link">Сведения об образовательной
                организации</a></li>
            <li class="footer-list__item"><a href="#" class="footer-list__link">Платежные реквизиты</a></li>
          </ul>
        </div>

        <div class="footer-bottom">
          <div class="footer-bottom-left">
            <p class="info">2022. Вятский Государственный Университет</p>
            <p class="info"><a href="#">Свидетельство о регистрации средства массовой информации Эл № ФС77-37891</a> |
              <span>При перепечатке ссылка на Портал ВятГУ обязательна.</span></p>
            <p class="info">Коммерческое использование размещенных материалов запрещено.</p>
          </div>
          <a href="#" class="footer-bottom-logo"><span>Разработка сайта</span><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_lemonads.svg"
              alt=""></a>
        </div>
      </div>
    </div>
  </footer>
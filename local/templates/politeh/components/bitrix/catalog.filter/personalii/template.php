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


//сбор данных о персоналиях в массив $arResultFull
$arTemplate = CIBlockElement::GetList(
	Array(),
	Array("IBLOCK_ID" => 10, "ACTIVE" => "Y"),
	false,
	Array("nPageSize" => 550),
	Array("ID", "IBLOCK_ID", "NAME", "ACTIVE","PROPERTY_*")
);
$key = 0;
while($obItems = $arTemplate->GetNextElement()){
	$arResultFull[$key] = [
		"PROP" => $obItems->GetProperties(),
		"FIELD" => $obItems->GetFields()
	];
	$key ++;
}
$arPostResult = array();
foreach($arResultFull as $arItem) 
	$arPostResult[$arItem["FIELD"]["ID"]] = $arItem["PROP"]["post_name"];


//сбор данных о подразделениях в массив $arSubResult
$sub_list = CIBlockSection::GetList(
	Array($by=>$order),
	Array('IBLOCK_ID' => 10, 'ACTIVE' => 'Y'),
	true
);
$sub_list->NavStart(50);
$key = 0;
while($arSubTemp = $sub_list->GetNext()){
	$arSubResult[$key] = $arSubTemp;
	$key ++;
}

?>
<form name="<?echo $arResult["FILTER_NAME"];?>" id="person_form" action="" method="post" onsubmit="add();return false;">
	<div class="personalii_search">
		<p>Поиск сотрудника</p>
		<label class="form_search">
			<input class="form_search__input" type="text" name="name" placeholder="Введите ФИО">
			<span class="form_search__placeholder">
				<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M13.2094 11.6185C14.0951 10.4089 14.6249 8.92316 14.6249 7.31249C14.6249 3.28052 11.3444 0 7.31245 0C3.28048 0 0 3.28052 0 7.31249C0 11.3445 3.28052 14.625 7.31248 14.625C8.92315 14.625 10.409 14.0951 11.6186 13.2093L16.4092 17.9999L18 16.4091C18 16.4091 13.2094 11.6185 13.2094 11.6185ZM7.31248 12.375C4.52086 12.375 2.25001 10.1041 2.25001 7.31249C2.25001 4.52086 4.52086 2.25001 7.31248 2.25001C10.1041 2.25001 12.375 4.52086 12.375 7.31249C12.375 10.1041 10.1041 12.375 7.31248 12.375Z" fill="#326297"/></svg>
			</span>
		</label>
	</div>
	<div class="personalii_filters">
		<p>Расширенный поиск</p>
		<div class="form_search__select">
			<div class="select_block">
				<span class="form__placeholder" id="post_name">Должность</span>
				<div class="select_list" id="post_name">
					<input class="select_search__input" type="text" name="inp_post_name" id="inp_post_name">
					<div class="input_block">
						<?foreach($arPostResult as $i => $arPost){ if(!empty($arPost["VALUE"])) { ?>
							<div class="select_elem" id="<?=$i;?>">
								<label class="select_search" id="inp_post_name">
									<input class="select_search__checkbox" type="checkbox" name="check_post_name[<?=$arPost["VALUE"];?>]">
									<?=$arPost["VALUE"];?>
								</label>
							</div>
						<? } } ?>
					</div>
					<div class="button_block">
						<div class="select_button_send">Применить</div>
						<div class="select_button_delete"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="19" viewBox="0 0 15 19" fill="none"><path d="M1.07143 16.8889C1.07143 18.05 2.03571 19 3.21429 19H11.7857C12.9643 19 13.9286 18.05 13.9286 16.8889V4.22222H1.07143V16.8889ZM4.46786 10.1228C4.26752 9.92541 4.15498 9.65773 4.15498 9.37861C4.15498 9.09949 4.26752 8.83181 4.46786 8.63445C4.66819 8.43708 4.9399 8.3262 5.22321 8.3262C5.50653 8.3262 5.77824 8.43708 5.97857 8.63445L7.5 10.1228L9.01071 8.63445C9.21105 8.43708 9.48276 8.3262 9.76607 8.3262C10.0494 8.3262 10.3211 8.43708 10.5214 8.63445C10.7218 8.83181 10.8343 9.09949 10.8343 9.37861C10.8343 9.65773 10.7218 9.92541 10.5214 10.1228L9.01071 11.6111L10.5214 13.0994C10.6206 13.1972 10.6993 13.3132 10.753 13.4409C10.8067 13.5686 10.8343 13.7054 10.8343 13.8436C10.8343 13.9818 10.8067 14.1187 10.753 14.2464C10.6993 14.374 10.6206 14.4901 10.5214 14.5878C10.4222 14.6855 10.3045 14.763 10.1749 14.8159C10.0453 14.8688 9.90635 14.896 9.76607 14.896C9.62579 14.896 9.48688 14.8688 9.35728 14.8159C9.22767 14.763 9.10991 14.6855 9.01071 14.5878L7.5 13.0994L5.98929 14.5878C5.89009 14.6855 5.77233 14.763 5.64272 14.8159C5.51312 14.8688 5.37421 14.896 5.23393 14.896C5.09365 14.896 4.95474 14.8688 4.82513 14.8159C4.69553 14.763 4.57777 14.6855 4.47857 14.5878C4.37938 14.4901 4.30069 14.374 4.24701 14.2464C4.19332 14.1187 4.16569 13.9818 4.16569 13.8436C4.16569 13.7054 4.19332 13.5686 4.24701 13.4409C4.30069 13.3132 4.37938 13.1972 4.47857 13.0994L5.98929 11.6111L4.46786 10.1228ZM13.9286 1.05556H11.25L10.4893 0.306111C10.2964 0.116111 10.0179 0 9.73929 0H5.26071C4.98214 0 4.70357 0.116111 4.51071 0.306111L3.75 1.05556H1.07143C0.482143 1.05556 0 1.53056 0 2.11111C0 2.69167 0.482143 3.16667 1.07143 3.16667H13.9286C14.5179 3.16667 15 2.69167 15 2.11111C15 1.53056 14.5179 1.05556 13.9286 1.05556Z" fill="#3C75B5"/></svg></div>
					</div>
				</div>
			</div>
		</div>
		<div class="form_search__select">
			<div class="select_block">
				<span class="form__placeholder" id="subdiv_name">Подразделение</span>
				<div class="select_list" id="subdiv_name">
					<input class="select_search__input" type="text" name="inp_subdiv_name" id="inp_subdiv_name">
					<div class="input_block">
						<?foreach($arSubResult as $arSub) { ?>
							<div class="select_elem" id="<?=$i;?>">
								<label class="select_search" id="inp_subdiv_name">
									<input class="select_search__checkbox" type="checkbox" name="check_subdiv_name[<?=$arSub["NAME"];?>]">
									<?=$arSub["NAME"];?>
								</label>
							</div>
						<? } ?>
					</div>
					<div class="button_block">
						<div class="select_button_send">Применить</div>
						<div class="select_button_delete"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="19" viewBox="0 0 15 19" fill="none"><path d="M1.07143 16.8889C1.07143 18.05 2.03571 19 3.21429 19H11.7857C12.9643 19 13.9286 18.05 13.9286 16.8889V4.22222H1.07143V16.8889ZM4.46786 10.1228C4.26752 9.92541 4.15498 9.65773 4.15498 9.37861C4.15498 9.09949 4.26752 8.83181 4.46786 8.63445C4.66819 8.43708 4.9399 8.3262 5.22321 8.3262C5.50653 8.3262 5.77824 8.43708 5.97857 8.63445L7.5 10.1228L9.01071 8.63445C9.21105 8.43708 9.48276 8.3262 9.76607 8.3262C10.0494 8.3262 10.3211 8.43708 10.5214 8.63445C10.7218 8.83181 10.8343 9.09949 10.8343 9.37861C10.8343 9.65773 10.7218 9.92541 10.5214 10.1228L9.01071 11.6111L10.5214 13.0994C10.6206 13.1972 10.6993 13.3132 10.753 13.4409C10.8067 13.5686 10.8343 13.7054 10.8343 13.8436C10.8343 13.9818 10.8067 14.1187 10.753 14.2464C10.6993 14.374 10.6206 14.4901 10.5214 14.5878C10.4222 14.6855 10.3045 14.763 10.1749 14.8159C10.0453 14.8688 9.90635 14.896 9.76607 14.896C9.62579 14.896 9.48688 14.8688 9.35728 14.8159C9.22767 14.763 9.10991 14.6855 9.01071 14.5878L7.5 13.0994L5.98929 14.5878C5.89009 14.6855 5.77233 14.763 5.64272 14.8159C5.51312 14.8688 5.37421 14.896 5.23393 14.896C5.09365 14.896 4.95474 14.8688 4.82513 14.8159C4.69553 14.763 4.57777 14.6855 4.47857 14.5878C4.37938 14.4901 4.30069 14.374 4.24701 14.2464C4.19332 14.1187 4.16569 13.9818 4.16569 13.8436C4.16569 13.7054 4.19332 13.5686 4.24701 13.4409C4.30069 13.3132 4.37938 13.1972 4.47857 13.0994L5.98929 11.6111L4.46786 10.1228ZM13.9286 1.05556H11.25L10.4893 0.306111C10.2964 0.116111 10.0179 0 9.73929 0H5.26071C4.98214 0 4.70357 0.116111 4.51071 0.306111L3.75 1.05556H1.07143C0.482143 1.05556 0 1.53056 0 2.11111C0 2.69167 0.482143 3.16667 1.07143 3.16667H13.9286C14.5179 3.16667 15 2.69167 15 2.11111C15 1.53056 14.5179 1.05556 13.9286 1.05556Z" fill="#3C75B5"/></svg></div>
					</div>
				</div>
			</div>
		</div>
		<div class="addit_list">
			<div class="addit_placeholder" id="post_name"></div>
			<div class="addit_placeholder" id="subdiv_code"></div>
		</div>
		<span class="btn__reset">Сбросить все</span>
	</div>
</form>

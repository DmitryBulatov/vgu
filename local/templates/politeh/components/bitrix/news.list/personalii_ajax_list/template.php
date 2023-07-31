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

foreach($arResult["ITEMS"] as $arItem){
	$_search_name = $GLOBALS['arrPersonalii']["name"];
	$_search_post_name = array();
	$_search_subdiv_name = array();
	foreach($GLOBALS['arrPersonalii']["check_post_name"] as $key=>$value){
		$_search_post_name[] = $key;
	}
	foreach($GLOBALS['arrPersonalii']["check_subdiv_name"] as $key=>$value){
		$_search_subdiv_name[] = $key;
	}
	$res = CIBlockSection::GetByID($arItem["IBLOCK_SECTION_ID"]);
	if($ar_res = $res->GetNext())
		$_item_subdiv_name = $ar_res['NAME'];
	
	
	if(!empty($_search_name) && !stripos($arItem["NAME"], $_search_name)) continue;
	if(!empty($_search_post_name) && !in_array($arItem["PROPERTIES"]["post_name"]["VALUE"], $_search_post_name, false)) continue;
	if(!empty($_search_subdiv_name) && !in_array($_item_subdiv_name, $_search_subdiv_name, false)) continue;
	
	
	if(empty($arItem["PROPERTIES"]["photo"]["VALUE"])) {
		$_tempIMG = SITE_TEMPLATE_PATH.'/img/empty_staff.png';
	} else {
		$_tempIMG = CFile::GetPath($arItem["PROPERTIES"]["photo"]["VALUE"]);
	} ?>
	<div class="personalii_item">
		<div class="personalii_item-img">
			<img src="<?=$_tempIMG;?>" alt="<?=$arItem["NAME"]?>">
		</div>
		<div class="personalii_item-info">
			<div class="personalii_item-info_name"><?=$arItem["NAME"];?></div>
			<div class="personalii_item-info_post_name"><?=$arItem["PROPERTIES"]["post_name"]["VALUE"];?></div>
			<div class="personalii_item-info_lineup"></div>
			<div class="personalii_item-info_post_description"><?=$arItem["PROPERTIES"]["post_description"]["VALUE"];?></div>
			<div class="personalii_item-info_contacts">
			
				<? if(!empty($arItem["PROPERTIES"]["emale"]["VALUE"])) { ?>
					<div class="personalii_item-info_contact email">
						<div class="contact_descr">Почта</div>
						<div class="contact_text"><?=$arItem["PROPERTIES"]["emale"]["VALUE"];?></div>
					</div>
				<? }
				if(!empty($arItem["PROPERTIES"]["phone"]["VALUE"])) { ?>
					<div class="personalii_item-info_contact phone">
						<div class="contact_descr">Телефон</div>
						<div class="contact_text"><?=$arItem["PROPERTIES"]["phone"]["VALUE"];?></div>
					</div>
				<? }
				if(!empty($arItem["PROPERTIES"]["address"]["VALUE"])) { ?>
					<div class="personalii_item-info_contact address">
						<div class="contact_descr">Адрес</div>
						<div class="contact_text"><?=$arItem["PROPERTIES"]["address"]["VALUE"];?></div>
					</div>
				<? } ?>
			
			</div>
			<div class="personalii_item-info_tags">
				<? foreach($arItem["PROPERTIES"]["TAG"]["VALUE"] as $k=>$value) { ?>
					<span class="personalii_item-info_tag" style="background-color:<?=$arItem["PROPERTIES"]["TAG"]["DESCRIPTION"][$k];?>"><?=$value;?></span>
				<? } ?>
			</div>
			<div class="personalii_item-info_href">
				<a href="<?=$arItem["CODE"];?>">Персональная страница<span class="arrow_right"></span></a>
			</div>
		</div>
	</div>
<? } ?>
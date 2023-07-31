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


<div class="personalii_content">
	<div class="personalii_filter_block">
		<div class="personalii_letters <?=(count($arResult["ITEMS"]) <=16) ? 'small' : '';?>">
			<?foreach($arResult["ITEMS"] as $arItem){
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				$arLetters [] = strtoupper(substr($arItem["NAME"], 0, 2));
			}
			$arLetters = array_unique($arLetters);
			foreach($arLetters as $arLetter){ ?>
				<div class="personalii_letter"><?=$arLetter;?></div>
			<?}?>
		</div>
		<?/*if($arParams["USE_FILTER"]=="Y") {*/
			$APPLICATION->IncludeComponent(
				"bitrix:catalog.filter",
				"personalii",
				Array(
					"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
					"IBLOCK_ID" => $arParams["IBLOCK_ID"],
					"FILTER_NAME" => $arParams["FILTER_NAME"],
					"FIELD_CODE" => $arParams["FILTER_FIELD_CODE"],
					"PROPERTY_CODE" => $arParams["FILTER_PROPERTY_CODE"],
					"CACHE_TYPE" => $arParams["CACHE_TYPE"],
					"CACHE_TIME" => $arParams["CACHE_TIME"],
					"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
					"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
				),
				$component
			); ?>
		<?/*}*/?>
	</div>
	<div class="personalii_items">
		<?foreach($arResult["ITEMS"] as $arItem){
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			
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
					<div class="personalii_item-info_name"><?=$arItem["NAME"]?></div>
					<div class="personalii_item-info_post_name"><?=$arItem["PROPERTIES"]["post_name"]["VALUE"]?></div>
					<div class="personalii_item-info_lineup"></div>
					<div class="personalii_item-info_post_description"><?=$arItem["PROPERTIES"]["post_description"]["VALUE"]?></div>
					<div class="personalii_item-info_contacts">
						<?if(!empty($arItem["PROPERTIES"]["emale"]["VALUE"])){?>
							<div class="personalii_item-info_contact email">
								<div class="contact_descr">Почта</div>
								<div class="contact_text"><?=$arItem["PROPERTIES"]["emale"]["VALUE"];?></div>
							</div>
						<?}?>
						<?if(!empty($arItem["PROPERTIES"]["phone"]["VALUE"])){?>
							<div class="personalii_item-info_contact phone">
								<div class="contact_descr">Телефон</div>
								<div class="contact_text"><?=$arItem["PROPERTIES"]["phone"]["VALUE"];?></div>
							</div>
						<?}?>
						<?if(!empty($arItem["PROPERTIES"]["address"]["VALUE"])){?>
							<div class="personalii_item-info_contact address">
								<div class="contact_descr">Адрес</div>
								<div class="contact_text"><?=$arItem["PROPERTIES"]["address"]["VALUE"];?></div>
							</div>
						<?}?>
					</div>
					<div class="personalii_item-info_tags">
						<?foreach($arItem["PROPERTIES"]["TAG"]["VALUE"] as $k=>$value){?>
							<span class="personalii_item-info_tag" style="background-color:<?=$arItem["PROPERTIES"]["TAG"]["DESCRIPTION"][$k]?>"><?=$value?></span> 
						<?}?>
					</div>
					<div class="personalii_item-info_href">
						<a href="<?=(!empty($arItem['CODE'])) ? $arItem['CODE'] : 'javascript:;';?>">Персональная страница<span class="arrow_right"></span></a>
					</div>
				</div>
			</div>
		<?}?>
	</div>
</div>
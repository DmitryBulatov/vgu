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

$arSelect_rector = Array("ID", "IBLOCK_ID", "NAME", "CODE", "PROPERTY_*");
$arFilter_rector = Array("IBLOCK_ID" => 11, "ID" => 84);
if(CModule::IncludeModule("iblock")){
	$res_rector = CIBlockElement::GetList(Array(), $arFilter_rector, false, Array("nPageSize"=>1), $arSelect_rector);
	while($ob_rector = $res_rector->GetNextElement()) { 
		$arFields_rector = $ob_rector->GetFields();
		$arProps_rector = $ob_rector->GetProperties(); ?>
		<div class="personalii_content solo">
			<div class="personalii_items">
				<div class="personalii_item rector">
					<div class="personalii_item-img">
						<img src="<?=CFile::GetPath($arProps_rector["photo"]["VALUE"]);?>" alt="<?=$arFields_rector["NAME"]?>">
					</div>
					<div class="personalii_item-info">
						<div class="personalii_item-info_name"><?=$arProps_rector["name"]["VALUE"]?></div>
						<div class="personalii_item-info_post_name"><?=$arProps_rector["post"]["VALUE"]?></div>
						<div class="personalii_item-info_lineup"></div>
						<div class="personalii_item-info_post_description"><?=$arProps_rector["description"]["VALUE"]["TEXT"]?></div>
						<div class="personalii_item-info_contacts">
							<?foreach($arProps_rector["contacts"]["VALUE"] as $key => $arItemContact) { ?>
								<div class="personalii_item-info_contact">
									<div class="contact_descr"><?=$arProps_rector["contacts"]["DESCRIPTION"][$key];?></div>
									<div class="contact_text"><?=$arProps_rector["contacts"]["VALUE"][$key];?></div>
								</div>
							<? } ?>
						</div>
						<div class="personalii_item-info_href">
							<a href="<?=$arFields_rector['CODE'];?>/">Персональная страница<span class="arrow_right"></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<? }
} ?>

<div class="section_list">
	<div class="section_item active" id="otdel__all">Все отделы</div>
	<? if(CModule::IncludeModule("iblock")){
		$arFilter = Array('IBLOCK_ID' => 11, 'ACTIVE' => 'Y');
		$db_list = CIBlockSection::GetList(Array('SORT' => 'ASC'), $arFilter, true);
		$db_list->NavStart(90);
		while($ar_result = $db_list->GetNext()) { ?>
			<div class="section_item" id="otdel__<?=$ar_result['CODE'];?>"><?=$ar_result['NAME'];?></div>
		<? }
	} ?>
</div>

<div class="personalii_content list">
	<div class="personalii_items">
		<?foreach($arResult["ITEMS"] as $arItem){
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			
			$arSecRes = CIBlockSection::GetByID($arItem["IBLOCK_SECTION_ID"]);
			$arSection = $arSecRes->GetNext();
			?>
			<div class="personalii_item" id="otdel__<?=$arSection["CODE"];?>">
				<div class="personalii_item-img">
					<img src="<?=CFile::GetPath($arItem["PROPERTIES"]["photo"]["VALUE"]);?>" alt="<?=$arItem["NAME"]?>">
				</div>
				<div class="personalii_item-info">
					<div class="personalii_item-info_name"><?=$arItem["PROPERTIES"]["name"]["VALUE"]?></div>
					<div class="personalii_item-info_post_name"><?=$arItem["PROPERTIES"]["post"]["VALUE"]?></div>
					<div class="personalii_item-info_lineup"></div>
					<div class="personalii_item-info_post_description"><?=$arItem["PROPERTIES"]["description"]["VALUE"]["TEXT"]?></div>
					<div class="personalii_item-info_contacts">
						<?foreach($arItem["PROPERTIES"]["contacts"]["VALUE"] as $key => $arItemContact) { ?>
							<div class="personalii_item-info_contact">
								<div class="contact_descr"><?=$arItem["PROPERTIES"]["contacts"]["DESCRIPTION"][$key];?></div>
								<div class="contact_text"><?=$arItem["PROPERTIES"]["contacts"]["VALUE"][$key];?></div>
							</div>
						<? } ?>
					</div>
					<div class="personalii_item-info_href">
						<a href="<?=(!empty($arItem['CODE'])) ? $arItem['CODE'] : 'javascript:;';?>/">Персональная страница<span class="arrow_right"></span></a>
					</div>
				</div>
			</div>
		<?}?>
	</div>
</div>
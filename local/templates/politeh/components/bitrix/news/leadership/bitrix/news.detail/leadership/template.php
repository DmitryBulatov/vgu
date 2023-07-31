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

$APPLICATION->SetTitle("Персональная страница - " . $arResult["NAME"]);
?>


<div class="personalii_content detail">
	<div class="personalii_items">
		<div class="personalii_item">
			<div class="personalii_item-img">
				<img src="<?=CFile::GetPath($arResult["PROPERTIES"]["photo"]["VALUE"]);?>" alt="<?=$arResult["NAME"]?>">
			</div>
			<div class="personalii_item-info">
				<div class="personalii_item-info_name"><?=$arResult["PROPERTIES"]["name"]["VALUE"]?></div>
				<div class="personalii_item-info_lineup"></div>
				<div class="personalii_item-info_post_description"><?=$arResult["PROPERTIES"]["description"]["VALUE"]["TEXT"]?></div>
				<div class="personalii_item-info_contacts">
					<?foreach($arResult["PROPERTIES"]["contacts"]["VALUE"] as $key => $arResultContact) { ?>
						<div class="personalii_item-info_contact">
							<div class="contact_descr"><?=$arResult["PROPERTIES"]["contacts"]["DESCRIPTION"][$key];?></div>
							<div class="contact_text"><?=$arResult["PROPERTIES"]["contacts"]["VALUE"][$key];?></div>
						</div>
					<? } ?>
				</div>
				<div class="personalii_item-info_href">
					<a href="/leadership/">Все сотрудники<span class="arrow_right"></span></a>
				</div>
			</div>
		</div>
		<div class="personalii_item">
			<div class="personalii_item-list_title">Образование:</div>
			<div class="personalii_item-info_list">
				<?foreach($arResult["PROPERTIES"]["formation"]["VALUE"] as $key => $arResultContact) { ?>
					<div class="personalii_item-info_list_item">
						<div class="contact_descr"><?=$arResult["PROPERTIES"]["formation"]["DESCRIPTION"][$key];?></div>
						<?=$arResult["PROPERTIES"]["formation"]["VALUE"][$key];?>
					</div>
				<? } ?>
			</div>
		</div>
		<div class="personalii_item">
			<div class="personalii_item-list_title">Трудовая деятельность:</div>
			<div class="personalii_item-info_list">
				<?foreach($arResult["PROPERTIES"]["activity"]["VALUE"] as $key => $arResultContact) { ?>
					<div class="personalii_item-info_list_item">
						<div class="contact_descr"><?=$arResult["PROPERTIES"]["activity"]["DESCRIPTION"][$key];?></div>
						<?=$arResult["PROPERTIES"]["activity"]["VALUE"][$key];?>
					</div>
				<? } ?>
			</div>
		</div>
	</div>
</div>
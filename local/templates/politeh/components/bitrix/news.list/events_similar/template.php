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
<div class="all-events-items">
	<?foreach($arResult["ITEMS"] as $arItem){
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="events-slider-item">
			<div class="events-slider-item-left">
				<div class="events-slider-item__date">
					<?if($arItem["PROPERTIES"]["DATE_EVENT_END"]["VALUE"] != ""){?>
						<span class="num small_num"><?=strtolower(FormatDate("d", MakeTimeStamp($arItem["PROPERTIES"]["DATE_EVENT_START"]["VALUE"]))) ?>.<?=strtolower(FormatDate("m", MakeTimeStamp($arItem["PROPERTIES"]["DATE_EVENT_START"]["VALUE"]))) ?></span>
						<span class="num tilda">-</span>
						<span class="num small_num"><?=strtolower(FormatDate("d", MakeTimeStamp($arItem["PROPERTIES"]["DATE_EVENT_END"]["VALUE"]))) ?>.<?=strtolower(FormatDate("m", MakeTimeStamp($arItem["PROPERTIES"]["DATE_EVENT_END"]["VALUE"]))) ?></span>
					<?}else{?>
						<span class="num"><?=strtolower(FormatDate("d", MakeTimeStamp($arItem["PROPERTIES"]["DATE_EVENT_START"]["VALUE"]))) ?></span>
						<span class="mounth"><?=strtolower(FormatDate("F", MakeTimeStamp($arItem["PROPERTIES"]["DATE_EVENT_START"]["VALUE"]))) ?></span>
					<?}?>
				</div>
				<?/*<div class="events-slider-item__date">
					<span class="num"><?=strtolower(FormatDate("d", MakeTimeStamp($arItem['DISPLAY_ACTIVE_FROM']))) ?></span>
					<span class="mounth"><?=strtolower(FormatDate("F", MakeTimeStamp($arItem['DISPLAY_ACTIVE_FROM']))) ?></span>
				</div>
				<span class="year"><?=strtolower(FormatDate("Y", MakeTimeStamp($arItem['DISPLAY_ACTIVE_FROM']))) ?></span>
				*/?>
			</div>
			<div class="events-slider-item-content">
				<div class="events-slider-item-content-top">
					<span class="events-slider-item-content__name"><?=$arItem["NAME"]?></span>
					<p class="events-slider-item-content__text">
						<? if(strlen($arItem["PREVIEW_TEXT"]) >= 320){
							$temp_substr = substr($arItem["PREVIEW_TEXT"], 0, 320);
							$temp_str = 321 - strpos($temp_substr, " ");
							$temp_str = substr($arItem["PREVIEW_TEXT"], 0, $temp_str)."...";
							echo $temp_str;
						} else {
							echo $arItem["PREVIEW_TEXT"];
						} ?>
						</p>
				</div>

				<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="events-slider-item-content__link">
					<span>Подробнее о событии</span>
					<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.09702 5.67073L3.55589 0.129615C3.37245 -0.0475486 3.08013 -0.042462 2.90297 0.140979C2.73013 0.319929 2.73013 0.603613 2.90297 0.782536L8.11763 5.99719L2.90297 11.2118C2.72269 11.3921 2.72269 11.6845 2.90297 11.8648C3.0833 12.045 3.37559 12.045 3.55589 11.8648L9.09702 6.32365C9.27729 6.14332 9.27729 5.85103 9.09702 5.67073Z" fill="#324297" /></svg>
				</a>
			</div>
		</div>
	<?}?>
</div>
<div class="event-bottom-all">
	<a href="/events/">Все события</a>
</div>

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

<div class="partners-slider swiper">
	<div class="swiper-wrapper">
		<?foreach($arResult["ITEMS"] as $arItem){
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));?>
			<div class="partners-slider-item swiper-slide">
				<?if(!empty($arItem['CODE'])){?>
					<a target="_blank" href="<?=$arItem['CODE'];?>">
						<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME'];?>">
					</a>
				<?} else {?>
					<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME'];?>">
				<?}?>
			</div>
		<?}?>
	</div>
	<div class="partners-slider-navigation">
		<button class="swiper-button swiper-button_prev"><img src="<?=SITE_TEMPLATE_PATH?>/img/left-arrow.svg" alt=""></button>
		<button class="swiper-button swiper-button_next"><img src="<?=SITE_TEMPLATE_PATH?>/img/right-arrow.svg" alt=""></button>

		<div class="swiper-pagination"></div>
	</div>

</div>
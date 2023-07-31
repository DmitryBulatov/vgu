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


<?foreach($arResult["ITEMS"] as $key => $arItem) { ?>
	<section class="figures" style="height: <?=$arItem["PROPERTIES"]["size_block"]["VALUE"];?>px">
		<div class="figures__text">
			<p class="figures__text_title"><?=$arItem["NAME"];?></p>
			<p class="figures__text_description"><?=html_entity_decode($arItem["PREVIEW_TEXT"]);?></p>
		</div>
		<?if(!empty($arItem["PREVIEW_PICTURE"])) { ?>
			<div class="figures__img">
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>">
			</div>
		<? } ?>
	</section>
<? } ?>
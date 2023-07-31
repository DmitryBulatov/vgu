<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;
?>

<div class="personalii_breadcrumb">
	<?foreach($arResult as $arItem) { ?>
		<span><a href="<?=$arItem["LINK"];?>" title="<?=$arItem["TITLE"];?>"><?=$arItem["TITLE"];?></a></span>/
	<? } ?>
</div>
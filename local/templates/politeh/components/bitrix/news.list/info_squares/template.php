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
<section class="infostend_content">
	<div class="infostend_block double_block">Информационный виртуальный стенд ВятГУ</div>
	<div class="infostend_block qr_block"><img src="<?=SITE_TEMPLATE_PATH;?>/img/QR.png"></div>
	<? foreach($arResult["ITEMS"] as $arItem){ ?>
		<a href="https://new.vyatsu.ru/sveden/<?=$arItem["CODE"];?>" class="infostend_block">
				<div class="infostend_img"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>"></div>
				<div class="infostend_title <?=(strlen($arItem["NAME"]) >= 100) ? 'strech_title': '';?>"><?=$arItem["NAME"]?></div>
		</a>
	<? } ?>
</section>
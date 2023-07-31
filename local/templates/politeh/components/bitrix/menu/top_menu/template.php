<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)){?>
	<ul class="header-top-list">
		<?foreach($arResult as $arItem){?>
			<li class="header-top-list__item"><a href="<?($arItem["LINK"]=='#' ? 'javascript:;' : $arItem["LINK"])?>" class="header-top-list__link"><?=$arItem["TEXT"]?></a></li>
		<?}?>
	</ul>
<?}?>
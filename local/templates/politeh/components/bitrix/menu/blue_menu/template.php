<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)){?>
	<ul class="blue_list">

		<?foreach($arResult as $arItem){
			if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) continue;
			if($arItem["SELECTED"]){?>
				<li class="blue_list-item"><a class="blue_list-link selected" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?}else{?>
				<li class="blue_list-item"><a class="blue_list-link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?}?>
		<?}?>
	</ul>
<?}?>
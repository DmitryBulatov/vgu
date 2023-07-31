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
<div class="news-university-top">
	<h2>Новости университета</h2>
	<div class="top-block-navigation">
		<a href="/news/" class="top-block-navigation__item active" id="all">Все новости</a>
		<? $SectList = CIBlockSection::GetList(
			Array("SORT"=>"ASC"),
			Array("IBLOCK_ID"=>"1", "ACTIVE"=>"Y"),
			false,
			Array("ID","IBLOCK_ID","SECTION_ID","NAME")
		);
		while ($SectListGet = $SectList->GetNext()){ ?>
			<a class="top-block-navigation__item" id="<?=$SectListGet['ID']?>"><?=$SectListGet['NAME']?></a>
		<? } ?>
	</div>
</div>
<div class="news-university-items">
    <?foreach($arResult["ITEMS"] as $arItem){
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));?>
        
		<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="news-university-item" id="<?=$arItem['IBLOCK_SECTION_ID']?>">
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="" class="news-university-item__image">
			<span class="news-university-item__date"><?=strtolower(FormatDate("d F Y", MakeTimeStamp($arItem['DISPLAY_ACTIVE_FROM']))) ?></span> 
			<span class="news-university-item__title"><?=$arItem["NAME"]?></span>
			<p class="news-university-item__text"><?=$arItem["PREVIEW_TEXT"]?></p>
			<span class="news-university-item-tags">
				<?foreach($arItem["PROPERTIES"]["TAGS"]["VALUE"] as $k=>$value){?>
					<span class="news-university-item-tags__item" style="background-color:<?=$arItem["PROPERTIES"]["TAGS"]["VALUE_XML_ID"][$k]?>"><?=$value?></span> 
				<?}?>
			</span>
		</a>
	<?}
	if($arParams["DISPLAY_BOTTOM_PAGER"]){?>
		<?=$arResult["NAV_STRING"]?>
	<?}?>
</div>
<?/* <a href="#" class="all-events-items-link">Загрузить еще...</a>*/?>
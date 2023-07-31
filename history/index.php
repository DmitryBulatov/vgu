<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->AddHeadScript("/history/assets/script.js" );
$APPLICATION->SetAdditionalCSS("/history/assets/style.css", true);
$APPLICATION->SetTitle("История ВятГУ");

if(CModule::IncludeModule("iblock")){
	$arSelect = Array("ID", "IBLOCK_ID", "IBLOCK_SECTION_ID", "IBLOCK_SECTION", "NAME", "DATE_ACTIVE_FROM","PROPERTY_*");
	$arFilter = Array("IBLOCK_ID"=> 8, "ACTIVE"=>"Y");
	$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
}
?>


<section class="header_banner">
	<div class="container">
		<div class="hist_breadcrumb">
			<span><a href="/">Университет</a></span>
			/
			<span><a href="javascript:;">Об университете</a></span>
			/
		</div>
		<div class="hist_tableContent">
			<div class="hist_leftBlock">
				<div class="hist_title"><? $APPLICATION->ShowTitle(); ?></div>
				<div class="hist_descr">ВятГУ, пожалуй, наиболее известен благодаря своей многолетней истории инноваций в образовании.<br>Но даже упорные любители вряд ли будут знать все эти исторические отрывки.</div>
			</div>
			<div class="hist_rightBlock">
				<div>1910-е: наши ранние истоки</div><hr>
				<div>1930-е: ВятГУ и холодная война</div><hr>
				<div>1950-е: годы роста</div><hr>
				<div>1980-е: годы “прогресса”</div><hr>
				<div>2000-е: быстрое развитие и прорывные открытия</div><hr>
			</div>
		</div>
	</div>
</section>
<section class="history_line_block">
	<div class="history_line">
		<div class="hist_line">
			<div class="hist_line_date">
				<? $rsParentSection = CIBlockSection::GetByID(8);
				if ($arParentSection = $rsParentSection->GetNext()) {
					$arFilter = array('IBLOCK_ID' => 8);
					$rsSect = CIBlockSection::GetList(array('NAME' => 'asc'),$arFilter);
					while ($arSect = $rsSect->GetNext()) { ?>
						<div id="<?=intval($arSect['NAME']);?>" class="line_year <?=($arSect['NAME'] == '1910-е') ? 'active' : '';?>"><?=$arSect['NAME'];?></div>
					<? }
				} ?>
			</div>
			<div class="hist_line_points">
				<? $rsParentSection = CIBlockSection::GetByID(8);
				if ($arParentSection = $rsParentSection->GetNext()) {
					$arFilter = array('IBLOCK_ID' => 8);
					$rsSect = CIBlockSection::GetList(array('NAME' => 'asc'),$arFilter);
					while ($arSect = $rsSect->GetNext()) { ?>
						<div id="<?=intval($arSect['NAME']);?>" class="line_point <?=($arSect['NAME'] == '1910-е') ? 'active' : '';?>"></div>
					<? }
				} ?>
			</div>
		</div>
	</div>
</section>
<section class="content_block">
	<div class="history_table">
		<div class="descktop_block">
			<div class="gray_uni_name" id="vgu_gotop"><p>КЗПИ</p>Кировский Заочный Политехнический Институт <span></span></div>
			<div class="gray_uni_name" id="vggu_gotop"><p>КГПИ</p>Кировский Государственный Педагогический Институт <span></span></div>
			<div class="gray_block_title"><b>Вятский государственный университет</b>КЗПИ до 1968 года, КирПИ до 1994 года, ВятГТУ до 2001, ВятГУ</div>
			<div class="gray_block_title"><b>Вятский государственный гуманитарный университет</b>КГПИ до 1995, ВГПУ до 2002, ВятГГУ</div>
			<div class="hist_line_desc_block solo" id="vggu_gotop_block">
				<?
				$_temp_solo = true;
				$_temp_double = false;
				while($ob = $res->GetNextElement()){
					$arFields = $ob->GetFields();
					$arProps = $ob->GetProperties();
					$yearPoint = $rsParentSection = CIBlockSection::GetByID($arFields["IBLOCK_SECTION_ID"]);
					$arParentSection = $yearPoint->GetNext(); ?>
					<?if(($arProps["parallel_line"]["VALUE"] == "Да") && !($_temp_double)){
						$_temp_double = true;
						$_temp_solo = false;?>
						</div>
						<div class="hist_line_desc_block branching" id="vgu_gotop_block">
							<div class="parent_hist_line" data-year_point="<?=$arParentSection["CODE"];?>">
								<div class="left_block"></div>
								<div class="center_block" id="<?=$arFields["NAME"];?>"><div class="vector"></div></div>
								<div class="right_block"></div>
							</div>
					<?}?>
					<?if(($arProps["parallel_line"]["VALUE"] == "Нет") && !($_temp_solo)){
						$_temp_double = true;
						$_temp_solo = true;?>
							<div class="parent_hist_line" data-year_point="<?=$arParentSection["CODE"];?>">
								<div class="left_block"></div>
								<div class="center_block" id="<?=$arFields["NAME"];?>"><div class="vector end_element"></div></div>
								<div class="right_block"></div>
							</div>
						</div>
						<div class="center_block_title" id="ORU_gotop">Объединение вузов в ВятГУ</div>
						<div class="hist_line_desc_block solo" id="ORU_gotop_block">
					<?}?>
					<?if($arProps["parallel_line"]["VALUE"] == ""){ ?>
						<div class="parent_hist_line" id="year_point_desc" data-year_point="<?=$arParentSection["CODE"];?>">
							<div class="left_block">
								<?if($arProps["img_pos"]["VALUE"] === "Слева"){ ?>
									<div class="img_left">
										<img src="<?=CFile::GetPath($arProps["vggu_img"]["VALUE"]);?>" alt="">
										<div class="img_descr"><?=$arProps["vggu_img_descr"]["VALUE"];?></div>
									</div>
								<?}?>
							</div>
							<div class="center_block" id="<?=$arFields["NAME"];?>"><span id="solo_point"></span><?=$arFields["NAME"];?></div>
							<div class="right_block">
								<?=html_entity_decode($arProps["vggu_text"]["VALUE"]["TEXT"]);?>
								<?if($arProps["img_pos"]["VALUE"] === "В тексте"){?>
									<div class="img_right">
										<img src="<?=CFile::GetPath($arProps["vggu_img"]["VALUE"]);?>" alt="">
										<div class="img_descr"><?=$arProps["vggu_img_descr"]["VALUE"];?></div>
									</div>
								<?}?>
							</div>
						</div>
					<?}?>
					<?if($arProps["parallel_line"]["VALUE"] == "Да"){?>
						<div class="parent_hist_line" id="year_point_desc" data-year_point="<?=$arParentSection["CODE"];?>">
							<div class="left_block">
								<?if(!empty($arProps["vgu_text"]["VALUE"]["TEXT"])){?><?=html_entity_decode($arProps["vgu_text"]["VALUE"]["TEXT"]);?><?}?>
								<div class="img_right">
									<img src="<?=CFile::GetPath($arProps["vgu_img"]["VALUE"]);?>" alt="">
									<div class="img_descr"><?=$arProps["vgu_img_descr"]["VALUE"];?></div>
								</div>
							</div>
							<div class="center_block" id="<?=$arFields["NAME"];?>">
								<?if(!empty($arProps["vgu_text"]["VALUE"]["TEXT"])){?><span id="left_point"></span><?}else{?><span id="left_line"></span><?}?>
								<?=$arFields["NAME"];?>
								<?if(!empty($arProps["vggu_text"]["VALUE"]["TEXT"])){?><span id="right_point"></span><?}else{?><span id="right_line"></span><?}?>
							</div>
							<div class="right_block">
								<?if(!empty($arProps["vggu_text"]["VALUE"]["TEXT"])){?><?=html_entity_decode($arProps["vggu_text"]["VALUE"]["TEXT"]);?><?}?>
								<div class="img_right">
									<img src="<?=CFile::GetPath($arProps["vggu_img"]["VALUE"]);?>" alt="">
									<div class="img_descr"><?=$arProps["vggu_img_descr"]["VALUE"];?></div>
								</div>
							</div>
						</div>
					<?}?>
					<?if($arProps["parallel_line"]["VALUE"] == "Нет"){ ?>
						<div class="parent_hist_line" id="year_point_desc" data-year_point="<?=$arParentSection["CODE"];?>">
							<div class="left_block">
								<?if($arProps["img_pos"]["VALUE"] === "Слева"){ ?>
									<div class="img_left">
										<img src="<?=CFile::GetPath($arProps["vgu_img"]["VALUE"]);?>" alt="">
										<div class="img_descr"><?=$arProps["vgu_img_descr"]["VALUE"];?></div>
									</div>
								<?}?>
							</div>
							<div class="center_block" id="<?=$arFields["NAME"];?>"><span id="solo_point"></span><?=$arFields["NAME"];?></div>
							<div class="right_block">
								<?=html_entity_decode($arProps["vgu_text"]["VALUE"]["TEXT"]);?>
								<?if($arProps["img_pos"]["VALUE"] === "В тексте"){?>
									<div class="img_right">
										<img src="<?=CFile::GetPath($arProps["vgu_img"]["VALUE"]);?>" alt="">
										<div class="img_descr"><?=$arProps["vgu_img_descr"]["VALUE"];?></div>
									</div>
								<?}?>
							</div>
						</div>
					<?}?>
				<?}?>
			</div>
		</div>
		<div class="mobile_block">
			<div class="gray_block_title"><b>Вятский государственный университет</b>КЗПИ до 1968 года, КирПИ до 1994 года, ВятГТУ до 2001, ВятГУ</div>
			<div class="gray_block_title"><b>Вятский государственный гуманитарный университет</b>КГПИ до 1995, ВГПУ до 2002, ВятГГУ</div>
			<div class="left_points_block">
				<div class="gray_uni_name scroll_top_elem" id="vggu_gotop"><p>КГПИ</p>Кировский Государственный Педагогический Институт <span></span></div>
				<?
				$arFields = Array();
				$arProps = Array();
				$arSelect_mob = Array("ID", "IBLOCK_ID", "IBLOCK_SECTION_ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_*");
				$arFilter_mob = Array("IBLOCK_ID"=> 8, "ACTIVE"=>"Y");
				$res_mob = CIBlockElement::GetList(Array(), $arFilter_mob, false, Array("nPageSize"=>50), $arSelect_mob);
				while($ob_mob = $res_mob->GetNextElement()){
					$arFields = $ob_mob->GetFields();
					$arProps = $ob_mob->GetProperties();
					$yearPoint_mob = $rsParentSection_mob = CIBlockSection::GetByID($arFields["IBLOCK_SECTION_ID"]);
					$arParentSection_mob = $yearPoint_mob->GetNext();
					if(!empty($arProps["vggu_text"]["VALUE"]["TEXT"]) && $arProps["parallel_line"]["VALUE"] != "Нет"){ ?>
						<div class="parent_his_descr" id="year_point_mob" data-year_point="<?=$arParentSection_mob["CODE"];?>">
							<span></span>
							<div class="year_title"><?=$arFields["NAME"];?></div>
							<div class="year_text <?if(strlen($arProps["vggu_text"]["VALUE"]["TEXT"]) - 450 >= 200){?>big_text<?}?>">
								<?=html_entity_decode($arProps["vggu_text"]["VALUE"]["TEXT"]);?>
								<div class="img_right">
									<img src="<?=CFile::GetPath($arProps["vggu_img"]["VALUE"]);?>" alt="">
									<div class="img_descr"><?=$arProps["vggu_img_descr"]["VALUE"];?></div>
								</div>
							</div>
						</div>
					<?}?>
				<?}?>
			</div>
			<div class="right_points_block">
				<div class="gray_uni_name scroll_top_elem" id="vgu_gotop"><p>КЗПИ</p>Кировский Заочный Политехнический Институт <span></span></div>
				<?
				$arFields = Array();
				$arProps = Array();
				$arSelect_mob = Array("ID", "IBLOCK_ID", "IBLOCK_SECTION_ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_*");
				$arFilter_mob = Array("IBLOCK_ID"=> 8, "ACTIVE"=>"Y");
				$res_mob = CIBlockElement::GetList(Array(), $arFilter_mob, false, Array("nPageSize"=>50), $arSelect_mob);
				while($ob_mob = $res_mob->GetNextElement()){
					$arFields = $ob_mob->GetFields();
					$arProps = $ob_mob->GetProperties();
					$yearPoint_mob = $rsParentSection_mob = CIBlockSection::GetByID($arFields["IBLOCK_SECTION_ID"]);
					$arParentSection_mob = $yearPoint_mob->GetNext();
					if(!empty($arProps["vgu_text"]["VALUE"]["TEXT"]) && $arProps["parallel_line"]["VALUE"] != "Нет"){ ?>
						<div class="parent_his_descr" id="year_point_mob" data-year_point="<?=$arParentSection_mob["CODE"];?>">
							<span></span>
							<div class="year_title"><?=$arFields["NAME"];?></div>
							<div class="year_text <?if(strlen($arProps["vgu_text"]["VALUE"]["TEXT"]) - 450 >= 200){?>big_text<?}?>">
								<?=html_entity_decode($arProps["vgu_text"]["VALUE"]["TEXT"]);?>
								<div class="img_right">
									<img src="<?=CFile::GetPath($arProps["vgu_img"]["VALUE"]);?>" alt="">
									<div class="img_descr"><?=$arProps["vgu_img_descr"]["VALUE"];?></div>
								</div>
							</div>
						</div>
					<?}?>
				<?}?>
			</div>
			<div class="left_points_block">
				<div class="gray_uni_name center_block_title scroll_top_elem">Объединение вузов в ВятГУ</div>
				<?
				$arFields = Array();
				$arProps = Array();
				$arSelect_mob = Array("ID", "IBLOCK_ID", "IBLOCK_SECTION_ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_*");
				$arFilter_mob = Array("IBLOCK_ID"=> 8, "ACTIVE"=>"Y");
				$res_mob = CIBlockElement::GetList(Array(), $arFilter_mob, false, Array("nPageSize"=>50), $arSelect_mob);
				while($ob_mob = $res_mob->GetNextElement()){
					$arFields = $ob_mob->GetFields();
					$arProps = $ob_mob->GetProperties();
					$yearPoint_mob = $rsParentSection_mob = CIBlockSection::GetByID($arFields["IBLOCK_SECTION_ID"]);
					$arParentSection_mob = $yearPoint_mob->GetNext();
					if(!empty($arProps["vgu_text"]["VALUE"]["TEXT"]) && $arProps["parallel_line"]["VALUE"] == "Нет"){ ?>
						<div class="parent_his_descr" id="year_point_mob" data-year_point="<?=$arParentSection_mob["CODE"];?>">
							<span></span>
							<div class="year_title"><?=$arFields["NAME"];?></div>
							<div class="year_text <?if(strlen($arProps["vgu_text"]["VALUE"]["TEXT"]) - 450 >= 200){?>big_text<?}?>">
								<?=html_entity_decode($arProps["vgu_text"]["VALUE"]["TEXT"]);?>
								<div class="img_right">
									<img src="<?=CFile::GetPath($arProps["vgu_img"]["VALUE"]);?>" alt="">
									<div class="img_descr"><?=$arProps["vgu_img_descr"]["VALUE"];?></div>
								</div>
							</div>
						</div>
					<?}?>
				<?}?>
			</div>
		</div>
	</div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
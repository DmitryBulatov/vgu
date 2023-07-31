


function changeYaerLine ($_year_id){
	$('.line_year').removeClass('active');
	$('.line_point').removeClass('active');
	
	$('.line_year#' + $_year_id).addClass('active');
	$('#' + $_year_id + '.line_point').addClass('active');
};
function changeTitleName ($_year_id, $_size){
	$_year_id = parseInt($_year_id);
	
	if($_year_id <= 1968){
		$('#vgu_gotop').html('<p>КЗПИ</p> Кировский Заочный Политехнический Институт <span></span>');
		$('#vgu_gotop.scroll_top_elem').html('<p>КЗПИ</p> Кировский Заочный Политехнический Институт <span></span>');
	}
	if($_year_id <= 1994 && $_year_id >= 1969){
		$('#vgu_gotop').html('<p>КирПИ</p> Кировский Политехнический Институт <span></span>');
		$('#vgu_gotop.scroll_top_elem').html('<p>КирПИ</p> Кировский Политехнический Институт <span></span>');
	}
	if($_year_id <= 2000 && $_year_id >= 1995){
		$('#vgu_gotop').html('<p>ВятГТУ</p> Вятский Технический Государственный Университет <span></span>');
		$('#vgu_gotop.scroll_top_elem').html('<p>ВятГТУ</p> Вятский Технический Государственный Университет <span></span>');
	}
	if($_year_id >= 2001){
		$('#vgu_gotop').html('<p>ВятГУ</p> Вятский Государственный Университет <span></span>');
		$('#vgu_gotop.scroll_top_elem').html('<p>ВятГУ</p> Вятский Государственный Университет <span></span>');
	}
	
	if($_year_id <= 1995){
		$('#vggu_gotop').html('<p>КГПИ</p> Кировский Государственный Педагогический Институт <span></span>');
		$('#vggu_gotop.scroll_top_elem').html('<p>КГПИ</p> Кировский Государственный Педагогический Институт <span></span>');
	}
	if($_year_id <= 2002 && $_year_id >= 1996){
		$('#vggu_gotop').html('<p>ВГПУ</p> Вятский Государственный Педагогический Университет <span></span>');
		$('#vggu_gotop.scroll_top_elem').html('<p>ВГПУ</p> Вятский Государственный Педагогический Университет <span></span>');
	}
	if($_year_id >= 2002){
		$('#vggu_gotop').html('<p>ВятГГУ</p> Вятский Государственный Гуманитарный Университет <span></span>');
		$('#vggu_gotop.scroll_top_elem').html('<p>ВятГГУ</p> Вятский Государственный Гуманитарный Университет <span></span>');
	}
	
	if($_year_id < 1955 && $_size){
		$('#vgu_gotop').hide();
		$('#vggu_gotop').show();
		$('#vggu_gotop').addClass('solo_gotop');
	}
	if($_year_id >= 1955 && $_year_id <= 2014 && $_size){
		$('#vgu_gotop').show();
		$('#vggu_gotop').show();
		$('#vgu_gotop').removeClass('solo_gotop');
		$('#vggu_gotop').removeClass('solo_gotop');
	}
	if($_year_id >= 2015 && $_size) {
		$('#vgu_gotop').show();
		$('#vgu_gotop').addClass('solo_gotop');
		$('#vggu_gotop').hide();
	}
};
function is_shown(target) {
	var wt = $(window).scrollTop(); 
	var wh = $(window).height();    
	var eh = $(target).outerHeight() - 150; 
	var et = $(target).offset().top;
	
	if (wt + wh >= et, wt + wh - eh * 2 <= et + (wh - eh)){
		return true;
	} else {
		return false;    
	}
};

$(window).on('scroll', function() {
	$('.parent_hist_line').each(function(index){
		if( is_shown($(this)) ) {
			changeYaerLine($(this).data('year_point'));
			changeTitleName($(this).children('.center_block').attr('id'), true);
			return false;
		}
	});
	$('.parent_his_descr').each(function(index){
		if( is_shown($(this)) ) {
			changeYaerLine($(this).data('year_point'));
			changeTitleName($(this).children('.year_title').html(), false);
			return false;
		}
	});
});

$(document).ready(function(){

	$('.line_year').on('click', function(){
		if ($(window).width() >= '851'){
			$('html, body').animate({ scrollTop: $('#year_point_desc[data-year_point="'+$(this).attr('id')+'"]').first().offset().top-145 }, 600);
			setTimeout(function(){
                changeTitleName($(this).children('.center_block').attr('id'), true);
                changeYaerLine($(this).attr('id'));
            }, 600);
		} else {
			$('html, body').animate({ scrollTop: $('#year_point_mob[data-year_point="'+$(this).attr('id')+'"]').first().offset().top-145 }, 600);
			setTimeout(function(){
                changeTitleName($(this).children('.year_title').html(), false);
                changeYaerLine($(this).attr('id'));
            }, 600);
		}
	});
	$('.line_point').on('click', function(){
		if ($(window).width() >= '851'){
			$('html, body').animate({ scrollTop: $('#year_point_desc[data-year_point="'+$(this).attr('id')+'"]').first().offset().top-145 }, 600);
			setTimeout(function(){
                changeTitleName($(this).children('.center_block').attr('id'), true);
				changeYaerLine($(this).attr('id'));
            }, 600);
		} else {
			$('html, body').animate({ scrollTop: $('#year_point_mob[data-year_point="'+$(this).attr('id')+'"]').first().offset().top-145 }, 600);
			setTimeout(function(){
				changeTitleName($(this).children('.year_title').html(), false);
				changeYaerLine($(this).attr('id'));
            }, 600);
		}
	});
	
	$('.year_text.big_text').on('click', function(elem){
		if($(this).hasClass('full_height')){
			$(this).removeClass('full_height');
		}else{
			$(this).addClass('full_height');
		}
	});
	
	$('.scroll_top_elem').on('click', function(){
		$('html, body').animate({ scrollTop: $(this).parent().offset().top-105 }, 800);
	});
	$('#vggu_gotop').on('click', function(){
		$('html, body').animate({ scrollTop: $("#vggu_gotop_block").offset().top-180 }, 800);
	});
	$('#vgu_gotop').on('click', function(){
		$('html, body').animate({ scrollTop: $("#vgu_gotop_block").offset().top-180 }, 800);
	});
	$('#ORU_gotop').on('click', function(){
		$('html, body').animate({ scrollTop: $("#ORU_gotop_block").offset().top-180 }, 800);
	});
	
});

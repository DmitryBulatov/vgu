jQuery(document).ready(function ($) {

	//переменная для проверки URL страницы
	$this_url = window.location.pathname;
	
	$('a[href^="#"]').click(function (event) {
		if ($(this).hasClass('scroll')) {
			var id_clicked_element = $(this).attr('href');
			var destination = $(id_clicked_element).offset().top;
			$('html, body').animate({ scrollTop: destination }, 1000);
			return false;
		}
	});

	const homeSlider = new Swiper('.home-slider', {
		slidesPerView: 1,
		spaceBetween: 0,
		loop: true,
		autoplay: {
			delay: 5000,
		},
		navigation: {
			nextEl: '.swiper-button_next',
			prevEl: '.swiper-button_prev',
		},
		pagination: {
			el: '.swiper-pagination',
			type: 'bullets',
		},
		breakpoints: {
			// 100: {
			//   slidesPerView: 1,
			//   spaceBetween: 14, 
			// },
			// 740: {
			//   slidesPerView: 2,
			//   spaceBetween: 30,
			// },
			// 1023: {
			//   slidesPerView: 1,
			//   spaceBetween: 30,
			// }
		},
	});

	const eventsSlider = new Swiper('.events-slider', {
		slidesPerView: 2,
		spaceBetween: 12,
		grid: {
			rows: 3,
			// fill: 'row,'
		},
		navigation: {
			nextEl: '#events-slider-button_next',
			prevEl: '#events-slider-button_prev',
		},

		breakpoints: {
			100: {
				slidesPerView: 1,
				spaceBetween: 12,
				grid: {
					rows: 3,
					// fill: 'row,'
				},
			},
			901: {
				slidesPerView: 2,
				spaceBetween: 12,
				grid: {
					rows: 3,
					// fill: 'row,'
				},
			},
		},
	});

	const partnersSlider = new Swiper('.partners-slider', {
		slidesPerView: 4,
		spaceBetween: 20,
		loop: true,
		autoplay: {
			delay: 5000,
		},
		navigation: {
			nextEl: '.swiper-button_next',
			prevEl: '.swiper-button_prev',
		},
		pagination: {
			el: '.swiper-pagination',
			type: 'bullets',
		},
		breakpoints: {
			300: {
				slidesPerView: 1,
				spaceBetween: 20,
			},
			400: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
			500: {
				slidesPerView: 3,
				spaceBetween: 20,
			},
			700: {
				slidesPerView: 4,
				spaceBetween: 20,
			},
		},
	});

	$('.header-search input').focus(() => {
		$('.header-search').addClass('active');
	});

	$('.header-search input').focusout(() => {
		$('.header-search').removeClass('active');
	});

	$('.mobile-list__link .arr').click(function (e) {
		e.preventDefault();
		const parr = $(this).closest('.mobile-list__item.sub');
		$(parr).toggleClass('open');
	});
	$('.footer-main-sections-button').click(function () {
		$('.footer-main-sections').toggleClass('open');
	});


	//функции выбора языка
	$(".active_language").click(function(){
		$(".language_block").toggleClass("active_lang_block");
		$(this).next().toggleClass("rotate_img");
	});
	$(".active_language_img").click(function(){
		$(".language_block").toggleClass("active_lang_block");
		$(this).toggleClass("rotate_img");
	});
	$(".lang_elem").click(function(){
		$(".active_language").html($(this).html());
		$(".language_block").removeClass("active_lang_block");
		$(".rotate_img").toggleClass("rotate_img");
	});
	
	//открывашка десктопного меню
	$('.header-bottom-mobile-menu-button').click(function () {
		$('.header-bottom-mobile-menu').addClass('open');
		$(".header_mobile_top_menu").addClass("hidden");
		$(".header-burger").toggleClass("active_burger");
	});
	//открывашка мобильного меню
	$(".header-burger .burger-button").click(function(){
		$(".header-bottom-mobile-menu").toggleClass("open");
		$(".header-burger").toggleClass("active_burger");
		//$(".header_mobile_top_menu").toggleClass("active");
		//$(".header-bottom-mobile-menu").removeClass("open");
	});
	//закрывашка мобильного меню
	$('.close-menu').click(function () {
		$('.header-bottom-mobile-menu').removeClass('open');
		$(".header-burger").toggleClass("active_burger");
	});
	
	//скрытый слайдер картинок в новости детально
	$('[data-fancybox="news_gallery"]').fancybox({
		'loop' : true
	});
	
	//открывашка галереи "просмотреть все фото" в новости
	$(".look_gallery").click(function(){
		$(".first_img").trigger("click");
	});
    
	//прокрутка к элементу таблицы "Университет в цифрах"
	$(".stats-sections__info").on('click', function(){
		$('html, body').animate({ scrollTop: $('.stats_content#'+$(this).data('href')).offset().top-40 }, 400);
    });
	
	//выбор отдела работников на странице руководство
	$(".section_item").on('click', function(){
		if($(this).attr('id') == 'otdel__all'){
			$(this).addClass("active");
			$('.personalii_item').removeClass('hidden');
			$(".form__placeholder").removeClass("reverse");
		}else{
			$(".section_item").removeClass("active");
			$(this).addClass("active");
			$('.personalii_item').addClass('hidden');
			$('.personalii_item#' + $(this).attr('id')).removeClass('hidden');
			$(".form__placeholder").removeClass("reverse");
		}
	});
	
	//фильтр на странице персоналии
	$(".form__placeholder").on('click', function(){
		if($(this).hasClass("reverse")) {
			$(".form__placeholder").removeClass("reverse");
			$(".select_list").removeClass("active_block");
		} else {
			$(".form__placeholder").removeClass("reverse");
			$(".select_list").removeClass("active_block");
			$(this).toggleClass("reverse");
			$(".select_list#" + $(this).attr('id')).addClass("active_block");
		}
	});
	
	//очистка фильтра на странице персоналии
	$(".select_button_delete").on('click', function(){
		$(".select_search__checkbox").prop( "checked", false );
	});
	
	$(document).mouseup(function(e){
		//закрывашка выпадающих фильтров на странице персоналии
		if ( !$(".select_list").is(e.target) && $(".select_list").has(e.target).length === 0 && !$(".form__placeholder").is(e.target) ) {
			$(".form__placeholder").removeClass("reverse");
			$(".select_list").removeClass("active_block");
		}
		//расческа для инпутов на странице персоналии
		if ( !$(".form_search__input").is(e.target) && $(".form_search__input").has(e.target).length === 0 ) {
			$(".form_search__placeholder span").hide();
		}
	});
	
	//отправка аякс для получения отсортированных персоналий
	$('.form_search').keyup(function(e) {
		var code = (e.keyCode ? e.keyCode : e.which);
		
		if (code==13 && $('.form_search__input').val() != '') {
			$.ajax({
				url: '/ajax/getPersonalii_ajax.php',
				method: 'POST',
				data: $('#person_form').serialize(),
				dataType: 'html',
				success: function(data, err){
					$(".personalii_items").html(data);
				}
			});
			$('.personalii_letter').removeClass('edit_letter');
		};
	});
	
	//функционал инпута на сортировке доп полей
	$('.select_search__input').keyup(function(e) {
		setTimeout(function(){}, 222);
		var code = (e.keyCode ? e.keyCode : e.which),
			_id = $(this).attr('id'),
			_val = $(this).val().toLowerCase();
		
		if(_val != '') {
			$(".select_search#" + _id).hide();
			$(".select_search#" + _id).each(function(){
				if($(this).text().toLowerCase().includes(_val)) {
					$(this).show();
				}
			});
		} else {
			$(".select_search#" + _id).show();
		}
	});
	
	//отправка фильтра на странице персоналии
	$(".select_button_send").on('click', function() {
		$.ajax({
			url: '/ajax/getPersonalii_ajax.php',
			method: 'POST',
			data: $('#person_form').serialize(),
			dataType: 'html',
			success: function(data, err){
				$(".personalii_items").html(data);
			}
		});
		$('.personalii_letter').removeClass('edit_letter');
	});
	
	//фильтр по первой букве на странице персоналии
	$(".personalii_letter").on('click', function(){
		$(".personalii_letter").removeClass('edit_letter');
		$('.personalii_item').removeClass('hidden');
		$(this).addClass('edit_letter');
		var $el_letter = $(this).text();
		$('.personalii_item-info_name').each(function() {
			if($(this).text().substr(0,1) != $el_letter) {
				$(this).parent().parent().addClass('hidden');
			}
		});
	});
	
	//аякс подгрузка персоналий при очистке фильтра
	$('.btn__reset').on('click', function(){
		$('.form_search__input').val('');
		$('.select_search__input').val('');
		$('.select_search__checkbox').prop( "checked", false );
		$('.personalii_letter').removeClass('edit_letter');
		$.ajax({
			url: '/ajax/getPersonalii_ajax.php',
			method: 'POST',
			data: $('#person_form').serialize(),
			dataType: 'html',
			success: function(data, err){
				$(".personalii_items").html(data);
			}
		});
	});
	
	
	//аякс переключатель новостей
	$(".news-university-wrap .top-block-navigation__item").click(function(){
		if($this_url.indexOf('/news/') != -1 || $this_url == '/'){
			var newsSectionID = $(this).attr("id");
			$.ajax({
				url: '/ajax/getNews_ajax.php',
				method: 'POST',
				data: { 'sectionID': newsSectionID },
				dataType: 'html',
				success: function(data){
					$(".news-university-items").html(data);
				}
			});
			$(".news-university-wrap .top-block-navigation__item").removeClass("active");
			$(this).addClass("active");
		}
	});
	//аякс переключатель событий
	$(".events .top-block-navigation__item").click(function(){
		if($this_url.indexOf('/events/') != -1 || $this_url == '/'){
			var newsSectionID = $(this).attr("id");
			$.ajax({
				url: '/ajax/getEvent_ajax.php',
				method: 'POST',
				data: { 'sectionID': newsSectionID },
				//dataType: 'html',
				success: function(data){
					$(".events .all-events-items").html(data);
				}
			});
			$(".events .top-block-navigation__item").removeClass("active");
			$(this).addClass("active");
		}
	});
	
	//линии между поинтами в блоке "Университет в цифрах"
	/*
	function drawLines(){
		let canvas = document.getElementById('canvas');
		let ctx = canvas.getContext('2d');
		ctx.beginPath();
		ctx.lineWidth = 1;
		$('.stats_point').each(function(){
			var size = $(this).width() / 2;
			var x = ($(this).data('x') + size);
			var y = ($(this).data('y') + size);
			if($(this).data('point_num') == 0) {
				ctx.moveTo(x, y);
			} else {
				ctx.lineTo(x, y);
			}
			console.log(x, y, $(this).parent().position());
		});
		ctx.stroke();
	}
	drawLines();
	*/

	//анимация появления точек в блоке "Университет в цифрах" на главной
	let observer = new IntersectionObserver(onEntry, { threshold: [0.5] });
	let elements = document.querySelectorAll('.stats_item');
	for (let elm of elements) {
		observer.observe(elm);
	}
});

//функция для работы анимации появления точек в блоке "Университет в цифрах" на главной
function onEntry(entry) {
	entry.forEach(change => {
		if (change.isIntersecting) {
			change.target.classList.add('visible');
		} else {
			change.target.classList.remove('visible');
		}
	});
}


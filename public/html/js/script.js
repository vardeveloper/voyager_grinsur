// jQuery
(function ($) {
	"use strict";
	$(document).ready(function () {
		// Main Slider
		$('.main-flexslider').flexslider({
			directionNav: true,
			controlNav: false,
			animation: "fade",
			slideshowSpeed: 7000,
			prevText: "",
			nextText: "",
		});

		// Styling Select elements
		Select.init({ selector: '.elselect' });

		// Agents slider
		$(".owl-carousel").owlCarousel({
			items: 2,
			navigation: true,
			pagination: false,
			navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
		});

		//Tab
		$('#myTab a').click(function (e) {
			e.preventDefault()
			$(this).tab('show');
		})

		// Property-Details page slider
		$('#details-carousel').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			itemWidth: 142,
			itemMargin: 0,
			prevText: "",
			nextText: "",
			asNavFor: '#details-slider'
		});

		$('#details-slider').flexslider({
			animation: "slide",
			controlNav: true,
			animationLoop: true,
			slideshow: true,
			sync: "#details-carousel",
			directionNav: false,
		});

		// Animated back to top
		$('#backtop-btn').click(function () {
			$("html, body").animate({ scrollTop: 0 }, 600);
		});

		// Nav Menu
		$('.dropdown').on('show.bs.dropdown', function (e) {
			$(this).find('.dropdown-menu').first().stop(true, true).slideDown();
		});

		$('.dropdown').on('hide.bs.dropdown', function (e) {
			$(this).find('.dropdown-menu').first().stop(true, true).slideUp();
		});

		// Contact Form
		$("input[type='text'], textarea").keypress(function () {
			$(this).css({ "background-color": "#fff" });
		});

		// ADD BY VARDEVELOPER
		$(function () {
			$("#submit_btn").on("click", function () {

				var proceed = true;

				$("#formContact input[required], #formContact textarea[required]").each(function () {

					$(this).css('background-color', '');
					if (!$.trim($(this).val())) {
						$(this).css('background-color', '#ffbbbb');
						proceed = false;
					}

					var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
					if ($(this).attr("name") == "email" && !email_reg.test($.trim($(this).val()))) {
						$(this).css('background-color', '#ffbbbb');
						proceed = false;
					}

				});

				if (proceed) {

					var post_data = {
						'name': $('input[name=name]').val(),
						'email': $('input[name=email]').val(),
						'phone': $('input[name=phone]').val(),
						'msg': $('textarea[name=message]').val(),
					};

					$.post('sendmail', post_data, function (response) {

						if (response.type === 'error') {
							$('#submit_btn').val('ENVIAR MENSAJE');
							$('#submit_btn').css({ "background-color": "#0095e6" });
							$('#' + response.text + '').css('background-color', '#ffbbbb');
						} else {
							$('#submit_btn').val('MENSAJE ENVIADO!');
							$('#submit_btn').css({ "background-color": "#19AA5F" });
							$('#formContact').trigger("reset");
						}

						setTimeout(function () {
							$('#submit_btn').val('ENVIAR MENSAJE');
							$('#submit_btn').css({ "background-color": "#0095e6" });
						}, 5000);

					}, 'json');

				}
				return false;
			});
		});

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

	});
})(jQuery);
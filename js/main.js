
$(document).ready(function()
{
	"use strict";

	/* 

	1. Vars and Inits

	*/

	var header = $('.header');
	var menuActive = false;

	setHeader();

	$(window).on('resize', function()
	{
		setHeader();
	});

	$(document).on('scroll', function()
	{
		setHeader();
	});

	initMenu();
	initHomeSlider();
	

	/* 

	2. Set Header

	*/

	function setHeader()
	{
		if($(window).scrollTop() > 100)
		{
			header.addClass('scrolled');
		}
		else
		{
			header.removeClass('scrolled');
		}
	}

	/* 

	3. Init Menu

	*/

	function initMenu()
	{
		if($('.hamburger').length)
		{
			var hamb = $('.hamburger');

			hamb.on('click', function(event)
			{
				event.stopPropagation();

				if(!menuActive)
				{
					openMenu();
					
					$(document).one('click', function cls(e)
					{
						if($(e.target).hasClass('menu_mm'))
						{
							$(document).one('click', cls);
						}
						else
						{
							closeMenu();
						}
					});
				}
				else
				{
					$('.menu_container').removeClass('active');
					menuActive = false;
				}
			});
		}
	}

	function openMenu()
	{
		var fs = $('.menu_container');
		fs.addClass('active');
		hambActive = true;
		menuActive = true;
	}

	function closeMenu()
	{
		var fs = $('.menu_container');
		fs.removeClass('active');
		hambActive = false;
		menuActive = false;
	}

	/* 

	2. Init Home Slider

	*/

	function initHomeSlider()
	{
		if($('.home_slider').length)
		{
			var homeSlider = $('.home_slider');
			homeSlider.owlCarousel(
			{
				items:1,
				loop:true,
				autoplay:true,
				autoplayTimeout:5000,
				nav:true,
				navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"],
				dots:false,
				animateOut: 'fadeOut',
				smartSpeed:1200,
			});

			function startProgressBar()
			{
				if($('.home_slider_progress').length)
				{
					$('.home_slider_progress').css({width:"100%", transition:"width 8500ms"});
				}
			}

			function resetProgressBar()
			{
				if($('.home_slider_progress').length)
				{
					$('.home_slider_progress').css({width:"0", transition:"width 0s"});
				}
			}
			
		}
	}




});


// cog rotation
$(window).scroll(function() {
	var theta = $(window).scrollTop() / 10 % Math.PI;
	$('.fa-cog').css({ transform: 'rotate(' + theta + 'rad)' });
	});
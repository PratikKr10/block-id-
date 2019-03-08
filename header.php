<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<title>Blockidtheft Crypto Technology</title>
<meta charset="UTF-8" />
<meta name="HandheldFriendly" content="true">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link type="image/x-icon" rel="shortcut icon" href="<?php echo get_template_directory_uri().'/images/favicon.ico';?>"/>
<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/bootstrap.min.css';?>"/>
<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/owl.carousel.min.css';?>"/>
<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri().'/styles.css';?>"/>
<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/responsive.css';?>"/>
<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/html5.js';?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/respond.js';?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/jquery.min.js';?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/bootstrap.min.js';?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/owl.carousel.min.js';?>"></script>

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500" rel="stylesheet"> 


<!-- responsive menu -->
<script type="text/javascript">
	$(document).ready(function(){
		$('.menu').click(function(){
			$('body').toggleClass('show-menu');
		});
		$('.close-button').click(function(){
			$('body').removeClass('show-menu');
		});
		$(window).scroll(function(){
		  var sticky = $('#header'),
			  scroll = $(window).scrollTop();

		  if (scroll >= 70) sticky.addClass('fixed');
		  else sticky.removeClass('fixed');
		});
		
		$(document).ready(function(){
			// hide #back-top first
			$("#myBtn").hide();
			
			// fade in #back-top
			$(function () {
				$(window).scroll(function () {
					if ($(this).scrollTop() > 100) {
						$('#myBtn').fadeIn();
					} else {
						$('#myBtn').fadeOut();
					}
				});

				// scroll body to 0px on click
				$('#myBtn').click(function () {
					$('body,html').animate({
						scrollTop: 0
					}, 1000);
					return false;
				});
			});
		});
		$("#header").load("<?php echo get_template_directory_uri().'/header.html';?>");
	    $("#footer").load("<?php echo get_template_directory_uri().'/footer.html';?>");
	    
	    $('.main_slider').owlCarousel({
			loop:true,
			nav:true,
			responsive:{
				0:{
					items:1
				}
			}
		});
		$('.services_box').owlCarousel({
			loop:true,
			nav:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				768:{
					items:3
				},
				1024:{
					items:4
				}
			}
		});
		
		if($(window).width() < 768){
			$('.why_box').owlCarousel({
				loop:true,
				nav:true,
				responsive:{
					0:{
						items:1
					},
					767:{
						items:2
					}
				}
			});
		}

	});
</script>
<!-- responsive menu end -->

</head>
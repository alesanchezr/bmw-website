/* global $ */
import './style/index.scss';
import $ from 'jquery';
import jQuery from 'jquery';
import bootstrap from 'bootstrap';

window.$ = $;
window.jQuery = jQuery;

$(document).ready(function(){
	
	require('lightgallery');
	
	$('#myTab a').hover( function (e) {
		$(this).tab('show');
	});
	$( ".men" ).mouseleave(function(){
		$(".menu-content").removeClass('active show');
		$('#myTab a').removeClass('active show');
	});
	
	$('.horizontal-gallery').lightGallery({
		selector: '.img-slide',
		thumbnail: true
	});
	
	$('.mazonri-gallery').lightGallery({
		selector: '.img-mazonri',
		thumbnail: true
	});
	
	$('[data-toggle="popover"]').popover();
	
});


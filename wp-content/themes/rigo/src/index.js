/* global $ */
import './style/index.scss';
import TemplateManager from 'html-template-engine';
import $ from 'jquery';
import jQuery from 'jquery';
window.$ = $;
window.jQuery = jQuery;

window.onload = function(){
    TemplateManager.start();
};

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
		selector: '.img-slide'
	});
});

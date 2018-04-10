import './style/index.scss';
import TemplateManager from 'html-template-engine';

window.onload = function(){

    TemplateManager.start();
    $(document).ready(function(){
    	let tabselected=null;
		$('#myTab a').hover( function (e) {

		  $(this).tab('show');

		})
		 $( ".men" ).mouseleave(function(){
		 	$(".menu-content").removeClass('active show');
		 	$('#myTab a').removeClass('active show');
		 	console.log(1)
		 });

		 function topFunction() {
		    document.body.scrollTop = 0; // For Safari
		    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
		}
	})


// Gets the video src from the data-src on each button






}

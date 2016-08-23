// JavaScript Document
$(document).ready(paginaSlider);
function paginaSlider() {
              $("#slider2").responsiveSlides({
              auto: true,
              pager: false,
              nav: true,
              speed: 300,
              namespace: "callbacks",
              before: function () {
                $('.events').append("<li>before event fired.</li>");
              },
              after: function () {
                $('.events').append("<li>after event fired.</li>");
                        }
						
              });
			  
}
$(document).ready(paginaCargada);

function paginaCargada()
{
		$('#your-gallery').bwayImageSlider({
		  axis       : 'x',
		  itemMargin : 14,
		  speed      : 500,
		  loop       : true,
		  keyboard   : true
		});
}
$(document).ready(paginaCargada2);
function paginaCargada2()
{
		$('#your-gallery2').bwayImageSlider({
		  axis       : 'x',
		  itemMargin : 14,
		  speed      : 500,
		  loop       : true,
		  keyboard   : true
		});	

}
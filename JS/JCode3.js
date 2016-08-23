// JavaScript Document

$(document).ready(paginaCargada);

function paginaCargada()
{
	$('#buscadorIcono').hide();
	$('#buscadorIcono').click(accionMenu);
	$(window).resize(cambioScreen);
	cambioScreen();
}

function cambioScreen()
{
   var anchoPantalla = window.innerWidth;
  
    if (anchoPantalla < 400)
	{
	  	$('#buscadorIcono').show();
		$('#buscador').hide();
	}
	
	else 
	{
		$('#buscadorIcono').hide();	
		$('#buscador').show();
	}
}

function accionMenu()
{
 	$('#buscador').slideToggle(1000);	
}
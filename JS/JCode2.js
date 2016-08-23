// JavaScript Document
$(document).ready(paginaCargada);

function paginaCargada()
{
	$('#dropMenu').hide();
	$('#dropMenu').click(accionMenu);
	$(window).resize(cambioScreen);
	cambioScreen();
}

function cambioScreen()
{
   var anchoPantalla = window.innerWidth;
  
    if (anchoPantalla < 400)
	{
	  	$('#dropMenu').show();
		$('#menuNavegador').hide();
	}
	
	else 
	{
		$('#dropMenu').hide();	
		$('#menuNavegador').show();
	}
}

function accionMenu()
{
 	$('#menuNavegador').slideToggle(1000);	
}
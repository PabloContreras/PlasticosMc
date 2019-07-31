<?php

function isActive($url)
{
	if(Request::path() == $url){
		return true;
	}
	return false;
}

function getRandomBackground(){
	$backgrounds = [
		'bg-1.png',
		'bg-2.jpg',
		'bg-3.jpg'
	];
	$num_ran = rand(0,sizeof($backgrounds)-1);
	return $backgrounds[$num_ran];
}

function getAreaInteres($num)
{
	$areas = [
		"Seleccione las áreas de interés",
		"Capital Humano",
		"Compras",
		"Contabilidad",
		"Logística y almacén",
		"Producción",
		"Mantenimiento",
		"Sistemas",
		"Transporte",
		"Intendencia",
		"Servicio al Cliente",
		"Planeación",
		"Calidad",
	];

	return $areas[$num];
}
<?php

function isActive($url)
{
	if(Request::path() == $url){
		return true;
	}
	return false;
}
<?php
/*****************************************************************************
 *                                                                           *
 * Shop-Script FREE                                                          *
 * Copyright (c) 2006 Articus consulting group. All rights reserved.         *
 *                                                                           *
 ****************************************************************************/



	//this file indicates listing of all available languages

class Language
{
	var $description; //language name
	var $filename; //language PHP constants file
	var $template; //template filename
}

	//a list of languages
	$lang_list = array();

	//to add new languages add similiar structures

	$lang_list[0] = new Language();
	$lang_list[0]->description = "�������";
	$lang_list[0]->filename = "russian.php";
	$lang_list[0]->template_path = "./templates/tmpl1/";

	$lang_list[1] = new Language();
	$lang_list[1]->description = "English";
	$lang_list[1]->filename = "english.php";
	$lang_list[1]->template_path = "./templates/tmpl1/";

?>
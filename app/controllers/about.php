<?php

Class About extends Controller
{
	function index()
	{
		$data['page_title'] = "Qui sommes-nous?";
		$this->view("myshop/about-us",$data);
	}

}
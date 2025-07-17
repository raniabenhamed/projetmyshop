<?php

Class Produits extends Controller
{
	function index()
	{
		$data['page_title'] = "Produits";
		$this->view("myshop/produits",$data);
	}

}
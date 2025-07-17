<?php

Class Legal extends Controller
{
	function index()
	{
		$data['page_title'] = "Legal notices";
		$this->view("myshop/legal",$data);
	}

}
<?php

Class Blog extends Controller
{
	function index()
	{
		$data['page_title'] = "Blog";
		$this->view("myshop/blog",$data);
	}

}
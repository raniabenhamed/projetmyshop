<?php

Class Login extends Controller 
{
	function index()
	{
 	 	
 	 	$data['page_title'] = "Login";

 	 	if(isset($_POST['email']))
 	 	{
 	 		$user = $this->loadModel("user");
 	 		$user->signup($_POST);

 	 	}elseif(isset($_POST['email']) && !isset($_POST['password'])){

 	 		$user = $this->loadModel("user");
 	 		$user->login($_POST);
 	 	}

		$this->view("myshop/login",$data);
	}

}


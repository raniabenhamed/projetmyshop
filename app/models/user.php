<?php 

Class User 
{

	function login($POST)
	{
		$DB = new Database();

		$_SESSION['error'] = "";
		if(isset($POST['email']) && isset($POST['password']))
		{

			$arr['email'] = $POST['email'];
			$arr['password'] = $POST['password'];

			$query = "select * from users where email = :email && password = :password limit 1";
			$data = $DB->read($query,$arr);
			echo "Query: $query<br>";
			echo "Data:<pre>";
			print_r($data);
			echo "</pre>";
			if (is_array($data) )

			{
 				//logged in
 				$_SESSION['email'] = $data[0]->email;
				$_SESSION['user_url'] = $data[0]->url_address;

				header("Location:". ROOT . "home");
				die;

			}else{

				$_SESSION['error'] = "wrong email
				 or password";
			}
		}else{

			$_SESSION['error'] = "please enter a valid email
			 and password";
		}

	}

	function signup($POST)
	{

		$DB = new Database();

		$_SESSION['error'] = "";
		if(isset($POST['email']) && isset($POST['password']))
		{

			$arr['password'] = $POST['password'];
			$arr['email'] = $POST['email'];
			$arr['url_address'] = get_random_string_max(60);
			$arr['date'] = date("Y-m-d H:i:s");

			$query = "insert into users (password,email,url_address,date) values (:password,:email,:url_address,:date)";
			$data = $DB->write($query,$arr);
			if($data)
			{
				
				header("Location:". ROOT . "login");
			
				die;
			}

		}else{

			$_SESSION['error'] = "please enter a valid email
			 and password";
		}
	}

	function check_logged_in()
	{

		$DB = new Database();
		if(isset($_SESSION['user_url']))
		{

			$arr['user_url'] = $_SESSION['user_url'];

			$query = "select * from users where url_address = :user_url limit 1";
			$data = $DB->read($query,$arr);
			if(is_array($data))
			{
				//logged in
 				$_SESSION['email'] = $data[0]->email;
				$_SESSION['user_url'] = $data[0]->url_address;

				return true;
			}
		}

		return false;

	}

	function logout()
	{
		//logged in
		unset($_SESSION['user_name']);
		unset($_SESSION['user_url']);

		header("Location:". ROOT . "login");
		die;
	}


}
<?php
class Controller_Account extends Controller
{
	function __construct()
	{
		$this->model = new Model_Account();
		$this->view = new View();
	}

	function action_login()
	{
		if(isset($_POST['login']) && isset($_POST['password']))
		{
			echo "erre";
			$login = $_POST['login'];
			$password =$_POST['password'];

			if ($auth == true)
			{
				session_start();
				header('Location:/index/');
			}
			else
			{
				$data["auth"] = false;
			}
		}
		$data["auth"] = false;
		$this->view->generate('login_view.php', 'template_view.php', $data);
	}

	function action_logout()
	{
		session_unset();
		$this->view->generate('main_view.php', 'template_view.php');
	}

	function action_create()
	{
		if (isset($_POST['username']) && isset($_POST['password']))
		{
			$data["is_account_created"] = true;
			echo 'yoohoo';
		}
		else
			$data["is_account_created"] = false;
		$this->view->generate('create_account_view.php', 'template_view.php', $data);
	}

	function action_getaccount()
	{
		// if (isset($_POST['username']) && isset($_POST['password']))
		// {
		// 	$data["is_account_created"] = true;
		// 	echo 'yoohoo';
		// }
		// else
		// {
		// 	$data["is_account_created"] = false;
		// }
		print_r($_POST);
		//$this->view->generate('create_account_view.php', 'template_view.php', $data);
	}

}
?>

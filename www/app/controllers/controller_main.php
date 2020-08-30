<?php
class Controller_Main extends Controller
{
	function action_index()
	{
		$this->view->generate('main_view.php', 'template_view.php');
	}

	function action_setup()
	{
		if (isset($_POST['is_success']) && $_POST['is_success'] == 1){
			require_once($_SERVER['DOCUMENT_ROOT'] . "/config/setup.php");
			//$this->view->generate('setup_view.php', 'template_view.php', $data);
		}
		else
			$this->view->generate('setup_view.php', 'template_view.php');
	}
}
?>

<?php
class Model_Account extends Model
{
	function action_index()
	{
		$this->view->generate('main_view.php', 'template_view.php');
	}
}
?>

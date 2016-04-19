<?php
class Controller_dyshevaia extends Controller
{
	function action_index()
	{
		$this->view->generate('dyshevaia_view.php','template_view.php');

	}
}
?>
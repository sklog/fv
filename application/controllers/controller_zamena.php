<?php
class Controller_zamena extends Controller
{
	function action_index()
	{
		$this->view->generate('zamena_view.php','template_view.php');

	}
}
?>
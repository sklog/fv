<?php
class Controller_Vanna extends Controller
{
	function action_index()
	{
		$this->view->generate('vanna_view.php','template_view.php');

	}
}



?>
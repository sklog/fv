<?php
class Controller_Radiatory extends Controller
{
	function action_index()
	{
		$this->view->generate('radiatory_view.php','template_view.php');

	}
}



?>
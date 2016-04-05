<?php
class Controller_Radiatory extends Controller
{
	function action_index()
	{
		$this->view->generate('Radiatory_view.php','template_view.php');

	}
}



?>
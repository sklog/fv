<?php
class Controller_smesitel extends Controller
{
	function action_index()
	{
		$this->view->generate('smesitel_view.php','template_view.php');

	}
}



?>
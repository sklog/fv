<?php
class Controller_Foto extends Controller
{
	function action_index()
	{
		$this->view->generate('foto_view.php','template_view.php');
	}
}


?>
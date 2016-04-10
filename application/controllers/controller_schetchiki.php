<?php
class Controller_Schetchiki extends Controller
{


	function action_index()
	{

		$this->view->generate('schetchiki_view.php','template_view.php');
	
	}

}



?>
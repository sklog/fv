<?php
class Controller_Price extends Controller
{
	function action_index()
	{
		$this->view->generate('price_view.php','template_view.php');
	}
}


?>
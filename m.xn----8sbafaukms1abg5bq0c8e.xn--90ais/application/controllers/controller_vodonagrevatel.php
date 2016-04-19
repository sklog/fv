<?php
class Controller_Vodonagrevatel extends Controller
{
	function action_index()
	{
		$this->view->generate('vodonagrevatel_view.php','template_view.php');

	}
}
?>
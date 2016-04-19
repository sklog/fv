<?php
class Controller_polotencesyshitel extends Controller
{
	function action_index()
	{
		$this->view->generate('polotencesyshitel_view.php','template_view.php');

	}
}
?>
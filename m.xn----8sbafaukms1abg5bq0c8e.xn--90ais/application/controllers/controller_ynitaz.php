<?php
class Controller_ynitaz extends Controller
{
	function action_index()
	{
		$this->view->generate('ynitaz_view.php','template_view.php');

	}
}
?>
<?php
class Controller_sitemap extends Controller
{
	function action_index()
	{
		$this->view->generate('sitemap_view.php','template_view.php');

	}
}
?>
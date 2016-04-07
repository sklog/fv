<?php
class Controller_pol extends Controller
{
    function action_index()
    {
        $this->view->generate('pol_view.php','template_view.php');

    }
}
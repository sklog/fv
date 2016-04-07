<?php
class Controller_stiralka extends Controller
{
    function action_index()
    {
        $this->view->generate('stiralka_view.php','template_view.php');

    }
}
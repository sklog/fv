<?php
class Controller_Email extends Controller
{
    function action_index()
    {
     /* extract($_POST);
        if(!empty($telefon))
        {

            if(str($_POST['telefon']))
            {

            }
            else
            {
                echo"<font color='red'>Email введён не корректно</font>";
                exit;
            }
            $admin_email = 'skloger@gmail.com'; // your email $admin_email = 'fullhousetihon@gmail.com';
            $subject = 'Candy Lady - новый контакт'; // Subject
            $message = 'Сообщение :'.$mess.'. Мой адрес электронной почты: ' . $email . '.'; // Message
            $headers = "From:" . $email;
            mail($admin_email,$subject,$message,$headers);

            echo"<font color='olive'>ваши данные успешно отправлены!</font>";
        }
        else
        {
            echo "<font color='red'>пожалуйста, заполните все поля</font>";
        }   */
        $this->view->generate('email_view.php','template_view.php');
    }
}


?>
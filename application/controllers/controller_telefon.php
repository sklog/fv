<?php

class Controller_telefon extends Controller
{
        function action_index()
        {

        if($_POST['telefon'] == '+375' or empty($_POST['telefon'])) die('<font color="#8b0000">Заполните поле!</font>');
        $tell = $_POST['telefon'];
        $_SESSION["telefon"] = $_POST["telefon"];
        $tell= htmlspecialchars($tell);
        $tell = trim($tell);
        $mail = "felix-mazur@mail.ru";
        if(!preg_match("/^[0123456789+]{13}+$/", $tell)  ) die('<font color="#8b0000">Неправильно набран номер!</font>');
        mail($mail,"Вызов-сантехника.бел","Перезвоните по номеру: $tell");
        echo "Cпасибо! Ваши данные отправлены!";
        }




}
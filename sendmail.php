<?php

$post = $_POST;


$to = "regkred@mail.ru";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; UTF-8\r\n";

// if ($post) {
    
// }
if ($post['comment']){
    $subject = 'Заявка с сайта Региональный кредит'. ' на тему '. $post['comment'] ;
    $message = "Телефон: ".$post['phone']."<br>".
                "Имя: ".$post['name']."<br>".
                "Тема:".$post['theme']."<br>".
                "Сообщение:".$post['comment'];
    mail($to, $subject, $message, $headers);
}
else{
    $subject = 'Заявка с сайта Региональный кредит';
    $message = "Телефон: ".$post['phone']."<br>".
                "Имя: ".$post['name']."<br>".
                "Форма:".$post['write_us'];
    mail($to, $subject, $message, $headers);
}
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);
$name = urldecode($name);
$email = urldecode($email);
$message = urldecode($message);
$name = trim($name);
$email = trim($email);
$message = trim($message);
//echo $name;
//echo "<br>";
//echo $message;
if (mail("nickkalashnikov2000@gmail.com", "������ � �����", "���:".$name.". E-mail: ".$message ,"From:" .$email."))
 {     echo "��������� ������� ����������";
} else {
    echo "��� �������� ��������� �������� ������";
}?>
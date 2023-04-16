<?php
require($_SERVER["DOCUMENT_ROOT"] . '/bitrix/modules/main/include/prolog_before.php');
global $USER;

if ($USER->IsAuthorized()) {
    header('Location: /personal/');
}

$email = $_POST['email'];
$password = $_POST['password'];


$userData = CUser::GetByLogin($email)->fetch();

if(!intval($userData)){
    echo 'Пользователя не существует';
    die();
}

$userCheck = new CUser;
$arAuthResult = $userCheck->Login($userData['LOGIN'], $password);

echo ($arAuthResult == 1) ? 'personal' : 'Неверный пароль';

<?php
require($_SERVER["DOCUMENT_ROOT"] . '/bitrix/modules/main/include/prolog_before.php');
global $USER;

if ($USER->IsAuthorized()) {
    header('Location: /');
}
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];

$validateParameters = [
    'LOGIN' => $login,
    'EMAIL' => $email,
    'PASSWORD' => $password,
];
validate($validateParameters);

$new_user = new CUser;
$arFields = [
    'NAME'=>$login,
    'LOGIN' => $email,
    'EMAIL' => $email,
    'PASSWORD' => $password,
    'CONFIRM_PASSWORD' => $password
];
$ID = $new_user->Add($arFields);

$USER->Authorize($ID);

echo (intval($ID) > 0)  ? 'main' : $new_user->LAST_ERROR;


function validate($parameters)
{
    $reg_exp = '/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/i';

    if (!$parameters['PASSWORD']) {
        echo 'Введите пароль';
        die();
    }
    if (strlen($parameters['PASSWORD']) < 6) {
        echo 'Пароль должен быть длинее 6 символов';
        die();
    }
    if (!preg_match($reg_exp, $parameters['EMAIL'])) {
        echo 'Не похоже на электронную почту';
        die();
    }

    $arFilter = [
        'EMAIL' => $parameters['EMAIL'],
    ];

    $result = CUser::GetList('', '', $arFilter, ['*']);
    $arResult = $result->fetch();

    if ($arResult) {
        echo 'Email уже используется';
        die();
    }

    $result = CUser::GetByLogin($parameters['LOGIN']);
    $arResult = $result->Fetch();
    if ($arResult) {
        echo 'Login  занят';
        die();
    }

}

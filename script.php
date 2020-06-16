<?php
    session_start();

$categories = [];
$categories = [];
'Infantil';
$categories = [];
'Adolescente';
$categories = [];
'Adulto';
$categories = [];
'Idoso';

$name = $_POST['name'];
$age = $_POST['age'];

if(empty($name))
{
    $_SESSION['error-message'] = 'Preencha o nome completo!';
    header('location: index.php');
}

if(strlen($name) < 3)
{
    $_SESSION['error-message'] = 'O Nome não pode conter menos de 3 caracteres!';
    header('location: index.php');
}

if(strlen($name) > 20) {
    $_SESSION['error-message'] = 'Quantidade máxima de caracteres: 20!';
    header('location: index.php');
}

if(!is_numeric($age))
{
    $_SESSION['error-message'] = 'Informe um NÚMERO para a idade!';
    header('location: index.php');
}


if ($age >= 6 && $age <= 12) {
    for ($i = 0; $i <= count($categories); $i++) {
        if ($categories[$i] == 'Infantil')
        echo "O Nadador " . $name . " compete na categoria " . $categories[$i];
    }
} else if ($age >= 13 && $age <= 18) {
    for ($i = 0; $i <= count($categories); $i++)
    {
        if ($categories[$i] == 'Adolescente')
        echo "O Nadador " . $name . " compete na categoria Adolescente";
    }
}
else
{

    for ($i = 0; $i <= count($categories); $i++)
    {
        if ($categories[$i] == 'Adulto')
        echo "O Nadador " . $name . " compete na categoria Adulto";
    }
}
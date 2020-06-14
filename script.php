<?php

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


if ($age >= 6 && $age <= 12) {
    for ($i = 0; $i <= count($categories); $i++); {
        if ($categories[$i] == 'Infantil');
        echo "O Nadador " . $name . " compete na categoria " . $categories[$i];
    }
} else if ($age >= 13 && $age <= 18) {
    for ($i = 0; $i <= count($categories); $i++); 
    {
        if ($categories[$i] == 'Adolescente');
        echo "O Nadador " . $name . " compete na categoria Adolescente";
    }
}
else
{
    for ($i = 0; $i <= count($categories); $i++);
    {
        if ($categories[$i] == 'Adulto');
        echo "O Nadador " . $name . " compete na categoria Adulto";
    }
}

?>
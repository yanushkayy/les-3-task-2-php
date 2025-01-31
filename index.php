<?php 

// strtolower - возвращает строку в нижний регистр
// ucfirst - преобразовывает первый символ строки в верхний регистр
// strtoupper — сделать строку заглавной
// substr - возвращает часть строки, первое значение - начало, второе значение - длина

echo 'Введите вашу фамилию: ';
$surname = ucfirst(strtolower(trim(fgets(STDIN))));

echo 'Введите ваше имя: ';
$name = ucfirst(strtolower(trim(fgets(STDIN))));

echo 'Введите ваше отчество: ';
$middleName = ucfirst(strtolower(trim(fgets(STDIN))));

$fullName = "$surname $name $middleName";

$fio = strtoupper(substr($surname, 0, 1)) . strtoupper(substr($name, 0, 1)) . mb_strtoupper(mb_substr($middleName, 0, 1));

$surnameAndInitials  = "$surname" . mb_strtoupper(substr($name, 0, 1)) . mb_strtoupper(mb_substr($middleName, 0, 1));


echo "Полное имя: $fullName\n";
echo "Фамилия и инициалы: $surnameAndInitials\n";
echo "Аббревиатура: $fio\n";


?>
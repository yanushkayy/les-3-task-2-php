<?php 

// strtolower - возвращает строку в нижний регистр
// ucfirst - преобразовывает первый символ строки в верхний регистр
// strtoupper — сделать строку заглавной
// substr - возвращает часть строки, первое значение - начало, второе значение - длина

echo 'Введите вашу фамилию: ';
$surname = mb_convert_case(trim(fgets(STDIN)), MB_CASE_TITLE, "UTF-8");

echo 'Введите ваше имя: ';
$name = mb_convert_case(trim(fgets(STDIN)), MB_CASE_TITLE, "UTF-8");

echo 'Введите ваше отчество: ';
$middleName = mb_convert_case(trim(fgets(STDIN)), MB_CASE_TITLE, "UTF-8");

$fullName = "$surname $name $middleName";

$fio = mb_strtoupper(mb_substr($surname, 0, 1)) . mb_strtoupper(mb_substr($name, 0, 1)) . mb_strtoupper(mb_substr($middleName, 0, 1));

$surnameAndInitials  = "$surname" . mb_strtoupper(mb_substr($name, 0, 1)) . mb_strtoupper(mb_substr($middleName, 0, 1));

echo "Полное имя: $fullName\n";
echo "Фамилия и инициалы: $surnameAndInitials\n";
echo "Аббревиатура: $fio\n";

?>
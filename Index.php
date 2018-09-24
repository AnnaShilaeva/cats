<?php
include 'CatActions.php';
/*Файл который нужно запускать для вывода рущультатов по заданию 1 уровень. Основы PHP
https://wiki.a1qa.com/pages/viewpage.action?pageId=242138003
*/

$new = new СatActions();
$new->createCats();
$new->countSumAndMultyplicationOfAges();
$new->countOldCats();
$new->catchException();
$new->checkGoTofunction();
$new->isCatCanFly();
?>

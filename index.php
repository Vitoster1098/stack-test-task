<?php
include_once('shablon.php');
include_once('hierarchy_true.php');

$content->set('{page_title}', 'Тестовое задание №1');
$content->set('{css_style}', 'css/style.css');
$content->set('{page_text}', recPrint($jsonData));

$content->out_content('shablon.tpl');

?>
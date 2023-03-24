<?php
include_once 'tmp.hierarchy.php';

$template = new Template("");
$menu = array();
$menu["http://task.test:81"] = "Главная";
$template->set("data", $jsonData = json_decode(file_get_contents('json.json'), true));
var_dump($template->data);
$template->display("hierarchy");
?>
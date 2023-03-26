<?php
$jsonData = json_decode(file_get_contents('files/json.json'), true);

function recPrint($data) : string
{
    $ret = '<ul>';
    foreach ($data as $el) {
        if(isset($el['isFolder'])) {
            $ret .= "<li class='parent'>+" . $el['title'] . '</li>';
            $ret .= recPrint($el['children']);
        }
        else {
            $ret .= "<li>-" . $el['title'] . '</li>';
        }
    }
    $ret .= '</ul>';
    return $ret;
}
?>
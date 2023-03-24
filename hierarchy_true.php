<?php
$jsonData = json_decode(file_get_contents('files/json.json'), true);
recPrint($jsonData);

function recPrint($data)
{
    echo '<ul>';
    foreach ($data as $el) {
        if(isset($el['isFolder'])) {
            echo "<li>+" . $el['title'] . '</li>';
            recPrint($el['children']);
        }
        else {
            echo "<li>-" . $el['title'] . '</li>';
        }
    }
    echo '</ul>';
}
<?php
$jsonData = json_decode(file_get_contents('json.json'), true);
recPrint($jsonData);

function recPrint($data)
{
    foreach ($data as $el) {
        echo '<ul>';
        if(isset($el['isFolder'])) {
            echo "<li>+" . $el['title'] . '</li>';
            recPrint($el['children']);
        }
        else {
            echo "<li>-" . $el['title'] . '</li>';
        }
        echo '</ul>';
    }
}
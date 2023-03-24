<?php
$jsonData = json_decode(file_get_contents('json.json'), true);
recPrint($jsonData);

function recPrint($data)
{
    foreach ($data as $el) {
        if(isset($el['isFolder'])) {
            echo "<p>+" . $el['title'] . '</p>';
            recPrint($el['children']);
        }
        else {
            echo "<p>-" . $el['title'] . '</p>';
        }
    }
}
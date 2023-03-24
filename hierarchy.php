<ul>
    <?php foreach ($this->data as $el):?>
        <?php if (isset($el['isFolder'])):?>
            <li>
                <span>+<?=$el;?></span>
                <?php include (__FILE__);?>
            </li>
        <?endif;?>
    <?php endforeach; ?>
</ul>

<ul>
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
</ul>
<div class="content__main-col">
    <ul class="items-list">
        <?php foreach ($items as $item): ?>
            <?=renderTemplate('inc/item.php', ['item' => $item]);?>
        <?php endforeach; ?>
    </ul>
</div>
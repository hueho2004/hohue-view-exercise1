<p>Here are all the fruits:</p>
<ul>
    <?php foreach ($fruits as $fruit): ?>
        <li><?= $fruit['name'] ?> costs <?= $fruit['price'] ?> $</li>
    <?php endforeach; ?>
</ul>
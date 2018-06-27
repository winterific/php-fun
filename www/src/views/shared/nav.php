<ul>
<?php foreach ($nav as $link): ?>
  <li><a href="<?= _e($link['href']) ?>"><?= _e($link['title']) ?></a></li>
<?php endforeach; ?>
</ul>

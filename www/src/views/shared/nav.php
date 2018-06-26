<ul>
<?php foreach ($nav as $link): ?>
  <li><a href="<?= _($link['href']) ?>"><?= _($link['title']) ?></a></li>
<?php endforeach; ?>
</ul>

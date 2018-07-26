<?php
$programs = json_decode(file_get_contents('https://www.snhu.edu/webapi/programfinder/test'));
ob_start();
// print_r($programs);
if (!empty($programs)):
?>
  <p>Here's an example which calls our program finder Web API and loads the results.</p>
  <h2>Program Finder (<?= $programs->Count ?>)</h2>
  <ul>
    <?php foreach ($programs->Results as $result) {
      $program = $result->Program;
      ?>
        <li>
          <h3><?= _e($program->Name) ?></h3>
          <?php if ($program->OnlineURL): ?>
            <a target="_blank" href="<?= 'https://www.snhu.edu'._e($program->OnlineURL) ?>">Online</a>
          <?php endif; ?>
          <?php if ($program->CampusURL): ?>
            <a target="_blank" href="<?= 'https://www.snhu.edu'._e($program->CampusURL) ?>">Campus</a>
          <?php endif; ?>
        </li>
      <?php
    } ?>
  </ul>
  <?php
endif;
block('main', ob_get_clean());
include VIEWS.'/shared/layout.php';

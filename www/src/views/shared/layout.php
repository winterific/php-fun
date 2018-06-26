<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= title('page') ?></title>
  </head>
  <body>
    <header>
      <h1><?= title() ?></h1>
    </header>
    <main>
      <?= block('main') ?>
    </main>
    <footer>
      <p>&copy; <?= date('Y') ?> Footer</p>
    </footer>
  </body>
</html>

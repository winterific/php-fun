<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= title('page') ?></title>
    <link href="https://fonts.googleapis.com/css?family=Alegreya|Alegreya+Sans" rel="stylesheet">
    <link rel="stylesheet" href="/dist/css/styles.css">
    <script type="text/javascript" src="/dist/js/scripts.js" async></script>
  </head>
  <body <?= body_classes(); ?>>
    <header>
      <div class="wrap"><h1><?= title() ?></h1>
        <nav>
          <?php include VIEWS.'/shared/nav.php'; ?>
        </nav>
      </div>
    </header>
    <main>
      <div class="wrap"><?= block('main') ?></div>
    </main>
    <footer>
      <div class="wrap"><p>&copy; <?= date('Y') ?> Footer</p></div>
    </footer>
  </body>
</html>

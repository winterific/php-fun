<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= title('page') ?></title>
    <link href="https://fonts.googleapis.com/css?family=Alegreya|Alegreya+Sans" rel="stylesheet">
    <link rel="stylesheet" href="/dist/css/styles.css">
    <script type="text/javascript" src="/dist/js/scripts.js" async></script>
  </head>
  <body>
    <header>
      <div class="wrap"><h1><?= title() ?></h1>
        <nav>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/some-page">Some Page</a></li>
            <li><a href="/thank-you">Thank You Page</a></li>
            <li><a href="/lshjdfkajshf">404 Page</a></li>
            <li><a href="/2018/06/happy-birthday">Birthday Blog Post!!!!</a></li>
          </ul>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>404 Page Not Found</title>
    <link rel="stylesheet" href="<?= base_url('erorr/E.css') ?>">
</head>
<body>

<h1>404 Error Page </h1>
<p class="zoom-area">
            <?php if (! empty($message) && $message !== '(null)') : ?>
                <?= nl2br(esc($message)) ?>
            <?php else : ?>
                Sorry! Cannot seem to find the page you were looking for.
            <?php endif ?>
        </p>
<section class="error-container">
  <span class="four"><span class="screen-reader-text">4</span></span>
  <span class="zero"><span class="screen-reader-text">0</span></span>
  <span class="four"><span class="screen-reader-text">4</span></span>
</section>
</body>
</html>

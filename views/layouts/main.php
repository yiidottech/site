<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="description" content="<?= \Yii::t('site', 'meta.description'); ?>">

  <link rel="apple-touch-icon" sizes="57x57" href="/demo/favicon/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/demo/favicon/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/demo/favicon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/demo/favicon/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/demo/favicon/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/demo/favicon/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/demo/favicon/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/demo/favicon/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/demo/favicon/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="/demo/favicon/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/demo/favicon/favicon-194x194.png" sizes="194x194">
  <link rel="icon" type="image/png" href="/demo/favicon/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="/demo/favicon/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="/demo/favicon/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/demo/favicon/manifest.json">
  <link rel="mask-icon" href="/demo/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="/demo/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-TileImage" content="/demo/favicon/mstile-144x144.png">
  <meta name="msapplication-config" content="/demo/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <?= Html::csrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="site-loader"></div>

<?php

if (
    'site' === Yii::$app->controller->id
    && 'index' === Yii::$app->controller->action->id
) {
    include (__DIR__ . '/../site/index/splash.php');
}

include (__DIR__ . '/inc/header.php');

?>

<div class="site-wrapper">
  <div class="site-body">
    <?= $content ?>
  </div>

<?php
include (__DIR__ . '/inc/footer.php');
?>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

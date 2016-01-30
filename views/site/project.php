<?php

/* @var $this yii\web\View */

$this->title = \Yii::t('site', 'projects.title.' . $p) . ' :: ' . \Yii::t('site', 'meta.title');
?>

<?php
include Yii::getAlias('@webroot/demo/projects/' . $p . '/' . substr(\Yii::$app->language, 0, 2) . '.html');
?>
<?php

/* @var $this yii\web\View */

$this->title = \Yii::t('site', 'meta.title');
?>

<?php

include \Yii::getAlias('@app/views/site/index/about.php');
include \Yii::getAlias('@app/views/site/index/testimonials.php');
include \Yii::getAlias('@app/views/site/index/services.php');
include \Yii::getAlias('@app/views/site/index/work.php');
include \Yii::getAlias('@app/views/site/index/prices.php');
include \Yii::getAlias('@app/views/site/index/contact.php');

?>
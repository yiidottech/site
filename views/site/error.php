<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<section id="error" class="section">

    <div class="section-row-container">

        <div class="section-row half-padding-bottom">

            <div class="container site-error">

                <div class="row">

                    <div class="col-lg-12">

                        <h1 class="section-title">
                            <?= Html::encode($this->title) ?>
                            <small><?= nl2br(Html::encode($message)) ?></small>
                        </h1>

                        <p>
                            <?= \Yii::t('site', 'index.error.message.1'); ?>
                        </p>
                        <p>
                            <?= \Yii::t('site', 'index.error.message.2'); ?>
                        </p>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
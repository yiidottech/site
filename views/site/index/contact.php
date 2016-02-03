<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\web\View;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
?>

<section class="section th-dark">

    <div class="section-row-container">

        <div class="section-row">

            <div class="container">

                <div class="row" data-animation-chain-duration="800">

                    <div class="col-md-8 col-md-push-2">

                        <div class="call-to-action centered unboxed no-margin-bottom">
                            <div class="call-to-action-inner">
                                <div class="col-text" data-animation-name="bounceIn">
                                    <h2 class="headline">
                                        <?= \Yii::t('site', 'index.contact.video-bg-text'); ?>
                                    </h2>
                                </div>
                                <div class="col-btn" data-animation-name="fadeInUp">
                                    <a href="#contact" class="btn btn-lg btn-default">
                                        <?= \Yii::t('site', 'index.contact.bn-title'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="section-overlay"></div>

    <div class="section-media section-media-video" style="background-image: url(demo/img/first-frame.jpg);">

        <video style="width: 100%; height: 100%;" loop autoplay>
            <!-- WebM/VP8 for Firefox4, Opera, and Chrome -->
            <source type="video/webm" src="demo/videos/bg1.webm">
            <!-- MP4 for Safari, IE9, iPhone, iPad, Android, and Windows Phone 7 -->
            <source type="video/mp4" src="demo/videos/bg1.mp4">
        </video>

    </div>

</section>

<section id="contact" class="section">

    <div class="section-row-container">

        <div class="section-row half-padding-bottom">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12">

                        <h1 class="section-title show-counter">
                            <?= \Yii::t('site', 'index.contact.title'); ?>
                            <small><?= \Yii::t('site', 'index.contact.subtitle'); ?></small>
                        </h1>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-8">

                        <?php $form = ActiveForm::begin([
                            'id' => 'contact-form',
                            'fieldConfig' => [
                                'template' => "{input}\n{error}",
                            ],
                            'options' => [
                                'class' => 'contact-form-custom'
                            ],
                        ]); ?>

                        <div class="form-wrap">
                            <div class="col-md-6">
                                <?= $form->field($cf, 'name')->textInput(['placeholder' => $cf->getAttributeLabel('name')]) ?>
                            </div>
                            <div class="col-md-6">
                                <?= $form->field($cf, 'email')->input('email', ['placeholder' => $cf->getAttributeLabel('email')]) ?>
                            </div>

                            <div class="col-md-6">
                                <?= $form->field($cf, 'url')->input('url', ['placeholder' => $cf->getAttributeLabel('url')]) ?>
                            </div>
                            <div class="col-md-6">
                                <?= $form->field($cf, 'subject')->textInput(['placeholder' => $cf->getAttributeLabel('subject')]) ?>
                            </div>

                            <div class="col-md-12">
                                <?= $form->field($cf, 'body')->textArea(['rows' => 6, 'placeholder' => $cf->getAttributeLabel('body')]) ?>
                            </div>

                            <div class="col-md-12">
                                <?= $form->field($cf, 'verifyCode')->widget(Captcha::className(), [
                                    'template' => '<div class="row"><div class="col-lg-9">{input}</div><div class="col-lg-3">{image}</div></div>',
                                    'options' => ['placeholder' => $cf->getAttributeLabel('verifyCode'), 'class' => 'form-control'],

                                ]) ?>
                            </div>

                            <div class="col-md-12">
                                <?= Html::submitButton(\Yii::t('labels', 'Submit'), ['class' => 'btn btn-primary btn-block']) ?>
                            </div>

                        </div>

                        <?php ActiveForm::end(); ?>

                        <?php
                            $this->registerJs("
							$( '.contact-form-custom' ).on('beforeSubmit', function() {
							  var form = this;
							  $( 'button:submit', this ).attr('disabled', true).text('" . \Yii::t('labels', 'Please wait...') . "');
							  $( form ).ajaxSubmit(function( response ) {
									response = $.parseJSON( response );
									$( $( document )[0].createElement( 'div' ) )
										.addClass( 'alert' )
										.toggleClass( 'alert-danger', ! response.success )
										.toggleClass( 'alert-success', response.success )
										.html( response.message )
										.prepend( '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>' )
										.hide().prependTo( form ).slideDown();

                                    $( 'button:submit', this ).attr('disabled', false).text('" . \Yii::t('labels', 'Submit') . "');

									if( response.success ) {
										$( '.form-wrap', form ).resetForm().hide();
									}

								});
								return false;
							});
                                ", View::POS_LOAD, 'my-options');
                        ?>

                    </div>

                    <div class="col-md-4">

                        <aside class="sidebar">

                            <div class="sidebar-block">
                                <p>
                                    <strong class="text-semibold">Yii.tech</strong> is owned and operated by "Best Media Service" LLC
                                    <br>Prospekt Generala Tyuleneva #2B, 432072, Ulyanovsk, Russia.
                                </p>
                            </div>

                            <div class="sidebar-block">
                                <p class="lead">
                                    <strong>Email:</strong> hey@yii.tech<br>
                                </p>
                            </div>

                        </aside>

                    </div>

                </div>

            </div>

        </div>

        <div class="section-row no-padding-top no-padding-bottom">

            <div class="google-maps-container">
                <div class="google-maps" data-center="54.373723,48.598894" data-markers="[{&quot;lat&quot;:&quot;54.373723&quot;,&quot;lng&quot;:&quot;48.598894&quot;}]" data-zoom="16" data-scrollWheel="false" data-monochrome="true"></div>
            </div>

        </div>

    </div>

</section>
<?php

use yii\helpers\Url;

?>

<section id="work" class="section">

    <div class="section-row-container">

        <div class="section-row">

            <div class="container">

                <div class="row">

                    <div class="col-lg-3">

                        <h1 class="section-title show-counter">
                            <?= \Yii::t('site', 'index.work.title'); ?>
                            <small><?= \Yii::t('site', 'index.work.subtitle'); ?></small>
                        </h1>

                    </div>

                    <div class="col-lg-9">

                        <div class="macbook-slider">

                            <div class="wrap">

                                <div class="royalSlider rsHydrogen">

                                    <?php foreach ($allProjects as $k => $v): ?>

                                        <?php
                                        if (!file_exists(\Yii::getAlias('@webroot') . '/demo/projects/' . $k)) {
                                            \yii\helpers\FileHelper::copyDirectory(
                                                \Yii::getAlias('@webroot') . '/demo/projects/oks-rebranding',
                                                \Yii::getAlias('@webroot') . '/demo/projects/' . $k
                                            );
                                        }
                                        ?>

                                        <?php if ($v['featured']) : ?>
                                    <div class="slider-media project-slide">
                                        <figure>
                                            <img src="demo/projects/<?= $k ?>/main.jpg" alt="<?= $v['title'] ?>" class="rsImg">
                                            <figcaption>
                                                <span><?= $v['title'] ?></span>
                                            </figcaption>
                                        </figure>
                                        <div class="overlay transparent">
                                            <ul>
                                                <li class="mfp-zoom"><a href="demo/projects/<?= $k ?>/main.jpg"><i class="gi gi-resize-full"></i></a></li>
                                                <li class="mfp-details"><a href="<?= Url::toRoute(['site/project', 'p' => $k]); ?>"><i class="gi gi-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="section-row no-padding-top">

            <div class="container">

                <div class="row">

                    <div class="col-md-8 col-md-push-4">

                        <h2 class="section-separator-title">
                            <span data-shadow-text="Want to See More?"><?= \Yii::t('labels', 'Want to See More?'); ?></span>
                        </h2>

                    </div>

                </div>

                <div class="row" data-animation-chain-duration="1200">

                    <div class="col-md-12">

                        <div class="projects">

                            <div class="filter">
                                <span class="active-label visible-xs" data-toggle="dropdown"><?= \Yii::t('labels', 'All'); ?></span>
                                <ul>
                                    <li class="active"><a href="#" data-filter="*"><?= \Yii::t('labels', 'All'); ?></a></li>
                                    <?php foreach ($projectCategories as $k => $v): ?>
                                        <li><a href="#" data-filter=".<?= $k ?>"><?= $v ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>

                            <div class="items">

                                <div class="grid-sizer"></div>
                                <div class="gutter-sizer"></div>

                                <?php foreach ($allProjects as $k => $v): ?>
                                <div class="project <?= $v['classes'] ?>" data-animation-name="fadeInDown">
                                    <div class="project-image">
                                        <img src="demo/projects/<?= $k ?>/main.jpg" alt="">
                                        <div class="overlay">
                                            <ul class="actions">
                                                <li class="mfp-zoom">
                                                    <a href="demo/projects/<?= $k ?>/main.jpg"><i class="gi gi-resize-full"></i></a>
                                                </li>
                                                <li class="mfp-details">
                                                    <a href="<?= Url::toRoute(['site/project', 'p' => $k]); ?>"><i class="gi gi-search"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="project-info">
                                        <h4 class="project-name"><?= $v['title'] ?></h4>
                                        <div class="project-categories">
                                            <?php echo implode(', ', $v['categories']); ?>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>

                            </div>
 <?php /*
                            <div class="project-load-more">
                                <a href="#"><i class="gi gi-plus"></i></a>
                            </div>
 */ ?>
                            <p class="lead">
                                <?= \Yii::t('site', 'index.work.more'); ?>
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<section id="about" class="section">

    <div class="section-row-container">

        <div class="section-row">

            <div class="container">

                <div class="row">

                    <div class="col-lg-3">

                        <h1 class="section-title show-counter">
                            <?= \Yii::t('site', 'index.about.title'); ?>
                            <small><?= \Yii::t('site', 'index.about.subtitle'); ?></small>
                        </h1>

                    </div>

                    <div class="col-lg-8 col-lg-push-1">

                        <div class="row">

                            <div class="col-md-12">

                                <p class="lead">
                                    <?= \Yii::t('site', 'index.about.lead'); ?>
                                </p>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="icon-box" data-animation-name="fadeInUp">
                                    <div class="icon">
                                        <i class="fa fa-heart"></i>
                                    </div>
                                    <div class="info">
                                        <h4><?= \Yii::t('site', 'index.about.head.love'); ?></h4>
                                        <p><?= \Yii::t('site', 'index.about.text.love'); ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="icon-box" data-animation-name="fadeInUp">
                                    <div class="icon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <div class="info">
                                        <h4><?= \Yii::t('site', 'index.about.head.time'); ?></h4>
                                        <p><?= \Yii::t('site', 'index.about.text.time'); ?></p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="icon-box" data-animation-name="fadeInUp">
                                    <div class="icon">
                                        <i class="fa fa-bug"></i>
                                    </div>
                                    <div class="info">
                                        <h4><?= \Yii::t('site', 'index.about.head.bugs'); ?></h4>
                                        <p><?= \Yii::t('site', 'index.about.text.bugs'); ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="icon-box" data-animation-name="fadeInUp">
                                    <div class="icon">
                                        <i class="fa fa-life-ring"></i>
                                    </div>
                                    <div class="info">
                                        <h4><?= \Yii::t('site', 'index.about.head.supp'); ?></h4>
                                        <p><?= \Yii::t('site', 'index.about.text.supp'); ?></p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="section-row no-padding-top half-padding-bottom">

            <div class="container">

                <div class="row">

                    <div class="col-md-8 col-md-push-4">

                        <h2 class="section-separator-title">
                            <span data-shadow-text="<?= \Yii::t('site', 'index.about.team.head'); ?>"><?= \Yii::t('site', 'index.about.team.head'); ?></span>
                        </h2>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-8 col-md-push-4">
                        <p class="lead">
                            <?= \Yii::t('site', 'index.about.team.lead'); ?>
                        </p>
                    </div>

                </div>

                <div class="row">

                    <?php foreach ($team as $k => $v): ?>

                    <div class="col-md-push-4 col-md-4 col-sm-4">
                        <div class="team" data-animation-name="fadeInRight">
                            <div class="team-photo">
                                <figure>
                                    <img src="demo/team/<?= $k ?>.jpg" alt="<?= \Yii::t('site', 'index.about.team.' . $k . '.name'); ?>">
                                    <figcaption>
                                        <a href="#">
                                            <i class="gi gi-resize-full"></i>
                                        </a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="team-info">
                                <h4 class="team-name"><?= \Yii::t('site', 'index.about.team.' . $k . '.name'); ?></h4>
                                <p class="team-role"><?= \Yii::t('site', 'index.about.team.' . $k . '.role'); ?></p>
                            </div>
                            <div class="team-data" data-name="<?= \Yii::t('site', 'index.about.team.' . $k . '.name'); ?>" data-role="<?= \Yii::t('site', 'index.about.team.' . $k . '.role'); ?>" data-photo="demo/team/<?= $k ?>.jpg">
                                <p><?= \Yii::t('site', 'index.about.team.' . $k . '.bio'); ?></p>
                                <div class="spacer-60 bordered"></div>

                                <div class="social-list">
                                    <ul>
                                        <?php
                                            foreach (['website','linkedin','facebook','vk','twitter','google-plus','github','dribbble','behance','instagram','devianart'] as $s) {
                                                if (isset($v[$s])) {
                                                    echo '<li><a href="' . $v[$s] . '"><i class="fa fa-' . ($s == 'website' ? 'globe' : $s) . '"></i></a></li>';
                                                }
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>

        <div class="section-row half-padding-bottom no-padding-top">

            <div class="container">

                <div class="row">

                    <div class="col-md-3 col-sm-6">
                        <div class="counter" data-animation-name="fadeInUp">
                            <span class="number">12</span>
                            <span class="label"><?= \Yii::t('site', 'index.about.counter.1'); ?></span>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="counter" data-animation-name="fadeInUp">
                            <span class="number">612</span>
                            <span class="label"><?= \Yii::t('site', 'index.about.counter.2'); ?></span>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="counter" data-animation-name="fadeInUp">
                            <span class="number">3413</span>
                            <span class="label"><?= \Yii::t('site', 'index.about.counter.3'); ?></span>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="counter" data-animation-name="fadeInUp">
                            <span class="number">56</span>
                            <span class="label"><?= \Yii::t('site', 'index.about.counter.4'); ?></span>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
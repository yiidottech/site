<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index',[
            'allProjects' => $this->getProjects(),
            'projectCategories' => $this->getProjectCategories(),
            'team' => $this->getTeamMembers(),
        ]);
    }

    public function actionProject()
    {
        $p = \Yii::$app->request->get('p');
        $projects = $this->getProjects();

        if (!isset($projects[$p])) {
            throw new \yii\web\NotFoundHttpException();
        }

        return $this->render('project',[
            'p' => $p,
        ]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    protected function getProjects()
    {
        $projects = [
            'oks-rebranding' => ['webdesign,backend,frontend,branding,mobile', 1],
            'site-buykey' => ['webdesign,backend,frontend,branding', 1],
            'site-buydlplay' => ['webdesign,backend,frontend,branding'],
            'site-dl2play' => ['webdesign,backend,frontend,branding', 1],
            'site-cdkeycompare' => ['webdesign,backend,frontend', 1],
            'oks-spin-and-win' => ['webdesign,backend,frontend'],
            'platform-antibot-cloudflare' => ['platform,backend'],
            'platform-3rd-party-api-connect' => ['platform,backend'],
            'platform-redis-optimization' => ['platform,backend'],
            'oks-landing-pages' => ['webdesign'],
            'platform-sellers-direct' => ['platform,backend'],
            'platform-unified-accounts' => ['platform,backend,frontend'],
            'platform-multidomain' => ['platform,backend'],
            'platform-steam-connect' => ['platform,backend'],
            'gamepyro-app' => ['webdesign,backend,apps'],
            'platform-staff-permissions' => ['platform,backend'],
            'platform-improved-antifraud' => ['platform,backend'],
            'platform-social-login' => ['platform,frontend,backend'],
            'platform-affiliates' => ['platform,backend,frontend'],
            'platform-sellers' => ['platform,backend,frontend'],
            'platform-helpdesk' => ['platform,backend,frontend'],
            'platform-gateways-integration' => ['backend,gateways'],
            'site-pcgmedia' => ['webdesign,backend,frontend', 1],
            'oks-forum'  => ['webdesign,backend,frontend'],
            'oks-support-site' => ['webdesign,backend,frontend'],
            'oks-facebook-app' => ['platform,backend,frontend,apps,mobile'],
            'oks-data-feeds' => ['platform,backend'],
        ];

        $return = [];

        $projectCategories = $this->getProjectCategories();

        foreach ($projects as $k => $v) {
            $cats = explode(',', $v[0]);
            $_cats = array();
            foreach ($cats as $c) {
                $_cats[$c] = $this->getProjectCategory($c);
            }
            $return[$k] = [
                'title' => \Yii::t('site', 'projects.title.' . $k),
                'categories' => $_cats,
                'classes' => implode(' ', $cats),
                'featured' => isset($v[1]) && $v[1],
            ];
        }

        return $return;
    }

    public function getProjectCategories()
    {
        return [
            'webdesign' => \Yii::t('labels', 'Web Design'),
            'branding' => \Yii::t('labels', 'Branding'),
            'backend' => \Yii::t('labels', 'Backend'),
            'frontend' => \Yii::t('labels', 'Frontend'),
            'mobile' => \Yii::t('labels', 'Mobile'),
            'apps' => \Yii::t('labels', 'Apps'),
            'gateways' => \Yii::t('labels', 'Payment Gateways'),
            'platform'  => \Yii::t('labels', 'Platform Mods'),
        ];
    }

    public function getProjectCategory($cat = '')
    {
        static $cats = null;

        if (is_null($cats)) {
            $cats = $this->getProjectCategories();
        }

        return isset($cats[$cat]) ? $cats[$cat] : '';
    }

    public function getTeamMembers()
    {
        $team = [
            'igor' => [
                'twitter' => 'http://twitter.com/igor_kulomzin',
                'facebook' => 'https://www.facebook.com/yakrosafcheg',
                'google-plus' => 'https://plus.google.com/107270789500352408345',
                'website' => 'http://igoryan.me',
                'vk' => 'https://vk.com/igor.kulomzin',
                'github' => 'https://github.com/igoryan',
            ],
            'boris' => [
                //'twitter' => 'http://twitter.com/yiitech',
                'facebook' => 'https://www.facebook.com/profile.php?id=100001897357984',
                'google-plus' => 'https://plus.google.com/107713908467465148760',
                //'website' => 'http://yii.tech',
                'vk' => 'http://vk.com/id50622486',
            ],
        ];

        return $team;
    }
}
<?php

namespace app\controllers;

use app\models\base\Categories;
use app\models\ContactForm;
use app\models\form\LoginForm;
use app\models\form\ProfileForm;
use app\models\form\UserForm;
use app\models\Products;
use app\models\search\ProductsSearch;
use app\models\User;
use app\models\UserProfile;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\Response;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
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
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ProductsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        //        $pagination = new Pagination([
        //            'defaultPageSize' => 12, // Số mục trên mỗi trang
        //            'totalCount' => $dataProvider->getTotalCount(), // Tổng số mục
        //        ]);

        //        $dataProvider->pagination = $pagination;
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        // die();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            //            var_dump($model);
            // die();
            return $this->renderAjax('homepage');
        }

        $model->password = '';
        return $this->renderAjax('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->renderAjax('homepage');
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
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

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionHomepage()
    {
        return $this->renderAjax('homepage');
    }

    public function actionLogin2()
    {
        return $this->render('login2');
    }

    public function actionCauchuyenthuonghieu(){
        return $this->renderAjax('cauchuyenthuonghieu');
    }

    public function actionProducts()
    {
        $searchModel = new ProductsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->renderAjax('products', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCategoryDetails($id)
    {
        $searchModel = new ProductsSearch();
        $dataProvider = $searchModel->searchCate($this->request->queryParams, $id);

        return $this->renderAjax('category-details', ['dataProvider'=>$dataProvider, 'searchModel'=>$searchModel]);
    }

    public function actionViewsProduct($id)
    {
        $model = Products::findOne(['id'=>$id]);
        return $this->renderAjax('views-product', [
            'model' => $model,
        ]);
    }
    public function actionCart(){
        return $this->renderAjax('cart');
    }

    public  function actionUserProfile($id){
        $profile = UserProfile::findOne(['id'=>$id]);
        $model = new ProfileForm();
//        var_dump($profile);
//        die();
        $model->setAttributes($profile->attributes);
        $model->id = $profile->id;

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save($profile)) {
            return $this->redirect(['user-profile', 'id' => $id]);
        }

        return $this->renderAjax('user-profile', [
            'model' => $model,
        ]);
    }
    public function actionChangePass($id) {
        $user = User::findOne(['id'=>$id]);
        $model = new UserForm();
        $model->setAttributes($user->attributes);
        $model->password = "";
        if ($this->request->isPost && $model->load($this->request->post())) {
            $model->save($user);
            return $this->redirect(['site/user-profile', 'id' => Yii::$app->user->identity->getProfileId()]);
        }

        return $this->renderAjax('change-pass', [
            'model' => $model,
        ]);


    public function actionCuahang(){
        return $this->renderAjax('cuahang');
    }

    public function actionTintuc(){
        return $this->renderAjax('tintuc');
    }

    public function actionNhuongquyen(){
        return $this->renderAjax('nhuongquyen');
    }

    public function actionNavbar(){
        return $this->renderAjax('navbar');
    }

    public function actionFooter(){
        return $this->renderAjax('footer');
    }
    public function actionChart(){
        return $this->renderAjax('chart');
    }
}

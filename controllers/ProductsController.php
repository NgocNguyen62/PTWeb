<?php

namespace app\controllers;

use app\models\base\Products;
use app\models\form\ProductForm;
use app\models\search\ProductsSearch;
use yii\helpers\FileHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProductsController implements the CRUD actions for Products model.
 */
class ProductsController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Products models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ProductsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Products model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Products model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ProductForm();
        $product = new Products();

        if ($this->request->isPost) {
            $model->load($this->request->post());
            $model->avatar = UploadedFile::getInstance($model, 'avatar');
//                var_dump($model->save($product));
//                die();
            if($model->save($product)){
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Products model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $product = $this->findModel($id);
        $model = new ProductForm();
        $model->setAttributes($product->attributes);
        $oldAvatar = $product->avatar;
//        $model->avatar = file_get_contents($product->avatar);
        $model->id = $product->id;

        if ($this->request->isPost && $model->load($this->request->post())) {
            $model->avatar = UploadedFile::getInstance($model, 'avatar');
//            var_dump($model);
//            die();
            if($model->avatar == null){
//                var_dump($product->name);
//                var_dump($model->name);
//                die();
                $model->urlAvatar = str_replace($product->name,$model->name,$oldAvatar);
            }
//            var_dump($model);
//            var_dump($product);
//            die();
            $avatar = $product->avatar;

            $folder = 'products/'. $product->id . '-' . $product->name;
//
            if ($model->save($product)) {
                $folder2 = 'products/'. $model->id . '-' . $model->name;
                if (is_dir($folder)) {
                    if($folder !== $folder2){
//                        mkdir($folder2, 0777, true);
//                        $new_path = $folder2 . '/' . 'avatar-' . $->avatar->baseName . time() . '.' . $model->avatar->extension;
//                        copy($folder, $folder2);
                        FileHelper::copyDirectory($folder, $folder2);
                        FileHelper::removeDirectory($folder);
//                        rename($folder, $folder2);
                    } else{
                        if($avatar !== $model->avatar && file_exists($avatar)){
                            unlink($avatar);
                        }
                    }

                }

                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Products model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $folder = 'products/'. $model->id . '-' . $model->name;
        if (file_exists($folder)) {
            FileHelper::removeDirectory($folder);
        }
        $model->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Products model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Products the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Products::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
